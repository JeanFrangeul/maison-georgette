<?php get_header(); ?>
<main>

	<section class="navigation">
		<h1>Quoi de neuf chez Maison Georgette ?</h1>
		<?php// var_dump(get_terms()); ?>
		<nav class="products-nav products-nav navbar navbar-light" style="background-color: #e3f2fd;">
			<?php if (is_tax('type-produits')) :

				$args = array(
					'public'   => true,
					'_builtin' => false
				);
				$output = 'names'; // or objects
				$operator = 'and';
				$taxonomies = get_taxonomies($args, $output, $operator);
				if ($taxonomies) {
					foreach ($taxonomies  as $taxonomy) {
						$terms = get_terms([
							'taxonomy' => $taxonomy,
							'hide_empty' => false,
						]);
						foreach ($terms as $term) {
			?>
							<li><a href="<?= get_home_url() . '/' . $term->taxonomy . '/' . $term->slug; ?>"><?= $term->name; ?></a></li>
			<?php
						}
					}
				}
			endif ?>
		</nav>
	</section>

	<section class="produits__posts row">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

				<article class="product-post col-4">
					<h2><?php the_title(); ?></h2>

					<?php the_post_thumbnail('medium'); ?>

					<?php the_excerpt(); ?>

					<p>
						<a href="<?php the_permalink(); ?>" class="product-post__link">Lire la suite</a>
					</p>
				</article>

		<?php endwhile;
		endif; ?>
	</section>
</main>
<?php get_footer(); ?>