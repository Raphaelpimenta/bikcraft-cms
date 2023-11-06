<?php 

add_action('cmb2_admin_init', 'cmb2_fields_sobre');

function cmb2_fields_sobre(){
    $cmb = new_cmb2_box([
        'id' => 'sobre_box',
        'title' => 'Sobre',
        'object_types' => ['page'],
        'show_on' => [
            'key' => 'page-template',
            'value' => 'page-sobre.php',
        ],
    ]);

    $cmb->add_field([
        'name' => "Descrição acima do botão 'sobre'",
        'id' => 'chamar_sobre_btn',
        'type' => 'text',
    ]);
}

?>