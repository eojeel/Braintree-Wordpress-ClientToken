<?php
function generateClientToken() {
		// require braintree (installed via composer)
    require ABSPATH . 'vendor/autoload.php';
		// include braintree configuration
		require_once ABSPATH .'config.php';
		// wp localize script (to share php with JS)
		wp_enqueue_script( 'clientToken', get_template_directory_uri() . '/js/clientToken.js' );
		// ref: https://codex.wordpress.org/Function_Reference/wp_localize_script
		wp_localize_script('clientToken', 'clientToken_vars', array(
				'token' => ($clientToken = Braintree_ClientToken::generate())
					)
			);
	}
add_shortcode( 'ClientToken', 'generateClientToken' );
