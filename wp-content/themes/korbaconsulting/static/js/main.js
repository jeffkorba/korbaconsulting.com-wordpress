$('header .menu-toggle').click(function () {

	$('aside').toggleClass('active');
});

$('aside').click(function () {

	$('aside').removeClass('active');
});
