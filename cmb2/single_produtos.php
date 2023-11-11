<?php 

add_action('cmb2_admin_init', 'cmb2_single_produtos');

function cmb2_single_produtos(){
    $cmb = new_cmb2_box([
        'id' => 'single_produtos_box',
        'title' => 'Single Produtos',
        'object_types' => ['produtos'],
    ]);

    $cmb->add_field([
        'name' => 'Imagem Produto 1',
        'id' => 'imagem_produtos1',
        'type' => 'file',
        'options' => [
            'url' => false,
        ],
    ]);

    $cmb->add_field([
        'name' => 'Icone Produto',
        'id' => 'icone_produtos',
        'type' => 'file',
        'options' => [
            'url' => false,
        ]
    ]);

    $cmb->add_field([
        'name' => 'Imagem Produto 2',
        'id' => 'imagem_produtos2',
        'type' => 'file',
        'options' => [
            'url' => false,
        ]
    ]);
}


?>