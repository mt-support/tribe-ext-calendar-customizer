<?php

// Do not load directly.
if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}

if ( ! class_exists( 'Tribe__View_Class' ) ) {


	/**
	 * Class Tribe__View_Class
	 */
	abstract class Tribe__View_Class {

		/**
		 * Enqueue script for live preview
		 */
		public function live_preview() {
			wp_enqueue_script(
				'tribe-ext-calendar-customizer-plugin',
				MY_PLUGIN_PATH . 'js/tribe-ext-calendar-customizer.js',
				array( 'jquery', 'customize-preview' ),
				'1.0.0',
				true
			);
		} // end function live_preview()
	}

}