<?php

/**
 * Simple Notice Custom Control
 */
class Section_Title_Custom_Control extends WP_Customize_Control {
	/**
	 * The type of control being rendered
	 */
	public $type = 'section_title';

	/**
	 * Render the control in the customizer
	 */
	public function render_content() {
		?>

        <hr/>
        <div class="simple-notice-custom-control">
			<?php if ( ! empty( $this->label ) ) { ?>
                <span class="customize-control-title" style="font-size: 120%; text-align: center;"><?php echo esc_html( $this->label ); ?></span>
			<?php } ?>
			<?php if ( ! empty( $this->description ) ) { ?>
                <span class="customize-control-description"><?php echo wp_kses_post( $this->description ); ?></span>
			<?php } ?>
        </div>

		<?php
	}
}