/**
 *  Project: webpub-store
 *  File: modal-search.js
 *  Created: 8:14 PM, 12/24/24
 *  Author: Mai Tran Tuan Kiet
 *  "Family is where life begins and love never ends."
 */


import $ from 'jquery';


$(document).ready(function () {
	const searchModal = $('.modal-search');
	const inputToggle = $('#modal-search-open');
	const closeButton = $('#modal-search-close');
	const modalBg = $('#modal-bg');
	const modalPanel = $('#modal-panel');
	
	const open = () => {
		searchModal.toggleClass('invisible');
		modalBg.removeClass('opacity-0 backdrop-blur-0').addClass('opacity-100 backdrop-blur-[6px]');
		modalPanel.removeClass('translate-y-8 scale-75 opacity-0')
							.addClass('translate-y-0 scale-100 opacity-100');
		inputToggle.blur();
	}
	
	const close = () => {
		modalPanel.removeClass('translate-y-0 scale-100 opacity-100')
							.addClass('translate-y-8 scale-75 opacity-0');
		modalBg.removeClass('opacity-100 backdrop-blur-[6px]').addClass('opacity-0 backdrop-blur-0');
		searchModal.toggleClass('invisible');
		inputToggle.blur();
	}
	
	// open modal and unfocus the input
	inputToggle.off('click input').on('click input', function () {
		open();
		
		modalBg.off('click').on('click', function (event) {
			event.stopPropagation();
			if ($(event.target).closest('#modal-panel').length) return;
			
			close();
		});
	});
	
	// if user typing on the input, remove the value and unfocus the input
	inputToggle.on('input', function () {
		$(this).val('');
		$(this).blur();
	});
	
	// or use Ctrl + K to toggle the search modal
	$(document).on('keydown', function (event) {
		if (event.altKey && event.key === 'k') {
			searchModal.hasClass('invisible') ? open() : close();
			
			modalBg.off('click').on('click', function (event) {
				event.stopPropagation();
				if ($(event.target).closest('#modal-panel').length) return;
				
				close();
			});
		}
	});
	
	// close modal and unfocus the input
	closeButton.off('click').on('click', function (event) {
		event.stopPropagation();
		close()
	});
});
