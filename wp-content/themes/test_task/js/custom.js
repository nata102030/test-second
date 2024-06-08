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


let burger_btn = document.querySelector(".header__burger-btn");
let burger_btn_close = document.querySelector(".header__burger-btn_close");
let mobileMenu = document.querySelector(".mobile-menu");
let burger_menu = document.querySelector(".header__modal");
let menuBody = document.querySelector("body");

burger_btn.addEventListener("click", toggleMenu);
burger_btn_close.addEventListener("click", toggleMenu);

function toggleMenu() {
  burger_menu.classList.toggle("active");
  burger_btn.classList.toggle("active");
  mobileMenu.classList.toggle("active");
  menuBody.classList.toggle("_active1");
}


//news slider
const swiperNewsArray = document.querySelectorAll('.news-slider__slider');
swiperNewsArray.forEach((slider) => {
	const swiperCards = new Swiper(slider, {
		loop: false,
		spaceBetween: 16,
		slidesPerView: 1.1,
		navigation: {
			nextEl: slider.closest('.news-slider').querySelector('.swiper-arrow-next'),
			prevEl: slider.closest('.news-slider').querySelector('.swiper-arrow-prev'),
		},
		scrollbar: {
			el: slider.closest('.news-slider').querySelector('.swiper-scrollbar'),
			//el: ".swiper-scrollbar",
			draggable: true,
		},
		breakpoints: {
			600: {
				slidesPerView: 2,
			},
			1024: {
				spaceBetween: 24,
				//slidesPerView: 2.9,
				slidesPerView: 3,
			},
		}
	});
});
