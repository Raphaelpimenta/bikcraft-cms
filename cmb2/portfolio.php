<?php 

add_action('cmb2_admin_init', 'cmb2_fields_portfolio');

function cmb2_fields_portfolio(){
    $cmb = new_cmb2_box([
        'id' => 'portfolio_box',
        'title' => 'Portfólio',
        'object_types' => ['page'],
        'show_on' => [
            'key' => 'page-template',
            'value' => ['page-portfolio.php'],
        ],
    ]);

    //Loop box Frases
    $frase_portfolio = $cmb->add_field([
        'name' => 'Frases Portfólio',
        'id' => 'frase_portfolio',
        'type' => 'group',
        'repeatable' => true,
        'options' => [
            'sortable' => true,
            'add_button' => 'Adicionar Frase',
            'remove' => 'Remover Frase',
        ],

    ]);

    $cmb->add_group_field($frase_portfolio, [
        'name' =>  'Frase do Cliente',
        'id' => 'texto_cliente',
        'type' => 'textarea_small',
    ]);

    $cmb->add_group_field($frase_portfolio, [
        'name' => 'Nome do Cliente',
        'id' => 'nome_cliente',
        'type' => 'text',
    ]);




    //Loop box Imagens
    $item_portfolio = $cmb->add_field([
        'name' => 'Item Portfólio',
        'id' => 'item_portfolio',
        'type' => 'group',
        'repeatable' => true,
        'options' => [
            'sortable' => true,
            'add_button' => 'Adicionar Imagem',
            'remove_button' => 'Remover Imagem',
        ],
    ]);

    //Loop item (Adicionar Imagem)
    $cmb->add_group_field($item_portfolio, [
        'name' => 'Portfólio Imagem 1',
        'id' => 'portfolio_imagem1',
        'type' => 'file',
        'options' => [
            'url' => false,
        ],
    ]);

    //(Descrição Imagem)
    $cmb->add_group_field($item_portfolio, [
        'name' => 'Descrição Imagem 1',
        'id' => 'portfolio_imagem_descricao1',
        'type' => 'text',
    ]);

    //Loop item (Adicionar Imagem)
    $cmb->add_group_field($item_portfolio, [
        'name' => 'Portfólio Imagem 2',
        'id' => 'portfolio_imagem2',
        'type' => 'file',
        'options' => [
            'url' => false,
        ],
    ]);

    //(Descrição Imagem)
    $cmb->add_group_field($item_portfolio, [
        'name' => 'Descrição Imagem 2',
        'id' => 'portfolio_imagem_descricao2',
        'type' => 'text',
    ]);

    //Loop item (Adicionar Imagem)
    $cmb->add_group_field($item_portfolio, [
        'name' => 'Portfólio Imagem 3',
        'id' => 'portfolio_imagem3',
        'type' => 'file',
        'options' => [
            'url' => false,
        ],
    ]);

    //(Descrição Imagem)
    $cmb->add_group_field($item_portfolio, [
        'name' => 'Descrição Imagem 3',
        'id' => 'portfolio_imagem_descricao3',
        'type' => 'text',
    ]);

    $cmb->add_field([
        'name' => 'Chamar Portfólio',
        'id' => 'chamada_portfolio',
        'type' => 'text',
    ]);

}



?>