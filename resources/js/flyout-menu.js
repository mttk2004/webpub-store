/**
 *  Project: webpub-store
 *  File: flyout-menu.js
 *  Created: 10:58 AM, 12/24/24
 *  Author: Mai Tran Tuan Kiet
 *  "Family is where life begins and love never ends."
 */

import $ from 'jquery';


$(document).ready(function () {
	$('.flyout-toggle').on('click', function (event) {
		event.stopPropagation(); // Prevent the click event from bubbling up to the document
		const $menu = $(this).next('.flyout .absolute');
		$('.flyout .absolute').not($menu).addClass('hidden'); // Hide all other menus
		$menu.toggleClass('hidden'); // Toggle the clicked menu
		if ($menu.hasClass('hidden')) {
			$(this).removeClass('text-brand-700'); // Remove 'text-brand-700' class if menu is hidden
		}
		else {
			$('.flyout-toggle').removeClass('text-brand-700'); // Remove 'text-brand-700' class from all
																												 // toggles
			$(this).addClass('text-brand-700'); // Add 'text-brand-700' class to the clicked toggle
		}
	});
	
	$(document).on('click', function (event) {
		if (!$(event.target).closest('.flyout').length) {
			$('.flyout .absolute').addClass('hidden');
			$('.flyout-toggle').removeClass('text-brand-700'); // Remove 'text-brand-700' class from all
																												 // toggles
		}
	});
	
	const helperBg = $('.helper-bg');
	
	$('.mobile-menu-close').on('click', function () {
		$('.mobile-menu').addClass('translate-x-[700px]');
		helperBg.addClass('hidden');
	})
	
	$('.mobile-menu-open').on('click', function () {
		$('.mobile-menu').toggleClass('translate-x-[700px]');
		helperBg.removeClass('hidden');
	});
	
	helperBg.on('click', function () {
		$('.mobile-menu').addClass('translate-x-[700px]');
		helperBg.addClass('hidden');
	});
});
