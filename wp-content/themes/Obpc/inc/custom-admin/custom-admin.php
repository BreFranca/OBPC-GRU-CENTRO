<?php
/*
 * TELA DE LOGIN
*/
// ALTERANDO LOGOTIPO DO ADMIN
add_action( 'login_enqueue_scripts', 'admin_login_logo' );
function admin_login_logo() {
	require get_template_directory() . '/inc/custom-admin/login.php';
}

add_action( 'login_head', 'untame_fadein',30); 
function untame_fadein() {
	echo '<script type="text/javascript">// <![CDATA[
		jQuery(document).ready(function() { jQuery("#loginform,#nav,#backtoblog").css("display", "none");
		jQuery("#loginform,#nav,#backtoblog").fadeIn(3500);
	});
	// ]]></script>';
}

// ALTERANDO LINK DO ADMIN
add_filter( 'login_headerurl', 'admin_link_logo' );
function admin_link_logo() {
	return home_url();
}

/*
 * PAINEL ADMINISTRATIVO
*/
// ALTERANDO MENSAGEM RODAPÉ ADMIN
add_filter('admin_footer_text', 'copyright_admin');
function copyright_admin() {
	echo 'Criado por <a href="http://www.jota3w.com.br/"><img src="http://jota3w.com.br/_referencias/logo_j3w_wp.png" alt=""></a>.';
}

require get_template_directory() . '/inc/custom-admin/css-painel.php';

// REMOVENDO ITENS DA DASHBOARD
 
add_action( 'admin_menu', 'custom_remove_menus' );
 
function custom_remove_menus() {

	// Removendo a página das Categorias
	// remove_submenu_page( 'edit.php', 'edit-tags.php?taxonomy=category' );

	// Removendo a página das Tags
	remove_submenu_page( 'edit.php', 'edit-tags.php?taxonomy=post_tag' );

	// Removendo a edição de posts - funcionalidade de blog
	//remove_menu_page( 'edit.php' );

	// Removendo o menu de acesso aos comentários
	//remove_menu_page( 'edit-comments.php' );

	// Removendo o menu de Ferramentas
	//remove_menu_page( 'tools.php' );

	// Removendo o gestor de Links
	//remove_menu_page( 'link-manager.php' ); 

	// Removendo o gestor de Temas
	//remove_menu_page( 'themes.php' );

	// Removendo o gestor de Plugins
	//remove_menu_page( 'plugins.php' );
}

//REMOVENDO WIDGETS DA DASHBOARD
add_action('wp_dashboard_setup', 'admin_remove_dashboard_widgets' );
function admin_remove_dashboard_widgets() {
	global $wp_meta_boxes;
	// Remove o widget "Links de entrada" (Incomming links)
	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_incoming_links']);        
	// remove o widget "Plugins"
	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_plugins']);        
	// remove o widget "Rascunhos recentes" (Recent drafts)
	unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_recent_drafts']);
	// remove o widget "QuickPress"
	unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_quick_press']);

	// remove o widget "Agora" (Right now)
	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_right_now']);
	// remove o widget "Blog do WordPress" (Primary)
	unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_primary']);
	// remove o widget "Outras notícias do WordPress" (Secondary)
	unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_secondary']);
}

add_action('wp_dashboard_setup', 'admin_custom_dashboard_widgets');

function admin_custom_dashboard_widgets() {
    global $wp_meta_boxes;

    wp_add_dashboard_widget('custom_help_widget', '<a href="#"><img src="http://jota3w.com.br/_referencias/logo_j3w_wp.png" alt=""></a> | Suporte', 'admin_custom_dashboard_help');
}

function admin_custom_dashboard_help() {
    echo 'Se você tiver qualquer dúvida ou precisar de ajuda, por favor, entre em contato conosco através do e-mail de Suporte em <a href="mailto:contato@jota3w.com.br">contato</a>. <br> Ou se preferia, envie um e-mail para "contato@jota3w.com.br"';
}

//CORES PERSONALIZADAS NOS POSTS
add_action('admin_footer','wpmidia_posts_status_color');
function wpmidia_posts_status_color(){ ?>
	<style>
		.status-draft{background: #FCE3F2 !important;}
		.status-pending{background: #87C5D6 !important;}
		.status-publish{/* Nenhum background. Manter as cores alternadas */}
		.status-future{background: #C6EBF5 !important;}
		.status-private{background:#F2D46F !important;}
	</style>
<?php }