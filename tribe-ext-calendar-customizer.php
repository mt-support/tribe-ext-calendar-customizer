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
 *
 *     Developer notes:
 *     There are 2 ways of showing the effect of a setting change in the customizer.
 *
 *     'transport' => 'postMessage'
 *     This requires a javascript file that listens for a change event and changes
 *     the css on the fly, without the need to reload the page. This gives a better
 *     user experience, as the change in the preview is immediate.
 *     The challenge is reverting to default values.
 *       1. Once a setting is saved, and the Customizer is reloaded, then we do not
 *          know what the default value was any more. Resetting the value to default
 *          will not show any change in the preview.
 *
 *       2. We could define default values of The Events Calendar styling as found in
 *          the stylesheets, however, there might be themes which integrate The Events
 *          Calendar and use different default values for the styling.
 *
 *     'transport' => 'refresh'
 *     This reloads the preview with every change. While this requires more time to show
 *     the effect of the setting change, it is the safer option at the moment due to the
 *     default values explained above.
 *
 *     Thus, to adhere to our motto of "Sharing value quickly" we chose to go with the
 *     'refresh' option. The initial code for the other option is left in the code for
 *     the time being. Once a suitable solution presents itself we will reevaluate.
 *
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

			if ( class_exists(  'WP_Customize_Control' ) ) {
				require_once dirname( __FILE__ ) . '/src/Custom_Control_Section_Title.php';
			}
			if ( ! class_exists( 'Tribe__View_Class' ) ) {
				require_once dirname( __FILE__ ) . '/src/View.php';
			}
			if ( ! class_exists( 'Month_View_Class' ) ) {
				require_once dirname( __FILE__ ) . '/src/Month_View.php';
			}
			if ( ! class_exists( 'List_View_Class' ) ) {
				require_once dirname( __FILE__ ) . '/src/List_View.php';
			}

			$month_view = new Month_View_Class();

			add_action( 'customize_register', array( $month_view, 'tecc_register_customizer' ) );
			add_action( 'wp_head', array( $month_view, 'tecc_css' ) );

			// Needed for 'transport' => 'refresh'. See notes in the header
			// add_action( 'customize_preview_init', array( $month_view, 'live_preview' ) );

			$list_view = new List_View_Class();

			add_action( 'customize_register', array( $list_view, 'register_customizer' ) );
			add_action( 'wp_head', array( $list_view, 'list_view_css' ) );

			// Needed for 'transport' => 'refresh'. See notes in the header
			// add_action( 'customize_preview_init', array( $list_view, 'live_preview' ) );

		}


	} // end class
} // end if class_exists check