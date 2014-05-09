<?php
/*
Plugin Name: WordPress Style Guide
Plugin URI:  https://github.com/helenhousandi/wp-style-guide
Description: Because it's horrible that we don't have one.
Version:     1.0.0
Author:      The WordPress Team
Author URI:  http://wordpress.org
License:     GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
*/

class WP_Style_Guide {
	/**
	 * Screens added.
	 * @var array
	 */
	private $screens;

	/**
	 * Hook name of the top level page.
	 * @var string
	 */
	private $hookname;

	/**
	 * Assign values to properties.
	 */
	public function __construct() {
		$this->screens = $this->get_default_screens();
	}

	/**
	 * Set up hooks.
	 */
	public function run() {
		add_action( 'admin_enqueue_scripts', array( $this, 'admin_enqueue_scripts' ) );
		add_action( 'admin_head', array( $this, 'admin_head' ) );
		add_action( 'admin_menu', array( $this, 'admin_menu' ) );
	}

	/**
	 * Define the screens.
	 *
	 * @return array Screen configuration data.
	 */
	public function get_default_screens() {
		return array(
			'mp6-sg-jquery-ui'      => array(
				'page_title' => __( 'jQuery UI Components' ),
				'menu_title' => __( 'jQuery UI Components' ),
				'callback'   => 'jquery_ui', // note that this has to be a class method
				'hookname'   => null,
			),
			'mp6-sg-forms'          => array(
				'page_title' => __( 'Forms' ),
				'menu_title' => __( 'Forms' ),
				'callback'   => 'forms_page', // note that this has to be a class method
				'hookname'   => null,
			),
			'mp6-sg-helper-classes' => array(
				'page_title' => __( 'Helper Classes' ),
				'menu_title' => __( 'Helper Classes' ),
				'callback'   => 'helper_classes', // note that this has to be a class method
				'hookname'   => null,
			),
			'mp6-dashicons'         => array(
				'page_title' => __( 'Dashicons' ),
				'menu_title' => __( 'Dashicons' ),
				'callback'   => 'dashicons', // note that this has to be a class method
				'hookname'   => null,
			),
		);
	}

	/**
	 * Enqueue scripts and styles as needed.
	 */
	public function admin_enqueue_scripts() {
		if ( get_current_screen()->base === $this->screens['mp6-sg-jquery-ui']['hookname'] ) {
			wp_enqueue_script( 'jquery-ui-accordion' );
			wp_enqueue_script( 'jquery-ui-tabs' );
			wp_enqueue_script( 'jquery-ui-dialog' );
			wp_enqueue_script( 'jquery-ui-slider' );
			wp_enqueue_script( 'jquery-ui-datepicker' );
			wp_enqueue_script( 'jquery-ui-progressbar' );
			wp_enqueue_script( 'jquery-ui-button' );

			wp_enqueue_style( 'wp-jquery-ui', plugins_url( 'css/jquery-ui.css', __FILE__ ), false );
		}

		wp_enqueue_style( 'wp-style-guide', plugins_url( 'css/wp-style-guide.css', __FILE__ ), false );
		
		wp_enqueue_style( 'dashicons-guide', plugins_url( 'css/dashicons.css', __FILE__ ), false );
	}

	public function admin_head() {
?>
<style>
	.mp6 #adminmenu .<?php echo $this->hookname; ?> .wp-menu-image:before {
		content: '\f309';
	}
</style>
<?php
	}

	/**
	 * Add admin screens
	 */
	public function admin_menu() {
		$this->hookname = add_menu_page( 'WordPress Style Guide', 'Style Guide', 'read', 'mp6-sg', array( $this, 'toc' ) );

		foreach ( $this->screens as $slug => $args ) {
			$this->screens[$slug]['hookname'] = add_submenu_page( 'mp6-sg', $args['page_title'], $args['menu_title'], 'read', $slug, array( $this, $args['callback'] ) );
		}
	}

	/**
	 * Output for our top level screen
	 */
	public function toc() {
?>
<div class="wrap">

	<?php screen_icon(); ?>

	<h2><?php _e( 'WordPress Style Guide' ); ?></h2>

	<h3><?php _e( 'Table of Contents' ); ?></h3>

	<ul class="ul-disc">
	<?php foreach( $this->screens as $slug => $args ) : ?>
		<li><a href="<?php echo esc_url( admin_url( 'admin.php?page=' . $slug ) ); ?>"><?php echo esc_html( $args['page_title'] ); ?></a></li>
	<?php endforeach; ?>
	</ul>

</div><!-- .wrap -->
<?php
	}

	/**
	 * Output jQuery UI components admin page using jQuery UI's theme visual test.
	 */
	public function jquery_ui() {
		include_once( 'pages/jquery-ui.php' );
	}

	/**
	 * Output form component admin page.
	 */
	public function forms_page() {
		include_once( 'pages/forms-page.php' );
	}

	/**
	 * Output helper classes admin page.
	 */
	public function helper_classes() {
		include_once( 'pages/helper-classes.php' );
	}
	
	/**
	 * Output Dashicon admin page.
	 */
	public function dashicons() {
		include_once( 'pages/dashicons.php' );
	}
}

$wp_style_guide = new WP_Style_Guide;
$wp_style_guide->run();
