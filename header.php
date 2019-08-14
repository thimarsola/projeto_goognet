<!DOCTYPE html>
<html lang="pt-BR">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<!-- description -->
	<meta name="description" content="A Agência Goognet Solução Digital é uma agência de Marketing Digital no ABC Paulista e na Grande São Paulo focada em resultado, buscando a solução ideial para a sua necessidade.">
	<!-- Keywords -->
	<meta name="Keywords" content="">
	<!-- Robots -->
	<meta name="robots" content="index, follow">
	<meta name="googlebot" content="index, follow">
	<!-- Author -->
	<meta name="author" content="Goognet Solução Digital - http://www.goognet.com.br">
	<!-- Region -->
	<meta name="geo.region" content="BR-SP" />
	<meta name="geo.placename" content="S&atilde;o Bernardo do Campo" />
	<meta name="geo.position" content="-23.689843;-46.564848" />
	<meta name="ICBM" content="-23.689843, -46.564848" />
	<!-- Fontawesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
	<!-- Material Design Icons -->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!-- Favicon -->
	<link rel="apple-touch-icon" sizes="57x57" href="src/assets/favicon/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="src/assets/favicon/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="src/assets/favicon/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="src/assets/favicon/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="src/assets/favicon/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="src/assets/favicon/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="src/assets/favicon/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="src/assets/favicon/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="src/assets/favicon/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192" href="src/assets/favicon/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="src/assets/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="src/assets/favicon/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="src/assets/favicon/favicon-16x16.png">
	<link rel="manifest" href="src/assets/favicon/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="src/assets/favicon/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">
	<!--Limpa cache-->
	<meta http-equiv="cache-control" content="no-cache" />
	<meta http-equiv="pragma" content="no-cache" />
	<meta http-equiv="expires" content="0" />
	<!-- Title -->
	<title>Goognet Solução Digital - Agência de Marketing no Grande ABC</title>
	<!-- Google reCaptcha -->
	<script src="https://www.google.com/recaptcha/api.js" async defer></script>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<!-- Header -->
	<header>
		<div class="container-fluid">
			<nav>
				<div class="container">
					<div class="conteudo-header">
						<div class="logo">
							<a href="http://www.goognet.com.br"><img src="<?php echo get_template_directory_uri(); ?>/src/assets/logo-goognet-header.svg" alt="Logo da Agência Goognet Solução Digital" class="img-fluid"></a>
						</div>
						<h1>Agência de Marketing Digital</h1>
						<div class="menu">
							<p>menu</p>
							<div class="hamburger-icon">
								<div class="bar1"></div>
								<div class="bar2"></div>
								<div class="bar3"></div>
							</div>
						</div>
					</div>
				</div>
				<div class="menu-site">
					<div class="container">
						<div class="header">
							<img src="<?php echo get_template_directory_uri(); ?>/src/assets/logo-goognet-header-branco.svg" alt="Logo da Agência Goognet Solução Digital" class="img-fluid">
							<div class="menu-fechado">
								<p>Fechar</p>
								<div class="close-icon">
									<i class="material-icons">
										close
									</i>
								</div>
							</div>
						</div>
						<div class="menu-list">
							<?php wp_nav_menu(
								array('theme_location' => 'my_main_menu')
							);
							?>
							<!-- <ul>
								<li>
									<a href="#">Agência</a>
									<p>Conheça um pouco mais sobre a agência</p>
								</li>
								<li>
									<a href="#">Serviços</a>
									<p>Conheça um pouco mais sobre os nossos serviços</p>
								</li>
								<li>
									<a href="#">Cases</a>
									<p>Conheça um pouco mais sobre os nossos projetos</p>
								</li>
								<li>
									<a href="#">Blog</a>
									<p>Fique por dentro de todas as nossas novidades</p>
								</li>
							</ul> -->
						</div>
						<div class="social-icons">
							<p>Compartilhe:</p>
							<ul>
								<li><a href="https://www.instagram.com/goognetsolucao/" target="_blank"><i class="fab fa-instagram"></i></a></li>
								<li><a href="https://www.facebook.com/goognetsolucao/" target="_blank"><i class="fab fa-facebook-square"></i></a></li>
								<li><a href="https://www.linkedin.com/company/goognet/" target="_blank"><i class="fab fa-linkedin"></i></a></li>
								<li><a href="mailto:contato@goognet.com.br"><i class="fas fa-envelope"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</nav>
		</div>
	</header>