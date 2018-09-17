<?php

// Do not load directly.
if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}

/*if ( class_exists( 'Tribe__View_Class' ) ) {
	return;
}*/

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
			array(
				'default' => '',
				'transport' => 'postMessage',
				'sanitize_callback' => 'wp_filter_nohtml_kses',
			)
		);
		$wp_customize->add_control( new Section_Title_Custom_Control( $wp_customize, 'title_page_title',
			array(
				'label' => _x( 'Page title', 'Customizer section title', 'tribe-ext-calendar-customizer' ),
				'section' => 'day_list_view',
			)
		) );

		/**
		 * List view, page title text color
		 */
		$wp_customize->add_setting(
			'list_page_title_text_color',
			array(
				'transport' => 'postMessage',
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'list_page_title_text_color',
				array(
					'label'    => __( 'Page Title Text Color', 'tribe-ext-calendar-customizer' ),
					'section'  => 'day_list_view',
					'settings' => 'list_page_title_text_color'
				)
			)
		);

		/**
		 * List view, page title font size
		 */
		$wp_customize->add_setting(
			'list_page_title_font_size',
			array(
				'transport' => 'postMessage',
			)
		);
		$wp_customize->add_control(
			'list_page_title_font_size',
			array(
				'type'        => 'number',
				'section'     => 'day_list_view',
				'label'       => __( 'Page Title Font Size (px)' ),
				'description' => __( 'Leave empty to use the default font size.', 'tribe-ext-calendar-customizer' ),
				'input_attrs' => array(
					'min'  => 0,
					'max'  => 100,
					'step' => 1,
				),
			)
		);

		/**
		 * List view, page title alignment
		 */
		$wp_customize->add_setting(
			'list_page_title_alignment',
			array(
				'transport' => 'postMessage'
			)
		);
		$wp_customize->add_control(
			'list_page_title_alignment',
			array(
				'label'   => __( 'Page Title Text Alignment', 'tribe-ext-calendar-customizer' ),
				'section' => 'day_list_view',
				'type'    => 'select',
				'choices' => array(
					''       => 'default',
					'left'   => 'Left',
					'center' => 'Center',
					'right'  => 'Right'
				)
			)
		);

		// Section title for month separator
		$wp_customize->add_setting( 'title_separator',
			array(
				'default' => '',
				'transport' => 'postMessage',
				'sanitize_callback' => 'wp_filter_nohtml_kses',
			)
		);
		$wp_customize->add_control( new Section_Title_Custom_Control( $wp_customize, 'title_separator',
			array(
				'label' => _x( 'Month Separator', 'Customizer section title', 'tribe-ext-calendar-customizer' ),
				'section' => 'day_list_view',
			)
		) );

		/**
		 * List view, month separator visibility
		 */
		$wp_customize->add_setting(
			'list_separator_visibility',
			array(
				'transport' => 'postMessage'
			)
		);
		$wp_customize->add_control(
			'list_separator_visibility',
			array(
				'label' => __( 'Hide Month Separator', 'tribe-ext-calendar-customizer' ),
				'section' => 'day_list_view',
				'settings' => 'list_separator_visibility',
				'type' => 'checkbox',
			)
		);

		/**
		 * List view, month separator text color
		 */
		$wp_customize->add_setting(
			'list_separator_text_color',
			array(
				'transport' => 'postMessage'
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'list_separator_text_color',
				array(
					'label'    => __( 'Month Separator Text Color', 'tribe-ext-calendar-customizer' ),
					'description' => __( 'Affects the color of the decorative line as well, when using Tribe Events Styles', 'tribe-ext-calendar-customizer' ),
					'section'  => 'day_list_view',
					'settings' => 'list_separator_text_color'
				)
			)
		);

		/**
		 * List view, month separator background color
		 */
		$wp_customize->add_setting(
			'list_separator_background_color',
			array(
				'transport' => 'postMessage'
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'list_separator_background_color',
				array(
					'label'    => __( 'Month Separator Background Color', 'tribe-ext-calendar-customizer' ),
					'section'  => 'day_list_view',
					'settings' => 'list_separator_background_color'
				)
			)
		);

		/**
		 * List view, month separator font size
		 */
		$wp_customize->add_setting(
			'list_separator_font_size',
			array(
				'transport' => 'postMessage'
			)
		);
		$wp_customize->add_control(
			'list_separator_font_size',
			array(
				'type'        => 'number',
				'section'     => 'day_list_view',
				'label'       => __( 'Month Separator Font Size (px)' ),
				'description' => __( 'Leave empty to use the default font size.', 'tribe-ext-calendar-customizer' ),
				'input_attrs' => array(
					'min'  => 0,
					'max'  => 100,
					'step' => 1,
				),
			)
		);

		/**
		 * List view, separator alignment
		 */
		$wp_customize->add_setting(
			'list_separator_alignment',
			array(
				'transport' => 'postMessage'
			)
		);
		$wp_customize->add_control(
			'list_separator_alignment',
			array(
				'label'   => __( 'Month Separator Text Alignment', 'tribe-ext-calendar-customizer' ),
				'section' => 'day_list_view',
				'type'    => 'select',
				'choices' => array(
					''       => 'default',
					'left'   => 'Left',
					'center' => 'Center',
					'right'  => 'Right'
				)
			)
		);

		// Section title for Event Title
		$wp_customize->add_setting( 'title_event_title',
			array(
				'default' => '',
				'transport' => 'postMessage',
				'sanitize_callback' => 'wp_filter_nohtml_kses',
			)
		);
		$wp_customize->add_control( new Section_Title_Custom_Control( $wp_customize, 'title_event_title',
			array(
				'label' => __( 'Event Title', 'Customizer section title', 'tribe-ext-calendar-customizer' ),
				'section' => 'day_list_view',
			)
		) );

		/**
		 * List view, event title text color
		 */
		$wp_customize->add_setting(
			'list_event_title_text_color',
			array(
				'transport' => 'postMessage',
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'list_event_title_text_color',
				array(
					'label'    => __( 'Event Title Text Color', 'tribe-ext-calendar-customizer' ),
					'section'  => 'day_list_view',
					'settings' => 'list_event_title_text_color'
				)
			)
		);

		/**
		 * List view, event title font size
		 */
		$wp_customize->add_setting(
			'list_event_title_font_size',
			array(
				'transport' => 'postMessage',
			)
		);
		$wp_customize->add_control(
			'list_event_title_font_size',
			array(
				'type'        => 'number',
				'section'     => 'day_list_view',
				'label'       => __( 'Event Title Font Size (px)' ),
				'description' => __( 'Leave empty to use the default font size.', 'tribe-ext-calendar-customizer' ),
				'input_attrs' => array(
					'min'  => 0,
					'max'  => 100,
					'step' => 1,
				),
			)
		);

		/**
		 * List view, event title alignment
		 */
		$wp_customize->add_setting(
			'list_event_title_alignment',
			array(
				'transport' => 'postMessage'
			)
		);
		$wp_customize->add_control(
			'list_event_title_alignment',
			array(
				'label'   => __( 'Event Title Text Alignment', 'tribe-ext-calendar-customizer' ),
				'section' => 'day_list_view',
				'type'    => 'select',
				'choices' => array(
					''       => 'default',
					'left'   => 'Left',
					'center' => 'Center',
					'right'  => 'Right'
				)
			)
		);

		// Section title for Event Title
		$wp_customize->add_setting( 'title_event_date',
			array(
				'default' => '',
				'transport' => 'postMessage',
				'sanitize_callback' => 'wp_filter_nohtml_kses',
			)
		);
		$wp_customize->add_control( new Section_Title_Custom_Control( $wp_customize, 'title_event_date',
			array(
				'label' => __( 'Event Date', 'Customizer section title', 'tribe-ext-calendar-customizer' ),
				'section' => 'day_list_view',
			)
		) );

		/**
		 * List view, event date text color
		 */
		$wp_customize->add_setting(
			'list_event_date_text_color',
			array(
				'transport' => 'postMessage',
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'list_event_date_text_color',
				array(
					'label'    => __( 'Event Date Text Color', 'tribe-ext-calendar-customizer' ),
					'section'  => 'day_list_view',
					'settings' => 'list_event_date_text_color'
				)
			)
		);

		/**
		 * List view, event date font size
		 */
		$wp_customize->add_setting(
			'list_event_date_font_size',
			array(
				'transport' => 'postMessage',
			)
		);
		$wp_customize->add_control(
			'list_event_date_font_size',
			array(
				'type'        => 'number',
				'section'     => 'day_list_view',
				'label'       => __( 'Event Date Font Size (px)' ),
				'description' => __( 'Leave empty to use the default font size.', 'tribe-ext-calendar-customizer' ),
				'input_attrs' => array(
					'min'  => 0,
					'max'  => 100,
					'step' => 1,
				),
			)
		);

		/**
		 * List view, event date alignment
		 */
		$wp_customize->add_setting(
			'list_event_date_alignment',
			array(
				'transport' => 'postMessage'
			)
		);
		$wp_customize->add_control(
			'list_event_date_alignment',
			array(
				'label'   => __( 'Event Date Text Alignment', 'tribe-ext-calendar-customizer' ),
				'section' => 'day_list_view',
				'type'    => 'select',
				'choices' => array(
					''       => 'default',
					'left'   => 'Left',
					'center' => 'Center',
					'right'  => 'Right'
				)
			)
		);







		// Section title for other
		$wp_customize->add_setting( 'title_other',
			array(
				'default' => '',
				'transport' => 'postMessage',
				'sanitize_callback' => 'wp_filter_nohtml_kses',
			)
		);
		$wp_customize->add_control( new Section_Title_Custom_Control( $wp_customize, 'title_other',
			array(
				'label' => __( 'Other', 'Customizer section title', 'tribe-ext-calendar-customizer' ),
				'section' => 'day_list_view',
			)
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
            #tribe-events-content .tribe-events-loop .tribe-events-event-meta {
                font-size: <?php echo get_theme_mod( 'list_event_date_font_size' ); ?>px;
            }
            <?php } // end if ?>

            <?php if( get_theme_mod( 'list_event_date_alignment' ) ) { ?>
            #tribe-events-content .tribe-events-loop .tribe-events-event-meta {
                text-align: <?php echo get_theme_mod( 'list_event_date_alignment' ); ?>;
            }
            <?php } // end if ?>


        </style>
		<?php
	} // end function list_view_css()

} // class