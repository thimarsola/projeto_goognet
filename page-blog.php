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
				?>
			<?php endif; ?>
			<?php wp_reset_query(); ?>
		</div>
	</section>

	<!-- Destaques -->
	<section id="destaques">
		<div class="container">
			<h4>Destaques<span>!</span></h4>
			<p>Aqui você encontra os melhores temas de <strong>Marketing Digital</strong> para ajudar no crescimento da sua
				empresa.</p>
			<div class="row">
				<?php
				$args_destaques = array(
					'post_type' => 'post',
					'post_per_page' => 3,
					'tag' => 'Destaque'
				);
				$query_destaques = new WP_Query($args_destaques);
				?>
				<?php
				if ($query_destaques->have_posts()) :
					while ($query_destaques->have_posts) : $query_destaques->the_post();
						?>
						<div class="col-sm-4">
							<div class="card">
								<?php the_post_thumbnail('post-thumbnail', array('class' => 'card-img-top img-fluid')); ?>
								<div class="card-body">
									<h5 class="card-title"><?php the_title(); ?></h5>
									<?php the_category(); ?>
								</div>
							</div>
						</div>
					<?php
					endwhile;
				else :
					?>
					<p>....</p>
				<?php endif; ?>
				<?php wp_reset_query(); ?>
			</div>
		</div>
	</section>
	<!-- Post -->
	<section id="publicacoes">
		<div class="container">
			<p>Publicações recentes<span>!</span></p>
			<!-- Postagens -->
			<div class="row">
				<?php
					$args_publicacoes = array(
						'post_per_page' => 6
					);

					$query_publicacoes = new WP_Query($args_publicacoes);
				?>
				<?php
					if($query_publicacoes->have_posts()):
						while($query_publicacoes-have_posts()): $query_publicacoes->the_post();
				?>
					<!-- Post -->
					<div class="col-sm-4">
						<div class="card">
							<?php the_post_thumbnail('post-thumbnail', array('class' => 'card-img-top img-fluid')); ?>
							<div class="card-body">
								<h5 class="card-title"><?php the_title(); ?></h5>
								<?php the_category(); ?>
							</div>
						</div>
					</div>
				<?php
				endwhile;
				?>
				<?php endif; ?>
				<?php wp_reset_query(); ?>
			</div>
			<div class="btn-center">
				<a class="btn-goog-publicacao" href="#">veja todas as publicações <i class="material-icons">
						keyboard_arrow_right</i></a>
			</div>
		</div>
	</section>
</main>
<?php get_footer(); ?>