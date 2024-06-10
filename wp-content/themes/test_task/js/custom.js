// JavaScript Document

function preloader() {
	try {
		document.body.onload = function () {
			setTimeout(() => {
				AOS.init();
			}, 500);
		};
	} catch {
		console.error();
	}
}
preloader();


// burger menu
const iconMenu = document.querySelector('.site-header__burger');
const menuBody = document.querySelector('body');
const burger_menu = document.querySelector(".header__modal");
if (iconMenu) {
	iconMenu.addEventListener('click', function (e) {
		iconMenu.classList.toggle('_active');
        menuBody.classList.toggle('_active1');
        burger_menu.classList.toggle("active");

	});
}


// slider
const swiperNewsArray = document.querySelectorAll('.slider__slider');
swiperNewsArray.forEach((slider) => {
	const swiperCards = new Swiper(slider, {
		loop: false,
		spaceBetween: 16,
		slidesPerView: 1,
		navigation: {
			nextEl: slider.closest('.slider').querySelector('.swiper-arrow-next'),
			prevEl: slider.closest('.slider').querySelector('.swiper-arrow-prev'),
		},
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
          },
		
	});
});

