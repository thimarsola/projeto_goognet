$('.menu').click(function () {
	$('.menu-site').toggleClass('menu-ativo');
	$('.conteudo-header').addClass('nav-off');
});

$('.menu-site').click(function(){
	$('.menu-site').removeClass('menu-ativo');
	$('.conteudo-header').removeClass('nav-off');
});