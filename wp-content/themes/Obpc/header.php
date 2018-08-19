<!DOCTYPE html><!--[if IE 8]>
<html lang="pt-br" class="lt-ie9">
<![endif]-->
<!--[if gt IE 8]><!-->
<html lang="pt-br"><!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="assets/img/favicon.ico" rel="shortcut icon" type="image/png">
	<?php wp_head(); ?>
</head>
<body>
	<header>
		<div id="headerTop">
			<div class="gridD">
				<?php get_template_part('template-parts/content', 'socials'); ?>
				<div class="search">
					<form>
						<input type="text" name="search" placeholder="Digite o que você procura">
					</form>
				</div>
			</div>
		</div>
		<div id="menu">
			<div class="gridD">
				<div class="logoMain">
					<a href="<?php echo site_url(); ?>">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/logoMain.png" alt="">
					</a>
				</div>
				<nav>
					<ul>
						<li class="active"><a href="interna.php">A OBRA OPBC</a></li>
						<li><a href="#">PROGRAMAÇÃO</a>
							<ul class="sub-menu">
							<li><a href="#">Culto da Família</a></li>
							<li><a href="#">Culto de Oração</a></li>
							<li><a href="#">Culto dos Jovens</a></li>
							<li><a href="#">Culto da Colheita</a></li>
							<li><a href="#">Culto de Missões</a></li>
							<li><a href="#">Cultos Temáticos</a></li>
							<li class="all"><a href="#">Toda a Programação</a></li>
							</ul>
						</li>
						<li><a href="#">GALERIAS</a></li>
						<li><a href="#">Notícias</a></li>
						<li><a href="#">Fale Conosco</a></li>
					</ul>
				</nav>
			</div>
		</div>
	</header>