/**
 * customizer.js
 *
 * Theme Customizer enhancements for a better user experience.
 *
 * Contains handlers to make Theme Customizer preview reload changes asynchronously.
 */



( function( $ ) {


	wp.customize( 'intro_title', function( value ) {
		console.log("adaf");
		value.bind( function( to ) {
			jQuery('#office-intro .title').text( to );
		} );
	} );

} )( jQuery );
