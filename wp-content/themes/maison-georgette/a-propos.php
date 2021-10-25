<?php
/*
Template Name: a propos
*/

get_header(); ?>
<h1>PAGE A PROPOS</h1>

<?php the_content(); ?>

<p>
	<strong>Note :</strong>
	<?php echo get_post_meta(get_the_ID(), 'Note', true); ?> / 10
</p>

<div class="plus-moins">
	<div class="plus">
		<?php echo get_post_meta(get_the_ID(), 'PLUS', true); ?>
	</div>
	<div class="plus">
		<?php echo get_post_meta(get_the_ID(), 'MOINS', true); ?>
	</div>
</div>
<?php get_footer(); ?>