jQuery(document).ready(function($){

	function toggleSearch( btn, searchbar ){
		if ( searchbar.hasClass( 'expand' ) ){
			btn.attr( 'aria-pressed', false );
			searchbar.removeClass( 'expand' );
			searchbar.attr( 'aria-expanded', true );
			searchbar.slideUp( 200 );
			searchbar.children().blur()
		} else {
			btn.attr( 'aria-pressed', true );
			searchbar.attr( 'aria-expanded', true );
			searchbar.addClass( 'expand' );
			searchbar.slideDown( 200 );
			searchbar.children().focus()
		}
	}

	$( '.nav-search-control .search-toggle' ).click(function(e){
		toggleSearch( $(this), $('.nav-search form') );
	})
});