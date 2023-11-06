<?php 

add_action('cmb2_admin_init', 'cmb2_fields_portfolio');

function cmb2_fields_portfolio(){
    $cmb = new_cmb2_box([
        'id' => 'portfolio_box',
        'title' => 'Portfólio',
        'object_types' => ['page'],
        'show_on' => [
            'key' => 'page-template',
            'value' => 'page-portfolio.php',
        ],
    ]);

    $cmb->add_field([
        'name' => 'Chamar Portfólio',
        'id' => 'chamada_portfolio',
        'type' => 'text',
    ]);

}



?>