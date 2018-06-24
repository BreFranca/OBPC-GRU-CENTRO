<?php get_header(); ?>
<?php if (have_posts()): ?>
<?php
$categoria = get_the_category();
$nomeCategoria = $categoria[0]->slug; ?>
<main id="page-acontece" class="interna">
	<?php get_template_part('template-parts/content', 'banner'); ?>
	<section id="content">
		<div class="gridD">
			<div class="breadcrumb">
				<?php wp_custom_breadcrumbs(); ?>
			</div>
			<?php
				$categories = get_categories();
				if($categories):
			?>
			<div class="filter" data-cat="<?= $nomeCategoria; ?>">
				<ul>
					<li><a href="<?= site_url() . '/acontece'; ?>">Todas</a></li>
				<?php
					foreach( $categories as $category ) {
						echo '<li><a href="'. get_category_link($category->term_id) .'" class="'. $category->slug .'">' . $category->name . '</a></li>';
					}
				?>
				</ul>
			</div>
			<?php endif; ?>
			<div class="posts">
				<?php while(have_posts()): the_post(); ?>
				<div class="post">
					<div class="image" data-bg="<?php thumbnail_bg('medium'); ?>">
						<?php
							$categories = get_the_category();
							if($categories):
						?>
						<div class="category">
							<?php
								foreach( $categories as $category ) {
									echo '<a href="'. get_category_link($category->term_id) .'" class="'. $category->slug .'">' . $category->name . '</a>';
								}
							?>
						</div>
						<?php endif; ?>
					</div>
					<div class="text">
						<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
						<?php $date = get_the_date(); ?>
						<div class="date">
							<p><?= $date; ?></p>
						</div>
						<div class="excerpt">
							<?php the_excerpt(); ?>
						</div>
						<a href="<?php the_permalink(); ?>" class="btn-saber orange">+</a>
					</div>
				</div>
				<?php endwhile; ?>
			</div>
		</div>
	</section>
</main>
<?php else: ?>
	<?php header("location: " . site_url()); ?>
<?php endif; ?>
<?php get_footer(); ?>