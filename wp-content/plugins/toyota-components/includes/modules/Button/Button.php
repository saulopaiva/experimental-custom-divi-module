<?php

class TOYOTACOMPS_Button extends ET_Builder_Module {

	public $slug       = 'toyotacomps_button';
	public $vb_support = 'on';

	protected $module_credits = array(
		'module_uri' => '',
		'author'     => 'Just',
		'author_uri' => '',
	);

	public function init() {
		$this->name = esc_html__( 'Button', 'toyotacomps-toyota-components' );
	}

	public function get_fields() {
		return array(
			'content' => array(
				'label'           => esc_html__( 'Button', 'toyotacomps-toyota-components' ),
				'type'            => 'text',
				'option_category' => 'basic_option',
				'description'     => esc_html__( 'Button entered here will appear inside the module.', 'toyotacomps-toyota-components' ),
				'toggle_slug'     => 'main_content',
      ),
		);
  }

  public function get_advanced_fields_config() {
		return array(
			'background' => false,
		);
	}

	public function render( $attrs, $content = null, $render_slug ) {
		return sprintf( '<a href="%2$s" class="c-button">%1$s</a>', $this->props['content'], $this->props['link_option_url']);
	}
}

new TOYOTACOMPS_Button;
