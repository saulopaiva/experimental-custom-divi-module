<?php

class TOYOTACOMPS_Cars extends ET_Builder_Module
{

    public $slug       = 'toyotacomps_cars';
    public $vb_support = 'on';

    protected $module_credits = array(
        'module_uri' => '',
        'author'     => 'Just',
        'author_uri' => '',
    );

    public function init()
    {
        $this->name = esc_html__('Cars', 'toyotacomps-toyota-components');
    }

    public function get_fields()
    {
        return array(
            'cars_title' => array(
                'label'           => esc_html__('Title', 'toyotacomps-toyota-components'),
                'type'            => 'text',
                'option_category' => 'basic_option',
                'description'     => esc_html__('Title entered here will appear inside the module.', 'toyotacomps-toyota-components'),
                'toggle_slug'     => 'main_content',
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
        $postData = file_get_contents('http://dummy.restapiexample.com/api/v1/employees');
        $html = 'Nenhum carro encontrado';
        print_r($postData);
        if (isset($postData['data'])) {
            $html = '';

            for ($i=0; $i < 10; $i++) { 
                $html .= '<div>' . $postData['data'][$i]['employee_name'] . '</div>';
            }

        }

        return "<div>$html</div>";
    }
}

new TOYOTACOMPS_Cars;
