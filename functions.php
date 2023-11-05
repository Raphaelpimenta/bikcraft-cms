<?php 

//Melhorando a forma de chamar o campo
function get_field($key, $page_id = 0){
    $id = $page_id !== 0 ? $page_id : get_the_ID();
    return get_post_meta($id, $key, true);
}

function the_field($key, $page_id = 0){
    echo get_field($key, $page_id);
}

add_action('cmb2_admin_init', 'cmb2_teste');

//Adicionar a caixa 
function cmb2_teste(){
    $cmb2 = new_cmb2_box([
        'id' => 'teste-box',
        'title' => 'Testando',
        'object_types' => ['page'],
        'show_on' => [
            'key' => 'page-template',
            'value' => 'page-home.php',
        ],
    ]);

    $cmb2 -> add_field([
        'name' => 'Seu nome',
        'id' => 'nome',
        'type' => 'text',
    ]);
}

?>