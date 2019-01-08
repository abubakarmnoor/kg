var contactForm = $('.contact_form_container');
contactForm.on('click', '.close_btn', function(e) {
	contactForm.fadeOut();
	return false;
});
