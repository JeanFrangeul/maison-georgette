<?php //Template Name: Homepage

get_header(); ?>

<!--<?php if (is_user_logged_in()) : ?> <h1 class="connected">HELLO MARIE</h1> <?php endif ?>-->


<main>
	<section class="top ">
		<p>
			<?= get_field('description'); ?>
		</p>
	</section>

	<section class="slider-produits">
		<h2><?= get_field('maison')['titre']; ?> </h2>
		<div class="home-slider">
			<?php $maisonSlider = get_field('maison')['slider']; ?>
			<?php foreach ($maisonSlider as $tuille) { ?>
				<?php //var_dump($tuille); 
				?>
				<img class="item" src="<?= $tuille['tuille']['image']['url']; ?>" alt="">
			<?php } ?>
		</div>
		<a href="<?= get_home_url() . '/produits'; ?>">En voir plus ?</a>
	</section>

	<section class="horaires-map">
		<h2>Quelques infos :</h2>
		<div class="d-flex">
			<div class="d-flex flex-column col-6">
				<?php $horaires = get_field('horaires'); ?>
				<div class="titre">
					<?= $horaires['titre']; ?>
				</div>
				<div class="liste">
					<table class="table table-striped">
						<tbody>
							<?php foreach ($horaires['tableau'] as $ligne) { ?>
								<tr>
									<th scope="row"></th>
									<td class="jours"><?= $ligne['jours']; ?></td>
									<td class="heures"><?= $ligne['heures']; ?></td>
								</tr>
							<?php } ?>
						</tbody>
					</table>
				</div>
				<div class="contact">
					<h3>Nous contacter</h3>
					<div class="mail">Par mail : <a href="mailto:coucou@caca.fr">coucou@caca.fr</a></div>
					<div class="tel">Par telephone : <a href="tel:0606060606">06 06 06 06 06</a></div>
				</div>
			</div>

			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2821.2073931799073!2d-1.201704483910179!3d45.0004101722898!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4801ff51b63b14e3%3A0x1e97ed062a8cdc35!2sMaison%20Georgette!5e0!3m2!1sfr!2sfr!4v1620142593655!5m2!1sfr!2sfr" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
		</div>
	</section>

</main>

<?php get_footer(); ?>