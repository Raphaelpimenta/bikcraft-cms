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
        'name' => 'Título qualidade',
        'id' => 'titulo_qualidade',
        'type' => 'text',
    ]);

    $cmb->add_field([
        'name' => 'Logo Bikcraft',
        'id' => 'logo_imagem',
        'type' => 'file',
        'options' => [
            'url' => false
        ],
    ]);

    //Campo do Loop
    $item_qualidade = $cmb->add_field([
        'name' => 'Item Qualidade',
        'id' => 'item_qualidade',
        'type' => 'group',
        'repeatble' => true,
        'options' => [
            'sortable' => true,
            'add_button' => 'Adicionar Qualidade',
            'remove_button' => 'Remover Qualidade',
        ],
    ]);

    //Loop item
    $cmb->add_group_field($item_qualidade, [
        'name' => 'Título item qualidade',
        'id' => 'titulo_item_qualidade',
        'type' => 'text',
    ]);

    //Loop item
    $cmb->add_group_field($item_qualidade, [
        'name' => 'Descrição item qualidade',
        'id' => 'descricao_item_qualidade',
        'type' => 'textarea_small',
    ]);

    $cmb->add_field([
        'name' => "Descrição acima do botão 'sobre'",
        'id' => 'chamar_sobre_btn',
        'type' => 'text',
    ]);
}

?>