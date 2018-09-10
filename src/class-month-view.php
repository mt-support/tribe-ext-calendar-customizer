<?php

// Do not load directly.
if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}

if ( class_exists( 'Tribe__View_Class' ) ) {
	return;
}

/**
 * Helper for ...
 */
class Month_View_Class extends Tribe__View_Class {

	/**
	 * Add settings to the customizer under The Events Calendar > Month view
	 *
	 * @param $wp_customize
	 */
	public function tecc_register_customizer( $wp_customize ) {

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
	public function tecc_css() {
		?>
		<style type="text/css">
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

	/**
	 * Enqueue script for live preview
	 */
	public function tecc_live_preview() {
		echo "xxx" . MY_PLUGIN_PATH;
		wp_enqueue_script(
			'tribe-ext-calendar-customizer-plugin-1',
			MY_PLUGIN_PATH . 'js/tribe-ext-calendar-customizer.js',
			array( 'jquery', 'customize-preview' ),
			'1.0.0',
			true
		);
	} // end function tecc_live_preview()

}