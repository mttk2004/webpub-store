/**
 *  Project: webpub-store
 *  File: carousel.js
 *  Created: 4:35 PM, 12/26/24
 *  Author: Mai Tran Tuan Kiet
 *  "Family is where life begins and love never ends."
 */

import $ from 'jquery';

$(document).ready(function() {
	const $carousel = $('.carousel');
	
	$carousel.each(function() {
		const $carousel = $(this);
		const $carouselPrev = $carousel.find('.carousel-prev');
		const $carouselNext = $carousel.find('.carousel-next');
		const $carouselInner = $carousel.find('.carousel-inner');
		const $slides = $carouselInner.children();
		const slideCount = $slides.length;
		const slideWidth = $slides.first().outerWidth(true);
		const visibleSlides = Math.floor($carousel.width() / (slideWidth + 10));
		let currentIndex = 0;
		
		// Clone the first few slides and append them to the end
		$slides.slice(0, visibleSlides).clone().appendTo($carouselInner);
		
		// Update the width of the carousel inner container
		$carouselInner.css({
												 width: (slideCount + visibleSlides) * slideWidth + (slideCount + visibleSlides - 1) * 10 + 'px',
											 });
		
		// Position the slides
		$carouselInner.children().each(function(index) {
			$(this).css({
										left: (index * slideWidth) + (index * 10) + 'px',
										top: 0,
									});
		});
		
		function updateCarousel() {
			const offset = -currentIndex * (slideWidth + 10);
			$carouselInner.css('transform', `translateX(${offset}px)`);
			
			// If we have reached the end of the original slides, reset to the start
			if (currentIndex >= slideCount) {
				setTimeout(() => {
					$carouselInner.css('transition', 'none');
					currentIndex = 0;
					$carouselInner.css('transform', `translateX(0px)`);
					setTimeout(() => {
						$carouselInner.css('transition', 'transform 0.5s ease-in-out');
					}, 50);
				}, 500);
			}
		}
		
		$carouselNext.click(function() {
			currentIndex++;
			updateCarousel();
		});
		
		$carouselPrev.click(function() {
			if (currentIndex > 0) {
				currentIndex--;
			} else {
				currentIndex = slideCount - visibleSlides;
			}
			updateCarousel();
		});
	});
});
