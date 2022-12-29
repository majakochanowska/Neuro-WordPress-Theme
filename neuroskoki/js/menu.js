window.addEventListener( 'DOMContentLoaded', function() {
	var menuButton = document.querySelector( '.navbar .navbar-toggler' );
	var menu = document.getElementById( 'bs-navbar-collapse-1' );

	if ( ! menuButton || ! menu ) {
		return;
	}

	menuButton.addEventListener( 'click', function() {
		menu.classList.toggle( 'show' );

		if ( menuButton.getAttribute( 'aria-expanded') === 'false' ) {
			menuButton.setAttribute( 'aria-expanded', 'true' );
		} else {
			menuButton.setAttribute( 'aria-expanded', 'false' );
		}
	})
})

