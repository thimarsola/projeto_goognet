$('.menu').click(function () {
	$('.menu-site').toggleClass('menu-ativo');
});

$('.menu-site').click(function(){
	$('.menu-site').removeClass('menu-ativo');
});