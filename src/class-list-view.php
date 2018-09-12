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
				'label'   => __( 'Separator Text Alignment', 'tribe-ext-calendar-customizer' ),
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
	} // end function register_customizer()

	/**
	 * Generating the CSS
	 */
	public function list_view_css() {
		?>
        <style type="text/css">
            <?php if( get_theme_mod( 'list_separator_visibility' ) ) { ?>
            #tribe-events-content .tribe-events-list-separator-month {
                display: <?php echo get_theme_mod( 'list_separator_visibility' ) ? 'none' : 'block'; ?>;
            }
            <?php } // end if ?>

            <?php if( get_theme_mod( 'list_separator_font_size' ) ) { ?>
            #tribe-events-content .tribe-events-list-separator-month {
                font-size: <?php echo get_theme_mod( 'list_separator_font_size' ); ?>px;
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
        </style>
		<?php
	} // end function list_view_css()

} // class