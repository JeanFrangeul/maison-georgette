<?php //Template Name: Homepage

get_header(); ?>

<!--<?php if (is_user_logged_in()) : ?> <h1 class="connected">HELLO MARIE</h1> <?php endif ?>-->


<main>
	<section class="top d-flex col-12">
		<?php $top = get_field('top-video'); ?>
		<div class="d-flex flex-column col-12 align-items-center">
			<h1 id="title">
				<?= $top['titre']; ?>
			</h1>

			<h4>
				<?= $top['sous-titre']; ?>
			</h4>

			<video autoplay muted class="col-8">
				<source src="<?= $top['video']['url'] ;?>" type="<?= $top['video']['mime_type'];?>">
			</video>
		</div>
	</section>


	<section class="categories">
		<?php $homeCategorie = get_field('categories');?>
		<div class="title">test</div>
		<h2 class="title">Notre Selection</h2>

		<?php foreach ($homeCategorie as $categorie) {
			?>
			<h3 class="cat-title"><?= $categorie['categorie-nom']; ?></h3>

			<div class="home-slider">
				<?php foreach ($categorie['carrousel'] as $image ) {
					?>
					<img class="item" src="<?= $image['image']['url']; ?>" alt="image de <?= $image['image']['name']; ?>">
				<?php } ?>
			</div>
		<?php } ?>
	</section>

	<section>
		<?php $about = get_field('a_propos'); ?>

		<div class="about"><?=$about;?></div>
	</section>

	<section class="map d-flex">

		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2821.2073931799073!2d-1.201704483910179!3d45.0004101722898!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4801ff51b63b14e3%3A0x1e97ed062a8cdc35!2sMaison%20Georgette!5e0!3m2!1sfr!2sfr!4v1620142593655!5m2!1sfr!2sfr" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
			
		<div class="contact">
			<h3>Trouvez nous facilement</h3>

		</div>



	</section>

</main>

<?php get_footer(); ?>

