/**
 * Live-update changed settings in real time in the Customizer preview.
 */

( function( $ ) {
	api = wp.customize;

	api( 'intro_title', function( value ) {
		value.bind( function( to ) {
			$('#office-intro .title').text( to );
		} );
	} );

	api( 'intro_detail', function( value ) {
		value.bind( function( to ) {
			$('#office-intro .detail').text( to );
		} );
	} );

} )( jQuery );