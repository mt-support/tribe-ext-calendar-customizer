<?php

// Do not load directly.
if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}

if ( class_exists( 'Tribe__View_Class' ) ) {

	/**
	 * Class Month_View_Class
	 */
	class Month_View_Class extends Tribe__View_Class {

		/**
		 * Add settings to the customizer under The Events Calendar > Month view
		 *
		 * @param $wp_customize
		 */
		public function tecc_register_customizer( $wp_customize ) {

			// Section title for header row
			$wp_customize->add_setting( 'title_header_row',
				[
					'default'           => '',
					'transport'         => 'postMessage',
					'sanitize_callback' => 'wp_filter_nohtml_kses',
				]
			);
			$wp_customize->add_control( new Custom_Control_Section_Title_Class( $wp_customize, 'title_header_row',
				[
					'label'       => _x( 'Header Row', 'Customizer section title', 'tribe-ext-calendar-customizer' ),
					'description' => __( 'This is the row with the day names', 'tribe-ext-calendar-customizer' ),
					'section'     => 'month_week_view',
				]
			) );

			// Month view, Header row background
			$wp_customize->add_setting(
				'tecc_header_row_background',
				[
					'transport' => 'refresh'
				]
			);
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'tecc_header_row_background',
					[
						'label'    => __( 'Header Row Background Color', 'tribe-ext-calendar-customizer' ),
						'section'  => 'month_week_view',
						'settings' => 'tecc_header_row_background'
					]
				)
			);

			// Month view, Header row text color
			$wp_customize->add_setting(
				'tecc_header_row_text_color',
				[
					'transport' => 'refresh'
				]
			);
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'tecc_header_row_text_color',
					[
						'label'    => __( 'Header Row Text Color ', 'tribe-ext-calendar-customizer' ),
						'section'  => 'month_week_view',
						'settings' => 'tecc_header_row_text_color'
					]
				)
			);

			// Month view, Header row cell border color
			$wp_customize->add_setting(
				'tecc_header_row_cell_border_color',
				[
					'transport' => 'refresh'
				]
			);
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'tecc_header_row_cell_border_color',
					[
						'label'       => __( 'Header Row Cell Border Color ', 'tribe-ext-calendar-customizer' ),
						'description' => __( 'Note: has no effect in some themes', 'tribe-ext-calendar-customizer' ),
						'section'     => 'month_week_view',
						'settings'    => 'tecc_header_row_cell_border_color'
					]
				)
			);

			// Section title for past days
			$wp_customize->add_setting( 'title_past_days',
				[
					'default'           => '',
					'transport'         => 'postMessage',
					'sanitize_callback' => 'wp_filter_nohtml_kses',
				]
			);
			$wp_customize->add_control( new Custom_Control_Section_Title_Class( $wp_customize, 'title_past_days',
				[
					'label'   => _x( 'Past Days', 'Customizer section title', 'tribe-ext-calendar-customizer' ),
					'section' => 'month_week_view',
				]
			) );

			// Month view, Current month past day header background
			$wp_customize->add_setting(
				'tecc_past_day_header_background',
				[
					'transport' => 'refresh'
				]
			);
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'tecc_past_day_header_background',
					[
						'label'    => __( 'Past Day Header Background Color', 'tribe-ext-calendar-customizer' ),
						'section'  => 'month_week_view',
						'settings' => 'tecc_past_day_header_background'
					]
				)
			);

			// Month view, Current month past day header text color
			$wp_customize->add_setting(
				'tecc_past_day_text_color',
				[
					'transport' => 'refresh'
				]
			);
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'tecc_past_day_text_color',
					[
						'label'    => __( 'Past Day Header Text Color', 'tribe-ext-calendar-customizer' ),
						'section'  => 'month_week_view',
						'settings' => 'tecc_past_day_text_color'
					]
				)
			);

			// Month view, Current month past day background
			$wp_customize->add_setting(
				'tecc_past_day_background',
				[
					'transport' => 'refresh'
				]
			);
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'tecc_past_day_background',
					[
						'label'    => __( 'Past Day Background Color', 'tribe-ext-calendar-customizer' ),
						'section'  => 'month_week_view',
						'settings' => 'tecc_past_day_background'
					]
				)
			);

			// Section title for present day
			$wp_customize->add_setting( 'title_present_day',
				[
					'default'           => '',
					'transport'         => 'postMessage',
					'sanitize_callback' => 'wp_filter_nohtml_kses',
				]
			);
			$wp_customize->add_control( new Custom_Control_Section_Title_Class( $wp_customize, 'title_present_day',
				[
					'label'   => _x( 'Present Day', 'Customizer section title', 'tribe-ext-calendar-customizer' ),
					'section' => 'month_week_view',
				]
			) );

			// Month view, Current month present day header background
			$wp_customize->add_setting(
				'tecc_present_day_header_background',
				[
					'transport' => 'refresh'
				]
			);
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'tecc_present_day_header_background',
					[
						'label'    => __( 'Present Day Header Background Color', 'tribe-ext-calendar-customizer' ),
						'section'  => 'month_week_view',
						'settings' => 'tecc_present_day_header_background'
					]
				)
			);

			// Month view, Current month present day header text color
			$wp_customize->add_setting(
				'tecc_present_day_text_color',
				[
					'transport' => 'refresh'
				]
			);
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'tecc_present_day_text_color',
					[
						'label'    => __( 'Present Day Header Text Color', 'tribe-ext-calendar-customizer' ),
						'section'  => 'month_week_view',
						'settings' => 'tecc_present_day_text_color'
					]
				)
			);

			// Month view, Current month present day background
			$wp_customize->add_setting(
				'tecc_present_day_background',
				[
					'transport' => 'refresh'
				]
			);
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'tecc_present_day_background',
					[
						'label'    => __( 'Present Day Background Color', 'tribe-ext-calendar-customizer' ),
						'section'  => 'month_week_view',
						'settings' => 'tecc_present_day_background'
					]
				)
			);

			// Section title for future days
			$wp_customize->add_setting( 'title_future_day',
				[
					'default'           => '',
					'transport'         => 'postMessage',
					'sanitize_callback' => 'wp_filter_nohtml_kses',
				]
			);
			$wp_customize->add_control( new Custom_Control_Section_Title_Class( $wp_customize, 'title_future_day',
				[
					'label'   => _x( 'Future Days', 'Customizer section title', 'tribe-ext-calendar-customizer' ),
					'section' => 'month_week_view',
				]
			) );

			// Month view, Current month future day header background
			$wp_customize->add_setting(
				'tecc_future_day_header_background',
				[
					'transport' => 'refresh'
				]
			);
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'tecc_future_day_header_background',
					[
						'label'    => __( 'Future Day Header Background Color', 'tribe-ext-calendar-customizer' ),
						'section'  => 'month_week_view',
						'settings' => 'tecc_future_day_header_background'
					]
				)
			);

			// Month view, Current month future day header text color
			$wp_customize->add_setting(
				'tecc_future_day_text_color',
				[
					'transport' => 'refresh'
				]
			);
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'tecc_future_day_text_color',
					[
						'label'    => __( 'Future Day Header Text Color', 'tribe-ext-calendar-customizer' ),
						'section'  => 'month_week_view',
						'settings' => 'tecc_future_day_text_color'
					]
				)
			);

			// Month view, Current month future day background
			$wp_customize->add_setting(
				'tecc_future_day_background',
				[
					'transport' => 'refresh'
				]
			);
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'tecc_future_day_background',
					[
						'label'    => __( 'Future Day Background Color', 'tribe-ext-calendar-customizer' ),
						'section'  => 'month_week_view',
						'settings' => 'tecc_future_day_background'
					]
				)
			);

			// Section title for date
			$wp_customize->add_setting( 'title_date',
				[
					'default'           => '',
					'transport'         => 'postMessage',
					'sanitize_callback' => 'wp_filter_nohtml_kses',
				]
			);
			$wp_customize->add_control( new Custom_Control_Section_Title_Class( $wp_customize, 'title_date',
				[
					'label'   => _x( 'Date', 'Customizer section title', 'tribe-ext-calendar-customizer' ),
					'section' => 'month_week_view',
				]
			) );

			// Month view, Date alignment
			$wp_customize->add_setting(
				'tecc_date_alignment',
				[
					'transport' => 'refresh'
				]
			);
			$wp_customize->add_control(
				'tecc_date_alignment',
				[
					'label'   => __( 'Date Alignment', 'tribe-ext-calendar-customizer' ),
					'section' => 'month_week_view',
					'type'    => 'select',
					'choices' => [
						''       => __( 'default', 'tribe-ext-calendar-customizer' ),
						'left'   => __( 'Left', 'tribe-ext-calendar-customizer' ),
						'center' => __( 'Center', 'tribe-ext-calendar-customizer' ),
						'right'  => __( 'Right', 'tribe-ext-calendar-customizer' ),
					]
				]
			);

			// Month view, Date size
			$wp_customize->add_setting(
				'tecc_date_size',
				[
					'transport' => 'refresh'
				]
			);
			$wp_customize->add_control(
				'tecc_date_size',
				[
					'type'        => 'number',
					'section'     => 'month_week_view',
					'label'       => __( 'Date size (px)' ),
					'description' => __( 'Leave empty to use the default font size.', 'tribe-ext-calendar-customizer' ),
					'input_attrs' => [
						'min'  => 0,
						'max'  => 100,
						'step' => 1,
					],
				]
			);

			// Section title for Event
			$wp_customize->add_setting( 'title_event',
				[
					'default'           => '',
					'transport'         => 'postMessage',
					'sanitize_callback' => 'wp_filter_nohtml_kses',
				]
			);
			$wp_customize->add_control( new Custom_Control_Section_Title_Class( $wp_customize, 'title_event',
				[
					'label'   => _x( 'Event', 'Customizer section title', 'tribe-ext-calendar-customizer' ),
					'section' => 'month_week_view',
				]
			) );

			// Month view, Event title text color
			$wp_customize->add_setting(
				'tecc_event_title_text_color',
				[
					'transport' => 'refresh'
				]
			);
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'tecc_event_title_text_color',
					[
						'label'    => __( 'Event Title Text Color', 'tribe-ext-calendar-customizer' ),
						'section'  => 'month_week_view',
						'settings' => 'tecc_event_title_text_color'
					]
				)
			);

			// Month view, View all text color
			$wp_customize->add_setting(
				'tecc_view_all_text_color',
				[
					'transport' => 'refresh'
				]
			);
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'tecc_view_all_text_color',
					[
						'label'       => __( '"View All" Text Color', 'tribe-ext-calendar-customizer' ),
						'description' => __( 'If empty, the Event Title Text Color will be used.', 'tribe-ext-calendar-customizer' ),
						'section'     => 'month_week_view',
						'settings'    => 'tecc_view_all_text_color'
					]
				)
			);

			// Section title for featured events
			$wp_customize->add_setting( 'title_featured_events',
				[
					'default'           => '',
					'transport'         => 'postMessage',
					'sanitize_callback' => 'wp_filter_nohtml_kses',
				]
			);
			$wp_customize->add_control( new Custom_Control_Section_Title_Class( $wp_customize, 'title_featured_events',
				[
					'label'   => _x( 'Featured Event', 'Customizer section title', 'tribe-ext-calendar-customizer' ),
					'section' => 'month_week_view',
				]
			) );

			// Month view, Featured event background color
			$wp_customize->add_setting(
				'tecc_featured_event_background_color',
				[
					'transport' => 'refresh'
				]
			);
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'tecc_featured_event_background_color',
					[
						'label'    => __( 'Featured Event Background Color', 'tribe-ext-calendar-customizer' ),
						'section'  => 'month_week_view',
						'settings' => 'tecc_featured_event_background_color'
					]
				)
			);

			// Month view, Featured event text color
			$wp_customize->add_setting(
				'tecc_featured_event_text_color',
				[
					'transport' => 'refresh'
				]
			);
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'tecc_featured_event_text_color',
					[
						'label'    => __( 'Featured Event Text Color', 'tribe-ext-calendar-customizer' ),
						'section'  => 'month_week_view',
						'settings' => 'tecc_featured_event_text_color'
					]
				)
			);

			// Section title for other
			$wp_customize->add_setting( 'title_other_month',
				[
					'default'           => '',
					'transport'         => 'postMessage',
					'sanitize_callback' => 'wp_filter_nohtml_kses',
				]
			);
			$wp_customize->add_control( new Custom_Control_Section_Title_Class( $wp_customize, 'title_other_month',
				[
					'label'   => _x( 'Other', 'Customizer section title', 'tribe-ext-calendar-customizer' ),
					'section' => 'month_week_view',
				]
			) );


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

	} // class
} // ! class_exists