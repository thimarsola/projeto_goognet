<?php get_header(); ?>
<!-- conteúdo miolo -->
<main>
	<div class="capa-post">
		<?php the_post_thumbnail('post-thumbnail', array('class' => 'img-fluid')); ?>
	</div>
	<section id="conteudo-post">
		<div class="container">
			<div class="row">
				<!-- Conteúdo Post -->
				<div class="col-lg-8 col-md-7">
					<?php
					if (have_posts()) :
						while (have_posts()) : the_post();
							?>
							<article>
								<h2><?php the_title(); ?></h2>
								<?php the_content(); ?>
							</article>

						<?php
						endwhile;
					else :
						?>
						<p>....</p>
					<?php endif; ?>
				</div>
				<!-- Barra Lateral -->
				<div class="col-lg-4 col-md-5">
					<aside>
						<!-- Categorias -->
						<div class="categorias">
							<h6>Categorias</h6>
							<?php
							$args_categorias = array(
								'category_name' => 'featured',
								'order' => 'DESC'
							);

							$query_categorias = new WP_Query($args_categorias);
							?>
							<?php
							if ($query_categorias->have_posts()) :
								while ($query_categorias->have_posts()) : $query_categorias->the_post();
									?>
									<a href="<?php the_permalink(); ?>"><?php the_category(); ?></a>
								<?php
								endwhile;
								?>
							<?php endif; ?>
							<?php wp_reset_query(); ?>
						</div>
						<!-- Últimos post -->
						<div class="posts-aside mt-5">
							<h6>Posts Recentes</h6>
							<div class="posts-recentes">
								<ul>
									<?php
									$args_recentes = array(
										'posts_per_page' => 5
									);
									$query_recentes = new WP_Query($args_recentes);
									?>

									<?php
									if ($query_recentes->have_posts()) :
										while ($query_recentes->have_posts()) : $query_recentes->the_post();
											?>
											<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
										<?php
										endwhile;
										?>
									<?php endif; ?>
									<?php wp_reset_query(); ?>
								</ul>
							</div>
						</div>
						<!-- Cadastro -->
						<div class="cadastro-aside mt-5">
							<h6>Quer ficar por dentro de todas as nossas novidades?</h6>
							<p>Cadastre seu email abaixo:</p>
							<form action="" method="get">
								<div class="form-group">
									<div class="form-group">
										<input type="text" placeholder="digite aqui">
									</div>
									<button type="submit" class="btn btn-goog">cadastrar</button>
								</div>
							</form>
						</div>
					</aside>
				</div>
			</div>
		</div>
	</section>
	<!-- Posts relacionados -->
	<section id="publicacoes-relacionadas">
		<div class="container">
			<h5>Assuntos recomendados<span>!</span></h5>
			<p>Aqui você encontra os melhores temas de marketing digital para ajudar no crescimento da sua empresa.</p>
			<!-- Postagens -->
			<div class="row">
				<?php
				$args_relacionados = array(
					'orderby' => 'rand',
					'posts_per_page' => 3
				);
				$query_relacionados = new WP_Query($args_relacionados);
				?>

				<?php
				if ($query_relacionados->have_posts()) :
					while ($query_relacionados->have_posts()) : $query_relacionados->the_post();
						?>
						<!-- Post -->
						<div class="col-sm-4">
							<article>
								<div class="card">
									<?php the_post_thumbnail('post-thumbnail', array('class' => 'img-fluid card-img-top')); ?>
									<div class="card-body">
										<h5 class="card-title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h5>
										<?php the_category('|'); ?>
									</div>
								</div>
							</article>
						</div>
					<?php
					endwhile;
					?>
				<?php endif; ?>
				<?php wp_reset_query(); ?>
			</div>
		</div>
	</section>
	<!-- captação de lead -->
	<section id="lead">
		<div class="container">
			<p>Fala a verdade, só tem assunto bom nesse blog né?</p>
			<p>Quer receber todas esses conteúdos? Inscreva-se no nosso blog!</p>
			<form action="" method="post">
				<div class="form-group">
					<input type="text" placeholder="digite o seu e-mail aqui">
				</div>
				<button type="submit" class="btn btn-goog">cadastrar</button>
			</form>
		</div>
	</section>
</main>
<?php get_footer(); ?>