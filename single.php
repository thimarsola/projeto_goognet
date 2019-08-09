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
							<ul>
								<li><a href="#">Marketing Digital</a></li>
								<li><a href="#">Web Design</a></li>
								<li><a href="#">Mídia Sociais</a></li>
								<li><a href="#">Identidade Visual</a></li>
							</ul>
						</div>
						<!-- Últimos post -->
						<div class="posts-aside mt-5">
							<h6>Posts Recentes</h6>
							<div class="posts-recentes">
								<ul>
									<?php
									$args_posts = array(
										'post_type' => 'post',
										'post_per_page' => 5,
										'order' => 'ASC'
									);
									$query_posts = new WP_Query($args_posts);
									?>
									<!-- Post 1 -->
									<?php
									if ($query_posts->have_posts()) :
										while ($query_posts - have_posts()) : $query_posts->the_post();
											?>

									<li><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></li>
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
				<!-- Post -->
				<div class="col-sm-4">
					<?php if (have_posts()) :
						while (have_posts()) : the_post();
							?>
					<article>
						<div class="card">
							<img src="<?php echo get_template_directory_uri(); ?>/src/assets/img-destaque-1.jpg"
								class="card-img-top img-fluid" alt="Imagem de destaque do Post">
							<div class="card-body">
								<h5 class="card-title"><a href="#"><?php the_title(); ?></a></h5>
								<a href="<?php the_permalink(); ?>" class="categoria-destaque"><?php the_category('|'); ?></a>
							</div>
						</div>
					</article>
					<?php
						endwhile;
					else :
						?>
					<p>....</p>
					<?php endif; ?>
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