/**
 *  Project: webpub-store
 *  File: flyout-menu.js
 *  Created: 10:58 AM, 12/24/24
 *  Author: Mai Tran Tuan Kiet
 *  "Family is where life begins and love never ends."
 */

import $ from 'jquery';

function closeFlyoutContent(trigger, content) {
	content.removeClass('opacity-100 translate-y-0')
				 .addClass('opacity-0 translate-y-3 invisible');
	trigger.removeClass('text-brand-700').addClass('text-gray-900');
}

function openFlyoutContent(trigger, content) {
	content.removeClass('invisible opacity-0 translate-y-3')
				 .addClass('opacity-100 translate-y-0');
	trigger.addClass('text-brand-700').removeClass('text-gray-900');
}

$(document).ready(function () {
	const flyouts = $('.flyout');
	
	flyouts.each(function () {
		const flyout = $(this);
		const flyoutTrigger = flyout.find('.flyout-trigger');
		const flyoutContent = flyout.find('.flyout-content');
		
		flyoutTrigger.off('click').on('click', function () {
			// close other flyouts
			flyouts.each(function () {
				const otherFlyout = $(this);
				if (otherFlyout[0] !== flyout[0]) {
					const otherFlyoutContent = otherFlyout.find('.flyout-content');
					closeFlyoutContent(otherFlyout.find('.flyout-trigger'), otherFlyoutContent);
				}
			});
			
			if (flyoutContent.hasClass('invisible')) {
				openFlyoutContent(flyoutTrigger, flyoutContent);
			} else {
				closeFlyoutContent(flyoutTrigger, flyoutContent);
			}
		});
	});
	
	// if click outside flyout, close all flyouts
	$(document).off('click').on('click', function (e) {
		if (!$(e.target).closest('.flyout').length) {
			flyouts.each(function () {
				const flyout = $(this);
				const flyoutContent = flyout.find('.flyout-content');
				closeFlyoutContent(flyout.find('.flyout-trigger'), flyoutContent);
			});
		}
	});
	
	const helperBg = $('.helper-bg');
	
	$('.mobile-menu-close').off('click').on('click', function () {
		$('.mobile-menu').addClass('translate-x-[700px]');
		helperBg.addClass('invisible backdrop-blur-0').removeClass('backdrop-blur-sm');
	});
	
	$('.mobile-menu-open').on('click', function () {
		$('.mobile-menu').toggleClass('translate-x-[700px]');
		helperBg.removeClass('invisible backdrop-blur-0').addClass('backdrop-blur-sm');
	});
	
	helperBg.on('click', function () {
		$('.mobile-menu').addClass('translate-x-[700px]');
		helperBg.addClass('invisible backdrop-blur-0').removeClass('backdrop-blur-sm');
	});
});
