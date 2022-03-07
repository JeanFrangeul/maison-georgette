<?php get_header(); ?>
<main>
	
	<section class="navigation">
		<h1>Archive.php</h1>
		<?php// var_dump(get_terms()); ?>

	</section>

	<section class="produits__posts row">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>


			<div class="card col-sm-12 col-md-6 col-lg-4 col-xl-3">
				<div class="card-img-top image">
					<?php the_post_thumbnail('medium');?>
				</div>
				<div class="card-body">
					<h5 class="card-title"><?php the_title(); ?></h5>
					<a href="<?php the_permalink(); ?>" class="btn btn-primary">En voir plus</a>
				</div>
			</div>

		<?php endwhile;
		endif; ?>
	</section>
</main>
<?php get_footer(); ?>