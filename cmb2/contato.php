<?php 

add_action('cmb2_admin_init', 'cmb2_page_contato');

function cmb2_page_contato(){
    $cmb = new_cmb2_box([
        'id' => 'contato_box',
        'title' => 'Contato',
        'object_types' => ['page'],
        'show_on' => [
            'key' => 'page-template',
            'value' => 'page-contato.php',
        ],
    ]);

    $cmb->add_field([
        'name' => 'Telefone',
        'id' => 'telefone',
        'type' => 'text',
    ]);

    $cmb->add_field([
        'name' => 'E-mail',
        'id' => 'email',
        'type' => 'text',
    ]);

    $cmb->add_field([
        'name' => 'Bairro',
        'id' => 'endereco_bairro',
        'type' => 'text',
    ]);

    $cmb->add_field([
        'name' => 'Cidade',
        'id' => 'endereco_cidade',
        'type' => 'text',
    ]);

    //Redes Sociais box
    $redes_sociais = $cmb->add_field([
        'name' => 'Redes Sociais',
        'id' => 'redes_sociais',
        'type' => 'group',
        'repeatable' => true,
        'options' => [
            'sortable' => true,
            'add_button' => 'Adicionar Rede',
            'remove_button' => 'Remover Rede',
        ],
    ]);

    $cmb->add_group_field($redes_sociais, [
        'name' => 'Link da Rede Social',
        'id' => 'link_redes',
        'type' => 'text_url',
    ]);

    $cmb->add_group_field($redes_sociais, [
        'name' => 'Imagem da Rede Social',
        'id' => 'imagem_redes',
        'type' => 'file',
        'options' => [
            'url' => false,
        ],
    ]);

    $cmb->add_group_field($redes_sociais, [
        'name' => 'Nome da Rede Social',
        'id' => 'nome_redes',
        'type' => 'text',
    ]);

    //Mapa
    $cmb->add_field([
        'name' => 'Link do Mapa',
        'id' => 'link_mapa',
        'type' => 'text_url',
    ]);

    $cmb->add_field([
        'name' => 'Imagem do Mapa',
        'id' => 'imagem_mapa',
        'type' => 'file',
        'options' => [
            'url' => false,
        ],
    ]);

    $cmb->add_field([
        'name' => 'Texto Mapa',
        'id' => 'texto_mapa',
        'type' => 'text',
    ]);

    //Footer
    $cmb->add_field([
        'name' => 'Background Footer',
        'id' => 'background_footer',
        'type' => 'file',
        'options' => [
            'url' => false,
        ],
    ]);

    $cmb->add_field([
        'name' => 'Frase Rodapé',
        'id' => 'footer_frase',
        'type' => 'textarea_small',
    ]);

    $cmb->add_field([
        'name' => 'Autor Rodapé',
        'id' => 'footer_autor',
        'type' => 'text',
    ]);

    $cmb->add_field([
        'name' => 'Resumo da História',
        'id' => 'resumo_historia',
        'type' => 'textarea_small',
    ]);

}

?>