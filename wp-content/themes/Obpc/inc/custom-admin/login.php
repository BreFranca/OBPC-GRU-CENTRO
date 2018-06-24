<!--<div id="copyright">
	<a href="http://jota3w.com.br" class="jota3w-copy" target="_blank">
		<img src="<?php bloginfo('template_url'); ?>/inc/custom-admin/images/jota3w.png" alt="Jota3w Comunicação Digital">
	</a>
</div>-->
<style>
	body.login {
		background: #f1f1f1;
	}
	body.login #copyright {
		width: 80px;
		position: absolute;
		left: 50%;
		top: 50%;
		transform: translate(-50%, -50%);
		padding: 0;
		margin: auto;
		z-index: 11;
		margin-top: 120px;
	}
	body.login #copyright a {
		width: 80px;
		height: auto;
		display: block;
	}
	body.login #copyright a img {
		max-width: 100%;
		display: block;
	}
	body.login div#login {
		position: absolute;
		left: 50%;
		top: 50%;
		transform: translate(-50%, -50%);
		padding: 0;
	}
	body.login div#login h1 {
		display: none;
	}
	.login h1 a {
		background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/inc/custom-admin/images/logo.png')!important;
		height: 100px!important;
		width: 210px!important;
		margin: 0 auto!important;
		background-size: 210px!important;
		background-position: center center!important;
	}
	body.login div#login #login_error,
	body.login div#login .message {
		display: block;
		padding: 0;
		border: none;
		padding: 10px;
		font-size: 11px;
	}
	body.login div#login form {
		margin-top: 10px;
		border-radius: 10px;
		//background: rgba(255, 255, 255, .6);
	}
	body.login div#login form#loginform {
		padding-top: 46px;
	}
	body.login div#login form#lostpasswordform {
		padding-top: 35px;
	}
	body.login div#login form p {}
	body.login div#login form p label {
		font-size: 12px;
		color: #000;
	}
	body.login div#login form input {
		font-size: 14px;
	}
	body.login div#login form#loginform input#user_login {
		background: rgba(255, 255, 255, .6);
		padding: 5px;
	}
	body.login div#login form#loginform input#user_pass {
		background: rgba(255, 255, 255, .6);
		padding: 5px;
	}
	/*body.login div#login form#loginform p.forgetmenot {
		display: none;
	}*/
	body.login div#login form#loginform p.forgetmenot input#rememberme {}
	body.login div#login form#loginform p.submit {}
	body.login div#login form#loginform p.submit input#wp-submit {
		display: block;
		float: right;
		margin: 0 auto;
		background: #000;
		transition: .4s all linear;
		box-shadow: none;
		text-shadow: none;
		border: none;
	}
	body.login div#login form#loginform p.submit input#wp-submit:hover {
		background: #d8dd28;
		color: #000;
	}
	body.login div#login p#nav {
		display: none;
	}
	body.login div#login p#nav a {
		color: #fff;
	}
	body.login div#login p#backtoblog {}
	body.login div#login p#backtoblog a {
		color: #fff;
		display: none;
	}
</style>