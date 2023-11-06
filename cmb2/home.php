<?php 

add_action('cmb2_admin_init', 'cmb2_fields_home');

//Criação da caixa
function cmb2_fields_home(){
    $cmb = new_cmb2_box([
        'id' => 'home_box',
        'title' => 'Página Home',
        'object_types' => ['page'],
        'show_on' => [
            'key' => 'page_template',
            'value' => 'page-home.php',
        ],
    ]);

    //Criação de campo
    $cmb->add_field([
        'name' => 'Título Introdução',
        'id' => 'titulo_introducao',
        'type' => 'text',
    ]);

    $cmb->add_field([
        'name' => 'Frase',
        'id' => 'descricao_introducao',
        'type' => 'text',
    ]);

    $cmb->add_field([
        'name' => 'Citador',
        'id' => 'cite_introducao',
        'type' => 'text',
    ]);

    $cmb->add_field([
        'name' => 'Chamar Produtos',
        'id' => 'chamar_produtos',
        'type' => 'text',
    ]);

}

?>