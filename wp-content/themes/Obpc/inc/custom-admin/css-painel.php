<?php
add_action('wp_before_admin_bar_render', 'logo_adminbar', 0);
function logo_adminbar() { ?>
	<style type="text/css">
		#welcome-panel {
			display: none!important;
		}
		#wpadminbar {
			background: #ccc!important;
		}
		#wpadminbar .quicklinks {
			padding: 0 20px;
		}
		#wpadminbar .ab-top-menu>li.hover>.ab-item, #wpadminbar.nojq .quicklinks .ab-top-menu>li>.ab-item:focus, #wpadminbar:not(.mobile) .ab-top-menu>li:hover>.ab-item, #wpadminbar:not(.mobile) .ab-top-menu>li>.ab-item:focus {
			background: #ccc!important;
			color: #005190!important;
		}
		#wpadminbar .menupop .ab-sub-wrapper, #wpadminbar .shortlink-input {
			background: #ccc!important;
		}
		#wpadminbar .ab-empty-item, #wpadminbar a.ab-item, #wpadminbar>#wp-toolbar span.ab-label, #wpadminbar>#wp-toolbar span.noticon {
			color: #000!important;
		}
		#wpadminbar #adminbarsearch:before, #wpadminbar .ab-icon:before, #wpadminbar .ab-item:before {
			color: #000!important;
		}
		#wpadminbar #wp-admin-bar-wp-logo > .ab-item .ab-icon:before {
			content: url('<?php echo get_stylesheet_directory_uri(); ?>/inc/custom-admin/images/admin-logo.png') !important;
			top: -3px!important;
			left: -5px!important;
		}
		#wpadminbar #wp-admin-bar-wp-logo > a.ab-item {
			pointer-events: none!important;
			cursor: default!important;
		}
		#custom_help_widget h2 span {
			height: 25px;
			display: block;
			vertical-align: middle;
			padding: 10px 0;
		}
		#custom_help_widget h2 span a {
			display: inline-block;
			height: 25px;
			vertical-align: middle;
		}
		#wpadminbar #wp-admin-bar-wp-logo .ab-sub-wrapper {
			display: none!important;
		}
		#adminmenu .wp-submenu a:focus, #adminmenu .wp-submenu a:hover, #adminmenu a:hover, #adminmenu li.menu-top>a:focus {
			color: #005190!important;
		}
		#adminmenu .wp-has-current-submenu .wp-submenu .wp-submenu-head, #adminmenu .wp-menu-arrow, #adminmenu .wp-menu-arrow div, #adminmenu li.current a.menu-top, #adminmenu li.wp-has-current-submenu a.wp-has-current-submenu, .folded #adminmenu li.current.menu-top, .folded #adminmenu li.wp-has-current-submenu {
			background: #ccc!important;
			color: #000!important;
		}
		#adminmenu .current div.wp-menu-image:before, #adminmenu .wp-has-current-submenu div.wp-menu-image:before, #adminmenu a.current:hover div.wp-menu-image:before, #adminmenu a.wp-has-current-submenu:hover div.wp-menu-image:before, #adminmenu li.wp-has-current-submenu a:focus div.wp-menu-image:before, #adminmenu li.wp-has-current-submenu.opensub div.wp-menu-image:before, #adminmenu li.wp-has-current-submenu:hover div.wp-menu-image:before {
			color: #000!important;
		}
		#adminmenu li.menu-top:hover, #adminmenu li.opensub>a.menu-top, #adminmenu li>a.menu-top:focus {
			color: #005190!important;
		}
		#adminmenu li a:focus div.wp-menu-image:before, #adminmenu li.opensub div.wp-menu-image:before, #adminmenu li:hover div.wp-menu-image:before {
			color: #005190!important;
		}
		#wpadminbar .ab-top-menu>li.hover>.ab-item, #wpadminbar.nojq .quicklinks .ab-top-menu>li>.ab-item:focus, #wpadminbar:not(.mobile) .ab-top-menu>li:hover>.ab-item, #wpadminbar:not(.mobile) .ab-top-menu>li>.ab-item:focus {
			color: #005190!important;
		}
		#wpadminbar .quicklinks .ab-sub-wrapper .menupop.hover>a, #wpadminbar .quicklinks .menupop ul li a:focus, #wpadminbar .quicklinks .menupop ul li a:focus strong, #wpadminbar .quicklinks .menupop ul li a:hover, #wpadminbar .quicklinks .menupop ul li a:hover strong, #wpadminbar .quicklinks .menupop.hover ul li a:focus, #wpadminbar .quicklinks .menupop.hover ul li a:hover, #wpadminbar .quicklinks .menupop.hover ul li div[tabindex]:focus, #wpadminbar .quicklinks .menupop.hover ul li div[tabindex]:hover, #wpadminbar li #adminbarsearch.adminbar-focused:before, #wpadminbar li .ab-item:focus .ab-icon:before, #wpadminbar li .ab-item:focus:before, #wpadminbar li a:focus .ab-icon:before, #wpadminbar li.hover .ab-icon:before, #wpadminbar li.hover .ab-item:before, #wpadminbar li:hover #adminbarsearch:before, #wpadminbar li:hover .ab-icon:before, #wpadminbar li:hover .ab-item:before, #wpadminbar.nojs .quicklinks .menupop:hover ul li a:focus, #wpadminbar.nojs .quicklinks .menupop:hover ul li a:hover {
			color: #005190!important;
		}
		#wpadminbar:not(.mobile)>#wp-toolbar a:focus span.ab-label, #wpadminbar:not(.mobile)>#wp-toolbar li:hover span.ab-label, #wpadminbar>#wp-toolbar li.hover span.ab-label {
			color: #005190!important;
		}
		#wpfooter #footer-left a {
			display: inline-block!important;
			vertical-align: middle!important;
			margin-left: 5px!important;
		}
	</style>
<?php }