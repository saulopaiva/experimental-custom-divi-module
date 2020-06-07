<?php

class TOYOTACOMPS_Card extends ET_Builder_Module
{

    public $slug       = 'toyotacomps_card';
    public $vb_support = 'on';

    protected $module_credits = array(
        'module_uri' => '',
        'author'     => 'Just',
        'author_uri' => '',
    );

    public function init()
    {
        $this->name = esc_html__('Card', 'toyotacomps-toyota-components');
    }

    public function get_fields()
    {
        return array(
            'card_title' => array(
                'label'           => esc_html__('Title', 'toyotacomps-toyota-components'),
                'type'            => 'text',
                'option_category' => 'basic_option',
                'description'     => esc_html__('Title entered here will appear inside the module.', 'toyotacomps-toyota-components'),
                'toggle_slug'     => 'main_content',
            ),
            'content' => array(
                'label'           => esc_html__('Content', 'toyotacomps-toyota-components'),
                'type'            => 'tiny_mce',
                'option_category' => 'basic_option',
                'description'     => esc_html__('Content entered here will appear inside the module.', 'toyotacomps-toyota-components'),
                'toggle_slug'     => 'main_content',
            ),
            'image' => array(
                'label'           => esc_html__('Content', 'toyotacomps-toyota-components'),
                'type'            => 'upload',
                'option_category' => 'basic_option',
                'description'     => esc_html__('Content entered here will appear inside the module.', 'toyotacomps-toyota-components'),
                'toggle_slug'     => 'image',
            ),
            'link_label' => array(
                'label'           => esc_html__('Rótulo do link', 'toyotacomps-toyota-components'),
                'default'         => 'Ver mais',
                'type'            => 'text',
                'option_category' => 'basic_option',
                'toggle_slug'     => 'link_options',
            ),
        );
    }

    // public function get_advanced_fields_config()
    // {
    //     return array(
    //         'background' => false,
    //         'borders'           => false,
    //         'box_shadow'        => false,
    //         'text_shadow'       => false,
    //         'transform'           => false,
    //         'animation'           => false,
    //         'button'            => false,
    //         'filters'           => false,
    //         'fonts'             => false,
    //         'text'                 => false,
    //         'text_alignment'       => false,
    //         'margin_padding'    => false,
    //         'max_width'         => false,
    //     );
    // }

    public function render($attrs, $content = null, $render_slug)
    {
        return sprintf(
            '<article class="c-card-news">
    <div class="c-card-news__image-wrapper">
      <img src="%5$s" class="c-card-news__image c-card-image__image--arrowed c-card-image__image--arrowed-bottom" alt="">
    </div>

    <div class="c-card-news__info-wrapper">
      <h2 class="c-title c-title--sm">%2$s</h2>

      <p class="c-card-news__text">%1$s</p>

      <a href="%4$s" class="c-button c-button--no-background">
        <span class="has-toyota-red-color">%3$s</span>
        <svg class="c-icon" aria-hidden="true" xmlns="https://www.w3.org/2000/svg" viewBox="0 0 48 48" preserveAspectRatio="xMidYMid meet"><defs><clipPath><path class="a" d="M0 0h19.763v38.663H0z"></path></clipPath><style>.a{fill:none}</style></defs><path class="a" d="M0 0h48v48H0z"></path><g transform="rotate(90 13.005 30.148)" clip-path="url(#a)"><path d="M9.688 37.564V3.468L15.68 9.46a1 1 0 001.42-1.409L9.4.358a1.023 1.023 0 00-1.408 0L.293 8.051A1 1 0 001.7 9.459l5.994-5.991v34.1a1 1 0 101.994 0zm0 0"></path></g></svg>
      </a>
    </div>
  </article>',
            $this->props['content'],
            $this->props['card_title'],
            $this->props['link_label'],
            $this->props['link_option_url'],
            $this->props['image']
        );
    }
}

new TOYOTACOMPS_Card;
