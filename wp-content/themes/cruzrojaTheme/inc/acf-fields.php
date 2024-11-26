<?php

if( function_exists('acf_add_options_page') ) {

    acf_add_options_page(array(
        'page_title' => 'Ajustes del Tema',
        'menu_title' => 'Ajustes del Tema',
        'menu_slug' => 'ajustesTema',
        'capability' => 'edit_posts',
        'redirect' => false
    ));
    
    acf_add_options_sub_page(array(
        'page_title' => 'Ajustes de Header',
        'menu_title' => 'Ajustes de Header',
        'parent_slug' => 'ajustesTema',
    ));
}
