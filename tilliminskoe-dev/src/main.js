import './styles/all.scss'
import gsap from "gsap"
import ScrollTrigger from "gsap/ScrollTrigger"
import TweenMax from "gsap/all"
import { Power2, Elastic, CSSPlugin, Expo } from "gsap/all"
import Swiper from 'swiper/bundle'
import 'swiper/css'

gsap.registerPlugin(ScrollTrigger, TweenMax);

TweenMax.to('.overlay-logo', 1.5, {
	delay: 0,
	y: 0,
	ease: Expo.easeInOut
})

TweenMax.to('.overlay-logo', 1.5, {
	delay: 2,
	y: -100,
	ease: Expo.easeInOut
})

TweenMax.to('.firts', 1.5, {
	delay: .7,
	height: "0%",
	ease: Expo.easeInOut
})

TweenMax.to('.second', 1.5, {
	delay: .9,
	height: "0%",
	ease: Expo.easeInOut
})

TweenMax.to('.third', 1.5, {
	delay: 1.1,
	height: "0%",
	ease: Expo.easeInOut
})


TweenMax.to('.four', 1.5, {
	delay: 1.3,
	height: "0%",
	ease: Expo.easeInOut
})

TweenMax.to('.five', 1.5, {
	delay: 1.5,
	height: "0%",
	ease: Expo.easeInOut
})


TweenMax.to('.six', 1.5, {
	delay: 1.7,
	height: "0%",
	ease: Expo.easeInOut
})



const newsSlider = new Swiper('.news__block-slider', {
	speed: 600,
	mousewheel: true,
	slidesPerView: 3,
	spaceBetween: 0,
	breakpoints: {
		0: {
			slidesPerView: 1.5,
			spaceBetween: 20,
		},
		680: {
			slidesPerView: 3,
			spaceBetween: 20,
			autoplay: false
		}
	},
	navigation: {
		nextEl: '.news__arrow-next',
		prevEl: '.news__arrow-prev',
	},
});


const homeSlider = new Swiper('.home__block-slider', {
	speed: 600,
	mousewheel: true,
	slidesPerView: 3,
	spaceBetween: 0,
	autoplay: {
		delay: 5000,
	},
	breakpoints: {
		0: {
			slidesPerView: 1,
			spaceBetween: 20,
		},
		720: {
			slidesPerView: 1,
			spaceBetween: 60,
			autoplay: false
		}
	},
	grabCursor: true,
	effect: "creative",
	creativeEffect: {
	  prev: {
		shadow: true,
		translate: [0, 0, -400],
	  },
	  next: {
		translate: ["100%", 0, 0],
	  },
	},
	pagination: {
		el: ".swiper-pagination",
	  },
});