const mobileMenu = (function () {
	let hamburger = document.querySelector('#navbar .navbar__hamburger');
	let menu = document.querySelector('#navbar .navbar__menu');
	let navbarItem = document.querySelectorAll('#navbar .navbar__link');

	hamburger.addEventListener('click', function () {
		if (menu.classList.contains('is-open')) {
			menu.classList.remove('is-open');
			menu.classList.add('is-closed');
			document.body.style.overflow = "hidden";
		} else {
			menu.classList.add('is-open');
			menu.classList.remove('is-closed');
			document.body.style.overflow = "initial";
		}
	});

	for (var i = 0; i < navbarItem.length; i++) {
		navbarItem[i].addEventListener('click', function () {
			//menu.classList.remove('is-open');
			if (menu.classList.contains('is-open')) {
				menu.classList.remove('is-open');
			}
			menu.classList.add('is-closed');
			document.body.style.overflow = "initial";
		});
	}

})();

const navbar = (function () {
	let widthRes = window.innerWidth;
	const navbar = document.getElementById('navbar');
	const navbarFixedTrigger = 120;
	toggleNavbar();

	function toggleNavbar() {
		let scrollPos = window.scrollY;
		window.onscroll = function () {
			if (widthRes < 1200) {
				if (window.scrollY > 0) {
					if (window.scrollY > scrollPos) {
						hideNavbar();
					} else if (window.scrollY < scrollPos) {
						showNavbar();
					}
				}
			}
			//            if (widthRes >= 1200) {
			//                if (window.scrollY >= navbarFixedTrigger && !navbar.classList.contains('is-fixed')) {
			//                    navbar.classList.add('is-fixed')
			//                }
			//                if (window.scrollY < navbarFixedTrigger && navbar.classList.contains('is-fixed')) {
			//                    navbar.classList.remove('is-fixed')
			//                }
			//            }
			scrollPos = window.scrollY;
		};
	}

	function showNavbar() {
		if (navbar.classList.contains('hide')) {
			navbar.classList.remove('hide');
		}
		navbar.classList.add('show');
	}

	function hideNavbar() {
		if (navbar.classList.contains('show')) {
			navbar.classList.remove('show');
		}
		navbar.classList.add('hide');
	}

	window.addEventListener('resize', function () {
		widthRes = window.innerWidth;
		toggleNavbar();
	});
})();
