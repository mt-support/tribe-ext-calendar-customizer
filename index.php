<?php
/**
 * Plugin Name:       The Events Calendar Extension: Calendar Customizer
 * Plugin URI:        https://theeventscalendar.com/extensions/calendar-customizer/
 * GitHub Plugin URI: https://github.com/mt-support/tribe-ext-calendar-customizer/
 * Description:       Customize the looks of The Events Calendar's month view.
 * Version:           1.1.0
 * Extension Class:   Tribe__Extension__Calendar_Customizer
 * Author:            Modern Tribe, Inc.
 * Author URI:        http://m.tri.be/1971
 * License:           GPL version 3 or any later version
 * License URI:       https://www.gnu.org/licenses/gpl-3.0.html
 * Text Domain:       tribe-ext-calendar-customizer
 *
 *     This plugin is free software: you can redistribute it and/or modify
 *     it under the terms of the GNU General Public License as published by
 *     the Free Software Foundation, either version 3 of the License, or
 *     any later version.
 *
 *     This plugin is distributed in the hope that it will be useful,
 *     but WITHOUT ANY WARRANTY; without even the implied warranty of
 *     MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 *     GNU General Public License for more details.
 */

// Do not load unless Tribe Common is fully loaded and our class does not yet exist.
if (
	class_exists( 'Tribe__Extension' )
	&& ! class_exists( 'Tribe__Extension__Calendar_Customizer' )
) {
	/**
	 * Extension main class, class begins loading on init() function.
	 */
	class Tribe__Extension__Calendar_Customizer extends Tribe__Extension {

		/**
		 * Setup the Extension's properties.
		 *
		 * This always executes even if the required plugins are not present.
		 */
		public function construct() {
			$this->add_required_plugin( 'Tribe__Events__Main', '4.6' );

			define( 'MY_PLUGIN_PATH', plugin_dir_url( __FILE__ ) );
		}

		/**
		 * Extension initialization and hooks.
		 */
		public function init() {
			// Load plugin textdomain
			// Don't forget to generate the 'languages/match-the-plugin-directory-name.pot' file
			load_plugin_textdomain( 'tribe-ext-calendar-customizer', false, basename( dirname( __FILE__ ) ) . '/languages/' );

			// For later use
			//include_once dirname( __FILE__ ) . '/vendor/class-kirki-installer-section.php';


			if ( ! class_exists( 'Tribe__View_Class' ) ) {
				require_once dirname( __FILE__ ) . '/src/class-view.php';
			}
			if ( ! class_exists( 'Month_View_Class' ) ) {
				require_once dirname( __FILE__ ) . '/src/class-month-view.php';
			}
			if ( ! class_exists( 'List_View_Class' ) ) {
				require_once dirname( __FILE__ ) . '/src/class-list-view.php';
			}

			$month_view = new Month_View_Class();

			add_action( 'customize_register', array( $month_view, 'tecc_register_customizer' ) );
			add_action( 'wp_head', array( $month_view, 'tecc_css' ) );
			add_action( 'customize_preview_init', array( $month_view, 'live_preview' ) );

			$list_view = new List_View_Class();

			add_action( 'customize_register', array( $list_view, 'register_customizer' ) );
			add_action( 'wp_head', array( $list_view, 'list_view_css' ) );
			add_action( 'customize_preview_init', array( $list_view, 'live_preview' ) );
			//add_action( 'customize_preview_init', array( $list_view, 'tecc_live_preview' ) );

		}


	} // end class
} // end if class_exists check