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

    $cmb->add_field([
        'name' => 'Título do Produto',
        'id' => 'titulo_produtos',
        'type' => 'text',
    ]);

    $cmb->add_field([
        'name' => 'Texto do Produto',
        'id' => 'texto_produtos',
        'type' => 'textarea_small',
    ]);

    //Lista de Itens
    $cmb->add_field([
        'name' => 'Lista Item 1',
        'id' => 'lista_item1',
        'type' => 'text',
    ]);

    $cmb->add_field([
        'name' => 'Lista Item 2',
        'id' => 'lista_item2',
        'type' => 'text',
    ]);

    $cmb->add_field([
        'name' => 'Lista Item 3',
        'id' => 'lista_item3',
        'type' => 'text',
    ]);

    $cmb->add_field([
        'name' => 'Lista Item 4',
        'id' => 'lista_item4',
        'type' => 'text',
    ]);

    $cmb->add_field([
        'name' => 'Descrição dos Produtos',
        'id' => 'produtos_descricao_lista',
        'type' => 'textarea_small',
    ]);
}


?>