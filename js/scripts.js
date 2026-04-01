/* Функция "Уменьшало" */
onscroll = function prilipalo() {
    var prokrutka = window.pageYOffset;

    var logo = document.getElementById('navbar-brand');
    var topMenu = document.getElementById('top-menu');

    if (!logo || !topMenu) return;

    if (prokrutka < 100) {
        logo.style.height = '60px';
        topMenu.classList.remove('header--small');
    } else {
        logo.style.height = '50px';
        topMenu.classList.add('header--small');
    }
};

/* Messengers 2 */
function clickMessengers2Button() {
	var mes1Right = document.getElementById('messenger-1').style.right;
	var mes2Right = document.getElementById('messenger-2').style.right;
	var mes3Right = document.getElementById('messenger-3').style.right;
	if ( mes1Right == "0px" || mes1Right == 0 ) {
		document.getElementById('messenger-1').style.right = "200px";
		document.getElementById('messenger-2').style.right = "140px";
		document.getElementById('messenger-3').style.right = "80px";
		document.getElementById('messengers-2-button').style.background = "url(images/icons/close-icon.png) center";
		document.getElementById('messengers-2-button').style.backgroundSize = "contain";
	} else {
		document.getElementById('messenger-1').style.right = "0px";
		document.getElementById('messenger-2').style.right = "0px";
		document.getElementById('messenger-3').style.right = "0px";
		document.getElementById('messengers-2-button').style.background = "url(images/icons/messenger.png) center";
		document.getElementById('messengers-2-button').style.backgroundSize = "contain";
	}
}
/* End Messengers 2 */

/* Section with parallax */
$(window).scroll(function(e){
	parallaxScroll();
});

/* Section with parallax */
function parallaxScroll(){
	var scrolled = $(window).scrollTop();
	//var block = $('.header-parallax').offset().top; // Расстояние от начала экрана до блока, где будем начинать параллакс.
	/* Section with parallax */
	$('.parallax').css('top',(800-(scrolled*.5))+'px');
	
	/* Смещаем изображение в параллаксе по вертикале в зависимости от устройства */
	var screenWidth = screen.width;
	if ( screenWidth < 750 ) {
		$('.parallax-2').css('top',(50-(scrolled*.5))+'px');
		$('.header-parallax').css('top',(0-(scrolled*.5))+'px'); // Home page
		$('.header-about-parallax').css('top',(-100-(scrolled*.5))+'px'); // About page
	} else {
		$('.parallax-2').css('top',(-150-(scrolled*.5))+'px');
		$('.header-parallax').css('top',(-50-(scrolled*.5))+'px'); // About page
		$('.header-about-parallax').css('top',(-200-(scrolled*.5))+'px'); // About page
	}
}