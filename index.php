<?php
/**
 * Plugin Name:       The Events Calendar Extension: Calendar Customizer
 * Plugin URI:        https://theeventscalendar.com/extensions/calendar-customizer/
 * GitHub Plugin URI: https://github.com/mt-support/tribe-ext-calendar-customizer/
 * Description:       Customize the looks of The Events Calendar's month view.
 * Version:           1.0.0
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
		}

		/**
		 * Extension initialization and hooks.
		 */
		public function init() {
			// Load plugin textdomain
			// Don't forget to generate the 'languages/match-the-plugin-directory-name.pot' file
			load_plugin_textdomain( 'tribe-ext-calendar-customizer', false, basename( dirname( __FILE__ ) ) . '/languages/' );

			add_action( 'customize_register', array( $this, 'tecc_register_customizer' ) );
			add_action( 'wp_head', array( $this, 'tecc_css' ) );
			add_action( 'customize_preview_init', array( $this, 'tecc_live_preview' ) );

		}

		function tecc_register_customizer( $wp_customize ) {

			/**
			 * Header row background
			 */
			$wp_customize->add_setting(
				'tecc_header_row_background',
				array(
					'transport' => 'postMessage'
				)
			);

			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'tecc_header_row_background',
					array(
						'label'    => __( 'Header Row Background Color', 'tribe-ext-calendar-customizer' ),
						'section'  => 'month_week_view',
						'settings' => 'tecc_header_row_background'
					)
				)
			);

			/**
			 * Header row text color
			 */
			$wp_customize->add_setting(
				'tecc_header_row_text_color',
				array(
					'transport' => 'postMessage'
				)
			);

			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'tecc_header_row_text_color',
					array(
						'label'    => __( 'Header Row Text Color ', 'tribe-ext-calendar-customizer' ),
						'section'  => 'month_week_view',
						'settings' => 'tecc_header_row_text_color'
					)
				)
			);

			/**
			 * Header row cell border color
			 */
			$wp_customize->add_setting(
				'tecc_header_row_cell_border_color',
				array(
					'transport' => 'postMessage'
				)
			);

			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'tecc_header_row_cell_border_color',
					array(
						'label'       => __( 'Header Row Cell Border Color ', 'tribe-ext-calendar-customizer' ),
						'description' => __( 'Note: has no effect in some themes', 'tribe-ext-calendar-customizer' ),
						'section'     => 'month_week_view',
						'settings'    => 'tecc_header_row_cell_border_color'
					)
				)
			);

			/**
			 * Current month past day header background
			 */
			$wp_customize->add_setting(
				'tecc_past_day_header_background',
				array(
					'transport' => 'postMessage'
				)
			);

			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'tecc_past_day_header_background',
					array(
						'label'    => __( 'Past Day Header Background Color', 'tribe-ext-calendar-customizer' ),
						'section'  => 'month_week_view',
						'settings' => 'tecc_past_day_header_background'
					)
				)
			);

			/**
			 * Current month past day header text color
			 */
			$wp_customize->add_setting(
				'tecc_past_day_text_color',
				array(
					'transport' => 'postMessage'
				)
			);

			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'tecc_past_day_text_color',
					array(
						'label'    => __( 'Past Day Header Text Color', 'tribe-ext-calendar-customizer' ),
						'section'  => 'month_week_view',
						'settings' => 'tecc_past_day_text_color'
					)
				)
			);

			/**
			 * Current month past day background
			 */
			$wp_customize->add_setting(
				'tecc_past_day_background',
				array(
					'transport' => 'postMessage'
				)
			);

			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'tecc_past_day_background',
					array(
						'label'    => __( 'Past Day Background Color', 'tribe-ext-calendar-customizer' ),
						'section'  => 'month_week_view',
						'settings' => 'tecc_past_day_background'
					)
				)
			);

			/**
			 * Current month present day header background
			 */
			$wp_customize->add_setting(
				'tecc_present_day_header_background',
				array(
					'transport' => 'postMessage'
				)
			);

			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'tecc_present_day_header_background',
					array(
						'label'    => __( 'Present Day Header Background Color', 'tribe-ext-calendar-customizer' ),
						'section'  => 'month_week_view',
						'settings' => 'tecc_present_day_header_background'
					)
				)
			);

			/**
			 * Current month present day header text color
			 */
			$wp_customize->add_setting(
				'tecc_present_day_text_color',
				array(
					'transport' => 'postMessage'
				)
			);

			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'tecc_present_day_text_color',
					array(
						'label'    => __( 'Present Day Header Text Color', 'tribe-ext-calendar-customizer' ),
						'section'  => 'month_week_view',
						'settings' => 'tecc_present_day_text_color'
					)
				)
			);

			/**
			 * Current month present day background
			 */
			$wp_customize->add_setting(
				'tecc_present_day_background',
				array(
					'transport' => 'postMessage'
				)
			);

			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'tecc_present_day_background',
					array(
						'label'    => __( 'Present Day Background Color', 'tribe-ext-calendar-customizer' ),
						'section'  => 'month_week_view',
						'settings' => 'tecc_present_day_background'
					)
				)
			);

			/**
			 * Current month future day header background
			 */
			$wp_customize->add_setting(
				'tecc_future_day_header_background',
				array(
					'transport' => 'postMessage'
				)
			);

			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'tecc_future_day_header_background',
					array(
						'label'    => __( 'Future Day Header Background Color', 'tribe-ext-calendar-customizer' ),
						'section'  => 'month_week_view',
						'settings' => 'tecc_future_day_header_background'
					)
				)
			);

			/**
			 * Current month future day header text color
			 */
			$wp_customize->add_setting(
				'tecc_future_day_text_color',
				array(
					'transport' => 'postMessage'
				)
			);

			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'tecc_future_day_text_color',
					array(
						'label'    => __( 'Future Day Header Text Color', 'tribe-ext-calendar-customizer' ),
						'section'  => 'month_week_view',
						'settings' => 'tecc_future_day_text_color'
					)
				)
			);

			/**
			 * Current month future day background
			 */
			$wp_customize->add_setting(
				'tecc_future_day_background',
				array(
					'transport' => 'postMessage'
				)
			);

			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'tecc_future_day_background',
					array(
						'label'    => __( 'Future Day Background Color', 'tribe-ext-calendar-customizer' ),
						'section'  => 'month_week_view',
						'settings' => 'tecc_future_day_background'
					)
				)
			);

			/**
			 * Date alignment
			 */
			$wp_customize->add_setting(
				'tecc_date_alignment',
				array(
					'transport' => 'postMessage'
				)
			);

			$wp_customize->add_control(
				'tecc_date_alignment',
				array(
					'label'   => __( 'Date Alignment', 'tribe-ext-calendar-customizer' ),
					'section' => 'month_week_view',
					'type'    => 'select',
					'choices' => array(
						''       => 'default',
						'left'   => 'Left',
						'center' => 'Center',
						'right'  => 'Right'
					)
				)
			);

			/**
			 * Date size
			 */
			$wp_customize->add_setting(
				'tecc_date_size',
				array(
					'transport' => 'postMessage'
				)
			);
			$wp_customize->add_control(
				'tecc_date_size',
				array(
					'type'        => 'number',
					'section'     => 'month_week_view',
					'label'       => __( 'Date size (px)' ),
					'description' => __( 'Leave empty to use the default font size.', 'tribe-ext-calendar-customizer' ),
					'input_attrs' => array(
						'min'  => 0,
						'max'  => 100,
						'step' => 1,
					),
				)
			);

			/**
			 * Event title text color
			 */
			$wp_customize->add_setting(
				'tecc_event_title_text_color',
				array(
					'transport' => 'postMessage'
				)
			);

			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'tecc_event_title_text_color',
					array(
						'label'    => __( 'Event Title Text Color', 'tribe-ext-calendar-customizer' ),
						'section'  => 'month_week_view',
						'settings' => 'tecc_event_title_text_color'
					)
				)
			);

			/**
			 * View all text color
			 */
			$wp_customize->add_setting(
				'tecc_view_all_text_color',
				array(
					'transport' => 'postMessage'
				)
			);

			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'tecc_view_all_text_color',
					array(
						'label'       => __( '"View All" Text Color', 'tribe-ext-calendar-customizer' ),
						'description' => __( 'If empty, the Event Title Text Color will be used.', 'tribe-ext-calendar-customizer' ),
						'section'     => 'month_week_view',
						'settings'    => 'tecc_view_all_text_color'
					)
				)
			);

			/**
			 * Featured event background color
			 */
			$wp_customize->add_setting(
				'tecc_featured_event_background_color',
				array(
					'transport' => 'postMessage'
				)
			);

			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'tecc_featured_event_background_color',
					array(
						'label'       => __( 'Featured Event Background Color', 'tribe-ext-calendar-customizer' ),
						'section'     => 'month_week_view',
						'settings'    => 'tecc_featured_event_background_color'
					)
				)
			);

			/**
			 * Featured event text color
			 */
			$wp_customize->add_setting(
				'tecc_featured_event_text_color',
				array(
					'transport' => 'postMessage'
				)
			);

			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'tecc_featured_event_text_color',
					array(
						'label'       => __( 'Featured Event Text Color', 'tribe-ext-calendar-customizer' ),
						'section'     => 'month_week_view',
						'settings'    => 'tecc_featured_event_text_color'
					)
				)
			);

		} // end function tecc_register_customizer()

		/**
		 * Generating the CSS
		 */
		function tecc_css() {
			?>
			<style type="text/css">
				<?php if( false === get_theme_mod( 'tcx2_display_header' ) ) { ?>
				#header {
					display: none;
				}
				<?php } // end if ?>

				<?php if( get_theme_mod( 'tecc_header_row_background') ) { ?>
				#tribe-events-content .tribe-events-calendar thead th {
					background-color: <?php echo get_theme_mod( 'tecc_header_row_background' ); ?>;
				}
				<?php } // end if ?>

				<?php if( get_theme_mod( 'tecc_header_row_text_color' ) ) { ?>
				.tribe-events-calendar thead th {
					color: <?php echo get_theme_mod( 'tecc_header_row_text_color' ); ?>;
				}
				<?php } // end if ?>

				<?php if( get_theme_mod( 'tecc_header_row_cell_border_color' ) ) { ?>
				#tribe-events-content .tribe-events-calendar thead th {
					border-left-color: <?php echo get_theme_mod( 'tecc_header_row_cell_border_color' ); ?>;
					border-right-color: <?php echo get_theme_mod( 'tecc_header_row_cell_border_color' ); ?>;
				}
				<?php } // end if ?>

				<?php if( get_theme_mod( 'tecc_past_day_header_background' ) ) { ?>
				#tribe-events-content .tribe-events-calendar td.tribe-events-past div[id*="tribe-events-daynum-"], #tribe-events-content .tribe-events-calendar td.tribe-events-past div[id*="tribe-events-daynum-"] > a {
					background-color: <?php echo get_theme_mod( 'tecc_past_day_header_background' ); ?>;
				}
				<?php } // end if ?>

				<?php if( get_theme_mod( 'tecc_past_day_text_color' ) ) { ?>
				#tribe-events-content .tribe-events-calendar td.tribe-events-past div[id*="tribe-events-daynum-"], #tribe-events-content .tribe-events-calendar td.tribe-events-past div[id*="tribe-events-daynum-"] > a {
					color: <?php echo get_theme_mod( 'tecc_past_day_text_color' ); ?>;
				}
				<?php } // end if ?>

				<?php if( get_theme_mod( 'tecc_past_day_background' ) ) { ?>
				#tribe-events-content .tribe-events-calendar td.tribe-events-past {
					background-color: <?php echo get_theme_mod( 'tecc_past_day_background' ); ?>;
				}
				<?php } // end if ?>

				<?php if( get_theme_mod( 'tecc_present_day_header_background' ) ) { ?>
				#tribe-events-content .tribe-events-calendar td.tribe-events-present div[id*="tribe-events-daynum-"], #tribe-events-content .tribe-events-calendar td.tribe-events-present div[id*="tribe-events-daynum-"] > a {
					background-color: <?php echo get_theme_mod( 'tecc_present_day_header_background' ); ?>;
				}
				<?php } // end if ?>

				<?php if( get_theme_mod( 'tecc_present_day_text_color' ) ) { ?>
				#tribe-events-content .tribe-events-calendar td.tribe-events-present div[id*="tribe-events-daynum-"], #tribe-events-content .tribe-events-calendar td.tribe-events-present div[id*="tribe-events-daynum-"] > a {
					color: <?php echo get_theme_mod( 'tecc_present_day_text_color' ); ?>;
				}
				<?php } // end if ?>

				<?php if( get_theme_mod( 'tecc_present_day_background' ) ) { ?>
				#tribe-events-content .tribe-events-calendar td.tribe-events-present {
					background-color: <?php echo get_theme_mod( 'tecc_present_day_background' ); ?>;
				}
				<?php } // end if ?>

				<?php if( get_theme_mod( 'tecc_future_day_header_background' ) ) { ?>
				#tribe-events-content .tribe-events-calendar td.tribe-events-future div[id*="tribe-events-daynum-"], #tribe-events-content .tribe-events-calendar td.tribe-events-future div[id*="tribe-events-daynum-"] > a {
					background-color: <?php echo get_theme_mod( 'tecc_future_day_header_background' ); ?>;
				}
				<?php } // end if ?>

				<?php if( get_theme_mod( 'tecc_future_day_text_color' ) ) { ?>
				#tribe-events-content .tribe-events-calendar td.tribe-events-future div[id*="tribe-events-daynum-"], #tribe-events-content .tribe-events-calendar td.tribe-events-future div[id*="tribe-events-daynum-"] > a {
					color: <?php echo get_theme_mod( 'tecc_future_day_text_color' ); ?>;
				}
				<?php } // end if ?>

				<?php if( get_theme_mod( 'tecc_future_day_background' ) ) { ?>
				#tribe-events-content .tribe-events-calendar td.tribe-events-future {
					background-color: <?php echo get_theme_mod( 'tecc_future_day_background' ); ?>;
				}
				<?php } // end if ?>

				<?php if( get_theme_mod( 'tecc_date_alignment' ) ) { ?>
				#tribe-events-content .tribe-events-calendar div[id*="tribe-events-daynum-"] {
					text-align: <?php echo get_theme_mod( 'tecc_date_alignment' ); ?>;
				}
				<?php } // end if ?>

				<?php if( get_theme_mod( 'tecc_date_size' ) ) { ?>
				#tribe-events-content .tribe-events-calendar div[id*="tribe-events-daynum-"], #tribe-events-content .tribe-events-calendar div[id*="tribe-events-daynum-"] a {
					font-size: <?php echo get_theme_mod( 'tecc_date_size' ); ?>px;
				}
				<?php } // end if ?>

				<?php if( get_theme_mod( 'tecc_event_title_text_color' ) ) { ?>
				.tribe-events-calendar div[id*="tribe-events-event-"] h3.tribe-events-month-event-title a, .tribe-events-calendar td .tribe-events-viewmore a {
					color: <?php echo get_theme_mod( 'tecc_event_title_text_color' ); ?>;
				}
				<?php } // end if ?>

				<?php if( get_theme_mod( 'tecc_view_all_text_color' ) ) { ?>
				.tribe-events-calendar td .tribe-events-viewmore a {
					color: <?php echo get_theme_mod( 'tecc_view_all_text_color' ); ?>;
				}
				<?php } // end if ?>

				<?php if( get_theme_mod( 'tecc_featured_event_background_color' ) ) { ?>
				#tribe-events-content.tribe-events-month table.tribe-events-calendar .type-tribe_events.tribe-event-featured {
					background-color: <?php echo get_theme_mod( 'tecc_featured_event_background_color' ); ?>;
				}
				<?php } // end if ?>

				<?php if( get_theme_mod( 'tecc_featured_event_text_color' ) ) { ?>
				#tribe-events-content table.tribe-events-calendar .type-tribe_events.tribe-event-featured .tribe-events-month-event-title a {
					color: <?php echo get_theme_mod( 'tecc_featured_event_text_color' ); ?>;
				}
				<?php } // end if ?>

			</style>
			<?php
		} // end function tecc_css()

		function tecc_live_preview() {
			wp_enqueue_script(
				'tribe-ext-calendar-customizer-plugin',
				plugin_dir_url( __FILE__ ) . 'js/tribe-ext-calendar-customizer.js',
				array( 'jquery', 'customize-preview' ),
				'1.0.0',
				true
			);
		} // end function tecc_live_preview()

	} // end class
} // end if class_exists check