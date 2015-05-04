<div class="wrap">
	
	<?php screen_icon(); ?>

	<h2><?php esc_html_e( 'Color Helper Classes' ); ?></h2>
	
	<div class="mp6-sg-example">
		<h3>Notices</h3>
		<table class="mp6-table">
			<thead>
				<tr>
					<th class="sg-example-code"><?php esc_html_e( 'Class' ); ?></th>
					<th class="sg-example-descrip"><?php esc_html_e( 'Description' ); ?></th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td><code>.notice notice-error</code></td>
					<td><span class="notice notice-error"><?php esc_html_e( "Text with this class uses the error color." ); ?></span></td>
				</tr>
				<tr>
					<td><code>.notice .notice-info</code></td>
					<td><span class="notice notice-info"><?php esc_html_e( "Text with this class uses the info color." ); ?></span></td>
				</tr>
				<tr>
					<td><code>.notice .notice-success</code></td>
					<td><span class="notice notice-success"><?php esc_html_e( "Text with this class uses the success color." ); ?></span></td>
				</tr>
				<tr>
					<td><code>.notice .notice-warning</code></td>
					<td><span class="notice notice-warning"><?php esc_html_e( "Text with this class uses the warning color." ); ?></span></td>
				</tr>
				<tr>
					<td><code>#update-nag</code><code>.update-nag</code></td>
					<td><span class="update-nag"><?php esc_html_e( "Text within the update-nag block." ); ?></span></td>	
				</tr>
				<tr>
					<td><code>highlight</code></td>
					<td><span class="highlight"><?php esc_html_e( "Highlighted text." ); ?></span>
				</tr>
			</tbody>
		</table>
	</div>

	<div class="mp6-sg-example">
		<h3>Dashicons</h3>
		<h4><span class="dashicons dashicons-editor-help"></span><?php esc_html_e( "This heading has an icon." ); ?></h4>
		<pre><code>&lt;h4&gt;&lt;span class="dashicons dashicons-editor-help"&gt;&lt;/span&gt;<?php esc_html_e( "This heading has an icon." ); ?>&lt;/h4&gt;</code></pre>
		<p>Add an icon using the <code>.dashicons</code> class and the accompanying dashicon class found here: <a href="https://developer.wordpress.org/resource/dashicons/#vault">Dashicons reference page</a>.</p>
	</div>

</div><!-- .wrap -->
