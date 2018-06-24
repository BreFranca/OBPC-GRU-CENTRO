<?php
/**************************************
 * Registro De Custom Post
 **************************************/
// add_action( 'init' , 'create_post_type' );
// function create_post_type() {
//     register_post_type('tv-allianz',
//         array(
//             'labels' => array( 
//                 'name' => _('TV Allianz Parque'), 
//                 'singular_name' => _('Vídeo'),
//                 'not_found' =>  __('Nenhum vídeo encontrado')
//             ),
//             'public' => true,
//             'menu_icon' => 'dashicons-video-alt',
//             // 'menu_position' => 3,
//             'supports' => array('title','thumbnail'),
//             'has_archive' => true
//         )
//     );
//     register_post_type('galeria',
//         array(
//             'labels' => array( 
//                 'name' => _('Galeria de Fotos'), 
//                 'singular_name' => _('Foto'),
//                 'not_found' =>  __('Nenhuma galeria encontrada')
//             ),
//             'public' => true,
//             'menu_icon' => 'dashicons-images-alt',
//             // 'menu_position' => 3,
//             'supports' => array('title','thumbnail'),
//             'has_archive' => true
//         )
//     );
// }

// function remove_menus(){
  
//   //remove_menu_page( 'edit.php' );                   //Posts
//   remove_menu_page( 'edit.php?post_type=page' );                   //Pages
//   remove_menu_page( 'edit-comments.php' );          //Comments
//   //remove_menu_page( 'themes.php' );                 //Appearance
//   //remove_menu_page( 'plugins.php' );                //Plugins
//   //remove_menu_page( 'options-general.php' );        //Settings
  
// }
// add_action( 'admin_menu', 'remove_menus' );

// function change_post_label() {
//     global $menu;
//     global $submenu;
//     $menu[5][0] = 'Layout';
//     $submenu['edit.php'][5][0] = 'Layouts';
//     $submenu['edit.php'][10][0] = 'Adicionar layout';
//     $submenu['edit.php'][16][0] = 'Tags';
//     echo '';
// }
// function change_post_object() {
//     global $wp_post_types;
//     $labels = &$wp_post_types['post']->labels;
//     $labels->name = 'Layouts';
//     $labels->singular_name = 'Layout';
//     $labels->add_new = 'Adicionar Layout';
//     $labels->add_new_item = 'Adicionar Layout';
//     $labels->edit_item = 'Editar Layout';
//     $labels->new_item = 'Layout';
//     $labels->view_item = 'Ver Layout';
//     $labels->search_items = 'Buscar Layouts';
//     $labels->not_found = 'Nenhuma Layout encontrado';
//     $labels->not_found_in_trash = 'Nenhuma Layout encontrado no Lixo';
//     $labels->all_items = 'Todas os Layouts';
//     $labels->menu_name = 'Layouts';
//     $labels->name_admin_bar = 'Layout';
// }
 
// add_action( 'admin_menu', 'change_post_label' );
// add_action( 'init', 'change_post_object' );