/* Функция "Уменьшало" */
onscroll = function prilipalo() {
	var prokrutka = window.pageYOffset;
	//document.getElementById('menu-1').innerHTML=prokrutka;
	if ( prokrutka < 100 ) {
		//document.getElementById('nav').style.position = 'inherit';
		document.getElementById('navbar-brand').style.height = '60px';
		//document.getElementById('navbar-brand').style.position = 'fixed';
	} else {
		//document.getElementById('menu-1').style.top = '0';
		document.getElementById('navbar-brand').style.height = '50px';
	}
}

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
	} else {
		$('.parallax-2').css('top',(-150-(scrolled*.5))+'px');
	}
}