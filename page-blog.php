<?php
/*
	Template Name: Blog
*/
?>
<?php get_header(); ?>
<!-- conteúdo miolo -->
<main>
	<!-- Capa -->
	<section id="capa">
		<div class="container-fluid">
			<div class="container">
				<p>Buscando</p>
				<p>Um blog de marketing digital</p>
				<p>Com os melhores temas para a sua empresa?</p>
			</div>
		</div>
	</section>

	<!-- Destaque Principal -->
	<section id="destaque-principal">
		<div class="container">
			<?php
			$args_capa = array(
				'post_type' => 'post',
				'post_per_page' => 1,
				'tag' => 'capa'
			);

			$query_capa = new WP_Query($args_capa);

			?>
			<?php
			if ($query_capa->have_posts()) :
				while ($query_capa->have_posts()) : $query_capa->the_post();
					?>
					<article>
						<div class="row">
							<!-- imagem -->
							<div class="col-sm-6">
								<?php the_post_thumbnail('post-thumbnail', array('class' => 'img-fluid')); ?>
							</div>
							<!-- titulo -->
							<div class="col-sm-6">
								<div class="conteudo-destaque">
									<h2> <?php the_title(); ?></h2>
									<?php the_category(); ?>
									<a class="btn-goog" href="<?php the_permalink(); ?>">ver mais <i class="material-icons">
											keyboard_arrow_right</i></a>
								</div>
							</div>
						</div>
					</article>
				<?php
				endwhile;
			else :
				?>
				<p>....</p>
			<?php endif; ?>
			<?php wp_reset_query(); ?>
		</div>
	</section>

	<!-- Destaques -->
	<section id="destaques">
		<div class="container">
			<h4>Destaques<span>!</span></h4>
			<p>Aqui vovê encontra os melhores temas de <strong>Marketing Digital</strong> para ajudar no crescimento da sua
				empresa.</p>
			<div class="row">
				<!-- Destaque 1 -->
				<div class="col-sm-4">
					<div class="card">
						<img src="<?php echo get_template_directory_uri(); ?>/src/assets/img-destaque-1.jpg" class="card-img-top img-fluid" alt="Imagem de destaque do Post">
						<div class="card-body">
							<h5 class="card-title"><a href="#">Porque é importante um site responsivo?</a></h5>
							<a href="#" class="categoria-destaque">Web design</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Post -->
	<section id="publicacoes">
		<div class="container">
			<p>Publicações recentes<span>!</span></p>
			<!-- Postagens -->
			<div class="row">
				<!-- Post -->
				<div class="col-sm-4">
					<div class="card">
						<img src="<?php echo get_template_directory_uri(); ?>/src/assets/img-destaque-1.jpg" class="card-img-top img-fluid" alt="Imagem de destaque do Post">
						<div class="card-body">
							<h5 class="card-title"><a href="#">Porque é importante um site responsivo?</a></h5>
							<a href="#" class="categoria-destaque">Web design</a>
						</div>
					</div>
				</div>
			</div>
			<div class="btn-center">
				<a class="btn-goog-publicacao" href="#">veja todas as publicações <i class="material-icons">
						keyboard_arrow_right</i></a>
			</div>
		</div>
	</section>
</main>
<?php get_footer(); ?>