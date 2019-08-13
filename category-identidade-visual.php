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
	<!-- Post -->
	<section id="publicacoes">
		<div class="container">
			<p>Identidade Visual<span>!</span></p>
			<!-- Postagens -->
			<div class="row">
				<?php
				$args_publicacoes = array(
					'post_type' => "post",
					'category_name' => "Identidade Visual"
				);

				$query_publicacoes = new WP_Query($args_publicacoes);
				?>
				<?php
				if ($query_publicacoes->have_posts()) :
					while ($query_publicacoes->have_posts()) : $query_publicacoes->the_post();
						?>
						<!-- Post -->
						<div class="col-sm-4">
							<div class="card">
								<?php the_post_thumbnail('post-thumbnail', array('class' => 'card-img-top img-fluid')); ?>
								<div class="card-body">
									<h5 class="card-title"><a href="<?php permalink_link(); ?>"><?php the_title(); ?></a></h5>
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
		</div>
	</section>
</main>
<?php get_footer(); ?>