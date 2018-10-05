<?php

// Do not load directly.
if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}

if ( class_exists( 'Tribe__View_Class' ) ) {

	/**
	 * Helper for ...
	 */
	class List_View_Class extends Tribe__View_Class {

		/**
		 * Add settings to the customizer under The Events Calendar > Month view
		 *
		 * @param $wp_customize
		 */
		public function register_customizer( $wp_customize ) {

			// Section title for page title
			$wp_customize->add_setting( 'title_page_title',
				[
					'default'           => '',
					'transport'         => 'postMessage',
					'sanitize_callback' => 'wp_filter_nohtml_kses',
				]
			);
			$wp_customize->add_control( new Custom_Control_Section_Title_Class( $wp_customize, 'title_page_title',
				[
					'label'   => _x( 'Page title', 'Customizer section title', 'tribe-ext-calendar-customizer' ),
					'section' => 'day_list_view',
				]
			) );

			 // List view, page title text color
			$wp_customize->add_setting(
				'list_page_title_text_color',
				[
					'transport' => 'refresh',
				]
			);
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'list_page_title_text_color',
					[
						'label'    => __( 'Page Title Text Color', 'tribe-ext-calendar-customizer' ),
						'section'  => 'day_list_view',
						'settings' => 'list_page_title_text_color'
					]
				)
			);

			// List view, page title font size
			$wp_customize->add_setting(
				'list_page_title_font_size',
				[
					'transport' => 'refresh',
				]
			);
			$wp_customize->add_control(
				'list_page_title_font_size',
				[
					'type'        => 'number',
					'section'     => 'day_list_view',
					'label'       => __( 'Page Title Font Size (px)' ),
					'description' => __( 'Leave empty to use the default font size.', 'tribe-ext-calendar-customizer' ),
					'input_attrs' => [
						'min'  => 0,
						'max'  => 100,
						'step' => 1,
					],
				]
			);

			// List view, page title alignment
			$wp_customize->add_setting(
				'list_page_title_alignment',
				[
					'transport' => 'refresh'
				]
			);
			$wp_customize->add_control(
				'list_page_title_alignment',
				[
					'label'   => __( 'Page Title Text Alignment', 'tribe-ext-calendar-customizer' ),
					'section' => 'day_list_view',
					'type'    => 'select',
					'choices' => [
						''       => __( 'default', 'tribe-ext-calendar-customizer' ),
						'left'   => __( 'Left', 'tribe-ext-calendar-customizer' ),
						'center' => __( 'Center', 'tribe-ext-calendar-customizer' ),
						'right'  => __( 'Right', 'tribe-ext-calendar-customizer' ),
					]
				]
			);

			// Section title for month separator
			$wp_customize->add_setting( 'title_separator',
				[
					'default'           => '',
					'transport'         => 'postMessage',
					'sanitize_callback' => 'wp_filter_nohtml_kses',
				]
			);
			$wp_customize->add_control( new Custom_Control_Section_Title_Class( $wp_customize, 'title_separator',
				[
					'label'   => _x( 'Month Separator', 'Customizer section title', 'tribe-ext-calendar-customizer' ),
					'section' => 'day_list_view',
				]
			) );

			// List view, month separator visibility
			$wp_customize->add_setting(
				'list_separator_visibility',
				[
					'transport' => 'refresh'
				]
			);
			$wp_customize->add_control(
				'list_separator_visibility',
				[
					'label'    => __( 'Hide Month Separator', 'tribe-ext-calendar-customizer' ),
					'section'  => 'day_list_view',
					'settings' => 'list_separator_visibility',
					'type'     => 'checkbox',
				]
			);

			// List view, month separator text color
			$wp_customize->add_setting(
				'list_separator_text_color',
				[
					'transport' => 'refresh'
				]
			);
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'list_separator_text_color',
					[
						'label'       => __( 'Month Separator Text Color', 'tribe-ext-calendar-customizer' ),
						'description' => __( 'Affects the color of the decorative line as well, when using Tribe Events Styles', 'tribe-ext-calendar-customizer' ),
						'section'     => 'day_list_view',
						'settings'    => 'list_separator_text_color'
					]
				)
			);

			// List view, month separator background color
			$wp_customize->add_setting(
				'list_separator_background_color',
				[
					'transport' => 'refresh'
				]
			);
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'list_separator_background_color',
					[
						'label'    => __( 'Month Separator Background Color', 'tribe-ext-calendar-customizer' ),
						'section'  => 'day_list_view',
						'settings' => 'list_separator_background_color'
					]
				)
			);

			// List view, month separator font size
			$wp_customize->add_setting(
				'list_separator_font_size',
				[
					'transport' => 'refresh'
				]
			);
			$wp_customize->add_control(
				'list_separator_font_size',
				[
					'type'        => 'number',
					'section'     => 'day_list_view',
					'label'       => __( 'Month Separator Font Size (px)' ),
					'description' => __( 'Leave empty to use the default font size.', 'tribe-ext-calendar-customizer' ),
					'input_attrs' => [
						'min'  => 0,
						'max'  => 100,
						'step' => 1,
					],
				]
			);

			// List view, separator alignment
			$wp_customize->add_setting(
				'list_separator_alignment',
				[
					'transport' => 'refresh'
				]
			);
			$wp_customize->add_control(
				'list_separator_alignment',
				[
					'label'   => __( 'Month Separator Text Alignment', 'tribe-ext-calendar-customizer' ),
					'section' => 'day_list_view',
					'type'    => 'select',
					'choices' => [
						''       => __( 'default', 'tribe-ext-calendar-customizer' ),
						'left'   => __( 'Left', 'tribe-ext-calendar-customizer' ),
						'center' => __( 'Center', 'tribe-ext-calendar-customizer' ),
						'right'  => __( 'Right', 'tribe-ext-calendar-customizer' ),
					]
				]
			);

			// Section title for Event Title
			$wp_customize->add_setting( 'title_event_title',
				[
					'default'           => '',
					'transport'         => 'postMessage',
					'sanitize_callback' => 'wp_filter_nohtml_kses',
				]
			);
			$wp_customize->add_control( new Custom_Control_Section_Title_Class( $wp_customize, 'title_event_title',
				[
					'label'   => _x( 'Event Title', 'Customizer section title', 'tribe-ext-calendar-customizer' ),
					'section' => 'day_list_view',
				]
			) );

			// List view, event title text color
			$wp_customize->add_setting(
				'list_event_title_text_color',
				[
					'transport' => 'refresh',
				]
			);
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'list_event_title_text_color',
					[
						'label'    => __( 'Event Title Text Color', 'tribe-ext-calendar-customizer' ),
						'section'  => 'day_list_view',
						'settings' => 'list_event_title_text_color'
					]
				)
			);

			// List view, event title font size
			$wp_customize->add_setting(
				'list_event_title_font_size',
				[
					'transport' => 'refresh',
				]
			);
			$wp_customize->add_control(
				'list_event_title_font_size',
				[
					'type'        => 'number',
					'section'     => 'day_list_view',
					'label'       => __( 'Event Title Font Size (px)' ),
					'description' => __( 'Leave empty to use the default font size.', 'tribe-ext-calendar-customizer' ),
					'input_attrs' => [
						'min'  => 0,
						'max'  => 100,
						'step' => 1,
					],
				]
			);

			// List view, event title alignment
			$wp_customize->add_setting(
				'list_event_title_alignment',
				[
					'transport' => 'refresh'
				]
			);
			$wp_customize->add_control(
				'list_event_title_alignment',
				[
					'label'   => __( 'Event Title Text Alignment', 'tribe-ext-calendar-customizer' ),
					'section' => 'day_list_view',
					'type'    => 'select',
					'choices' => [
						''       => __( 'default', 'tribe-ext-calendar-customizer' ),
						'left'   => __( 'Left', 'tribe-ext-calendar-customizer' ),
						'center' => __( 'Center', 'tribe-ext-calendar-customizer' ),
						'right'  => __( 'Right', 'tribe-ext-calendar-customizer' ),
					]
				]
			);

			// Section title for Event Date
			$wp_customize->add_setting( 'title_event_date',
				[
					'default'           => '',
					'transport'         => 'postMessage',
					'sanitize_callback' => 'wp_filter_nohtml_kses',
				]
			);
			$wp_customize->add_control( new Custom_Control_Section_Title_Class( $wp_customize, 'title_event_date',
				[
					'label'   => _x( 'Event Date', 'Customizer section title', 'tribe-ext-calendar-customizer' ),
					'section' => 'day_list_view',
				]
			) );

			// List view, event date text color
			$wp_customize->add_setting(
				'list_event_date_text_color',
				[
					'transport' => 'refresh',
				]
			);
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'list_event_date_text_color',
					[
						'label'    => __( 'Event Date Text Color', 'tribe-ext-calendar-customizer' ),
						'section'  => 'day_list_view',
						'settings' => 'list_event_date_text_color'
					]
				)
			);

			// List view, event date font size
			$wp_customize->add_setting(
				'list_event_date_font_size',
				[
					'transport' => 'refresh',
				]
			);
			$wp_customize->add_control(
				'list_event_date_font_size',
				[
					'type'        => 'number',
					'section'     => 'day_list_view',
					'label'       => __( 'Event Date Font Size (px)' ),
					'description' => __( 'Leave empty to use the default font size.', 'tribe-ext-calendar-customizer' ),
					'input_attrs' => [
						'min'  => 0,
						'max'  => 100,
						'step' => 1,
					],
				]
			);

			// List view, event date alignment
			$wp_customize->add_setting(
				'list_event_date_alignment',
				[
					'transport' => 'refresh'
				]
			);
			$wp_customize->add_control(
				'list_event_date_alignment',
				[
					'label'   => __( 'Event Date Text Alignment', 'tribe-ext-calendar-customizer' ),
					'section' => 'day_list_view',
					'type'    => 'select',
					'choices' => [
						''       => __( 'default', 'tribe-ext-calendar-customizer' ),
						'left'   => __( 'Left', 'tribe-ext-calendar-customizer' ),
						'center' => __( 'Center', 'tribe-ext-calendar-customizer' ),
						'right'  => __( 'Right', 'tribe-ext-calendar-customizer' ),
					]
				]
			);

			// Section title for Event Description
			$wp_customize->add_setting( 'title_event_description',
				[
					'default'           => '',
					'transport'         => 'postMessage',
					'sanitize_callback' => 'wp_filter_nohtml_kses',
				]
			);
			$wp_customize->add_control( new Custom_Control_Section_Title_Class( $wp_customize, 'title_event_description',
				[
					'label'   => _x( 'Event Description', 'Customizer section title', 'tribe-ext-calendar-customizer' ),
					'section' => 'day_list_view',
				]
			) );

			// List view, event description text color
			$wp_customize->add_setting(
				'list_event_description_text_color',
				[
					'transport' => 'refresh',
				]
			);
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'list_event_description_text_color',
					[
						'label'    => __( 'Event Description Text Color', 'tribe-ext-calendar-customizer' ),
						'section'  => 'day_list_view',
						'settings' => 'list_event_description_text_color'
					]
				)
			);

			// List view, event description font size
			$wp_customize->add_setting(
				'list_event_description_font_size',
				[
					'transport' => 'refresh',
					'default'   => '',
				]
			);
			$wp_customize->add_control(
				'list_event_description_font_size',
				[
					'type'        => 'number',
					'section'     => 'day_list_view',
					'label'       => __( 'Event Description Font Size (px)' ),
					'description' => __( 'Leave empty to use the default font size.', 'tribe-ext-calendar-customizer' ),
					'input_attrs' => [
						'min'  => 0,
						'max'  => 100,
						'step' => 1,
					],
				]
			);

			// Section title for 'Find out more'
			$wp_customize->add_setting( 'title_event_findoutmore',
				[
					'default'           => '',
					'transport'         => 'postMessage',
					'sanitize_callback' => 'wp_filter_nohtml_kses',
				]
			);
			$wp_customize->add_control( new Custom_Control_Section_Title_Class( $wp_customize, 'title_event_findoutmore',
				[
					'label'   => _x( '"Find out more &raquo;" link', 'Customizer section title', 'tribe-ext-calendar-customizer' ),
					'section' => 'day_list_view',
				]
			) );

			// List view, "Find out more" underline
			$wp_customize->add_setting(
				'list_event_findoutmore_underline',
				[
					'transport' => 'refresh'
				]
			);
			$wp_customize->add_control(
				'list_event_findoutmore_underline',
				[
					'label'    => __( 'Remove underline', 'tribe-ext-calendar-customizer' ),
					'section'  => 'day_list_view',
					'settings' => 'list_event_findoutmore_underline',
					'type'     => 'checkbox',
				]
			);

			// List view, "Find out more" text color
			$wp_customize->add_setting(
				'list_event_findoutmore_text_color',
				[
					'transport' => 'refresh',
				]
			);
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'list_event_findoutmore_text_color',
					[
						'label'    => __( '"Find out more" Text Color', 'tribe-ext-calendar-customizer' ),
						'section'  => 'day_list_view',
						'settings' => 'list_event_findoutmore_text_color'
					]
				)
			);

			// List view, "Find out more" font size
			$wp_customize->add_setting(
				'list_event_findoutmore_font_size',
				[
					'transport' => 'refresh',
				]
			);
			$wp_customize->add_control(
				'list_event_findoutmore_font_size',
				[
					'type'        => 'number',
					'section'     => 'day_list_view',
					'label'       => __( '"Find out more" Font Size (px)' ),
					'description' => __( 'Leave empty to use the default font size.', 'tribe-ext-calendar-customizer' ),
					'input_attrs' => [
						'min'  => 0,
						'max'  => 100,
						'step' => 1,
					],
				]
			);

			// List view, "Find out more" alignment
			$wp_customize->add_setting(
				'list_event_findoutmore_alignment',
				[
					'transport' => 'refresh'
				]
			);
			$wp_customize->add_control(
				'list_event_findoutmore_alignment',
				[
					'label'   => __( '"Find out more" Text Alignment', 'tribe-ext-calendar-customizer' ),
					'section' => 'day_list_view',
					'type'    => 'select',
					'choices' => [
						''       => __( 'default', 'tribe-ext-calendar-customizer' ),
						'left'   => __( 'Left', 'tribe-ext-calendar-customizer' ),
						'center' => __( 'Center', 'tribe-ext-calendar-customizer' ),
						'right'  => __( 'Right', 'tribe-ext-calendar-customizer' ),
					]
				]
			);

			// Section title for Featured event
			$wp_customize->add_setting( 'title_event_featured',
				[
					'default'           => '',
					'transport'         => 'postMessage',
					'sanitize_callback' => 'wp_filter_nohtml_kses',
				]
			);
			$wp_customize->add_control( new Custom_Control_Section_Title_Class( $wp_customize, 'title_event_featured',
				[
					'label'   => _x( 'Featured Event', 'Customizer section title', 'tribe-ext-calendar-customizer' ),
					'section' => 'day_list_view',
				]
			) );

			// List view, Featured Event Background color
			$wp_customize->add_setting(
				'list_event_featured_event_background_color',
				[
					'transport' => 'refresh',
				]
			);
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'list_event_featured_event_background_color',
					[
						'label'    => __( 'Featured Event Background Color', 'tribe-ext-calendar-customizer' ),
						'section'  => 'day_list_view',
						'settings' => 'list_event_featured_event_background_color'
					]
				)
			);

			// List view, Featured Event Title color
			$wp_customize->add_setting(
				'list_event_featured_event_title_color',
				[
					'transport' => 'refresh',
				]
			);
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'list_event_featured_event_title_color',
					[
						'label'    => __( 'Featured Event Title Color', 'tribe-ext-calendar-customizer' ),
						'section'  => 'day_list_view',
						'settings' => 'list_event_featured_event_title_color'
					]
				)
			);

			// List view, Featured Event Meta color
			$wp_customize->add_setting(
				'list_event_featured_event_meta_color',
				[
					'transport' => 'refresh',
				]
			);
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'list_event_featured_event_meta_color',
					[
						'label'       => __( 'Featured Event Meta Color', 'tribe-ext-calendar-customizer' ),
						'description' => __( 'Includes Date & Time, Venue, and "Find out more&raquo;"', 'tribe-ext-calendar-customizer' ),
						'section'     => 'day_list_view',
						'settings'    => 'list_event_featured_event_meta_color'
					]
				)
			);

			// List view, Featured Event Text color
			$wp_customize->add_setting(
				'list_event_featured_event_text_color',
				[
					'transport' => 'refresh',
				]
			);
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'list_event_featured_event_text_color',
					[
						'label'    => __( 'Featured Event Text Color', 'tribe-ext-calendar-customizer' ),
						'section'  => 'day_list_view',
						'settings' => 'list_event_featured_event_text_color'
					]
				)
			);

			// Section title for other
			$wp_customize->add_setting( 'title_other',
				[
					'default'           => '',
					'transport'         => 'postMessage',
					'sanitize_callback' => 'wp_filter_nohtml_kses',
				]
			);
			$wp_customize->add_control( new Custom_Control_Section_Title_Class( $wp_customize, 'title_other',
				[
					'label'   => _x( 'Other', 'Customizer section title', 'tribe-ext-calendar-customizer' ),
					'section' => 'day_list_view',
				]
			) );

		} // end function register_customizer()

		/**
		 * Generating the CSS
		 */
		public function list_view_css() {
			?>
            <style type="text/css">
                <?php if( get_theme_mod( 'list_page_title_text_color' ) ) { ?>
                .events-list .tribe-events-page-title {
                    color: <?php echo get_theme_mod( 'list_page_title_text_color' ); ?>;
                }
                <?php } // end if ?>

                <?php if( get_theme_mod( 'list_page_title_font_size' ) ) { ?>
                .events-list .tribe-events-page-title {
                    font-size: <?php echo get_theme_mod( 'list_page_title_font_size' ); ?>px;
                }
                <?php } // end if ?>

                <?php if( get_theme_mod( 'list_page_title_alignment' ) ) { ?>
                .events-list .tribe-events-page-title {
                    text-align: <?php echo get_theme_mod( 'list_page_title_alignment' ); ?>;
                }
                <?php } // end if ?>

                <?php if( get_theme_mod( 'list_separator_visibility' ) ) { ?>
                #tribe-events-content .tribe-events-list-separator-month {
                    display: <?php echo get_theme_mod( 'list_separator_visibility' ) ? 'none' : 'block'; ?>;
                }
                <?php } // end if ?>

                <?php if( get_theme_mod( 'list_separator_text_color' ) ) { ?>
                #tribe-events-content .tribe-events-list-separator-month {
                    color: <?php echo get_theme_mod( 'list_separator_text_color' ); ?>;
                }
                #tribe-events-content .tribe-events-list-separator-month::after {
                    border-bottom-color: <?php echo get_theme_mod( 'list_separator_text_color' ); ?>;
                }
                <?php } // end if ?>

                <?php if( get_theme_mod( 'list_separator_font_size' ) ) { ?>
                #tribe-events-content .tribe-events-list-separator-month {
                    font-size: <?php echo get_theme_mod( 'list_separator_font_size' ); ?>px;
                }
                <?php } // end if ?>

                <?php if( get_theme_mod( 'list_separator_background_color' ) ) { ?>
                #tribe-events-content .tribe-events-list-separator-month,
                #tribe-events-content .tribe-events-list-separator-month span {
                    background-color: <?php echo get_theme_mod( 'list_separator_background_color' ); ?>;
                }
                <?php } // end if ?>

                <?php if( get_theme_mod( 'list_separator_alignment' ) ) { ?>
                #tribe-events-content .tribe-events-list-separator-month {
                    text-align: <?php echo get_theme_mod( 'list_separator_alignment' ); ?>;
                }
                <?php } // end if ?>

                <?php if( get_theme_mod( 'list_event_title_text_color' ) ) { ?>
                #tribe-events-content .tribe-events-list-event-title a {
                    color: <?php echo get_theme_mod( 'list_event_title_text_color' ); ?>;
                }
                <?php } // end if ?>

                <?php if( get_theme_mod( 'list_event_title_font_size' ) ) { ?>
                #tribe-events-content .tribe-events-list-event-title {
                    font-size: <?php echo get_theme_mod( 'list_event_title_font_size' ); ?>px;
                }
                <?php } // end if ?>

                <?php if( get_theme_mod( 'list_event_title_alignment' ) ) { ?>
                #tribe-events-content .tribe-events-list-event-title {
                    display: block;
                    text-align: <?php echo get_theme_mod( 'list_event_title_alignment' ); ?>;
                }
                <?php } // end if ?>

                <?php if( get_theme_mod( 'list_event_date_text_color' ) ) { ?>
                #tribe-events-content .tribe-event-schedule-details {
                    color: <?php echo get_theme_mod( 'list_event_date_text_color' ); ?>;
                }
                <?php } // end if ?>

                <?php if( get_theme_mod( 'list_event_date_font_size' ) ) { ?>
                #tribe-events-content .tribe-events-loop .tribe-events-event-meta .tribe-event-schedule-details {
                    font-size: <?php echo get_theme_mod( 'list_event_date_font_size' ); ?>px;
                }
                <?php } // end if ?>

                <?php if( get_theme_mod( 'list_event_date_alignment' ) ) { ?>
                #tribe-events-content .tribe-events-loop .tribe-events-event-meta .tribe-event-schedule-details {
                    text-align: <?php echo get_theme_mod( 'list_event_date_alignment' ); ?>;
                }
                <?php } // end if ?>

                <?php if( get_theme_mod( 'list_event_description_text_color' ) ) { ?>
                #tribe-events-content .tribe-events-list-event-description {
                    color: <?php echo get_theme_mod( 'list_event_description_text_color' ); ?>;
                }
                <?php } // end if ?>

                <?php if( get_theme_mod( 'list_event_description_font_size' ) ) { ?>
                #tribe-events-content .tribe-events-list-event-description {
                    font-size: <?php echo get_theme_mod( 'list_event_description_font_size' ); ?>px;
                }
                <?php } // end if ?>

                <?php if( get_theme_mod( 'list_event_findoutmore_underline' ) == true ) { ?>
                #tribe-events-content .tribe-events-read-more {
                    box-shadow: none;
                }
                <?php } // end if ?>

                <?php if( get_theme_mod( 'list_event_findoutmore_text_color' ) ) { ?>
                #tribe-events-content .tribe-events-read-more {
                    color: <?php echo get_theme_mod( 'list_event_findoutmore_text_color' ); ?>;
                }
                <?php } // end if ?>

                <?php if( get_theme_mod( 'list_event_findoutmore_font_size' ) ) { ?>
                #tribe-events-content .tribe-events-read-more {
                    font-size: <?php echo get_theme_mod( 'list_event_findoutmore_font_size' ); ?>px;
                }
                <?php } // end if ?>

                <?php
				if( get_theme_mod( 'list_event_findoutmore_alignment' ) ) {
					if( get_theme_mod( 'list_event_findoutmore_alignment' ) == 'center' ) { ?>
                #tribe-events-content .tribe-events-read-more {
                    display: table;
                    margin: auto;
                }
                <?php } // end if
			    else { ?>
                #tribe-events-content .tribe-events-read-more {
                    float: <?php echo get_theme_mod( 'list_event_findoutmore_alignment' ); ?>;
                }
                <?php } // else ?>
                <?php } // end if ?>

                <?php if( get_theme_mod( 'list_event_featured_event_background_color' ) ) { ?>
                #tribe-events-content.tribe-events-list .tribe-events-loop .tribe-event-featured {
                    background-color: <?php echo get_theme_mod( 'list_event_featured_event_background_color' ); ?>;
                }
                <?php } // end if ?>

                <?php if( get_theme_mod( 'list_event_featured_event_title_color' ) ) { ?>
                #tribe-events-content.tribe-events-list .tribe-events-loop .tribe-event-featured .tribe-events-list-event-title a {
                    color: <?php echo get_theme_mod( 'list_event_featured_event_title_color' ); ?>;
                }
                <?php } // end if ?>

                <?php
				/**
				 * Meta
				 * URLs in meta
				 * Date in meta
				 * Read more
				 */
				if( get_theme_mod( 'list_event_featured_event_meta_color' ) ) { ?>
                #tribe-events-content.tribe-events-list .tribe-events-loop .tribe-event-featured .tribe-events-event-meta,
                #tribe-events-content.tribe-events-list .tribe-events-loop .tribe-event-featured .tribe-events-event-meta a,
                #tribe-events-content.tribe-events-list .tribe-events-loop .tribe-event-featured .tribe-events-event-meta .tribe-event-schedule-details,
                #tribe-events-content.tribe-events-list .tribe-events-loop .tribe-event-featured .tribe-events-read-more {
                    color: <?php echo get_theme_mod( 'list_event_featured_event_meta_color' ); ?>;
                }
                <?php } // end if ?>

                <?php if( get_theme_mod( 'list_event_featured_event_text_color' ) ) { ?>
                #tribe-events-content.tribe-events-list .tribe-events-loop .tribe-event-featured .tribe-events-content {
                    color: <?php echo get_theme_mod( 'list_event_featured_event_text_color' ); ?>;
                }
                <?php } // end if ?>

            </style>
			<?php
		} // end function list_view_css()

	} // class
} // ! class_exists