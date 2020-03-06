const formdisplay = (function() {
	let form = document.getElementById('form');
	let button = document.getElementById('contact__button');

		button.addEventListener('click', function(e) {
			if (form.classList.contains('is-open')) {
				form.classList.remove('is-open');
			} else {
				form.classList.add('is-open');
				//let scrollPos = window.scrollY;
				//scrollPos += 80;
			}
		});
})();
