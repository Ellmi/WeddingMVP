/**
 * Live-update changed settings in real time in the Customizer preview.
 */

( function( $ ) {
	api = wp.customize;

	api( 'office_intro_title', function( value ) {
		value.bind( function( to ) {
			$('#office-intro .title').text( to );
		} );
	} );

	api( 'office_intro_detail', function( value ) {
		value.bind( function( to ) {
			$('#office-intro .detail').text( to );
		} );
	} );

	api( 'PostZone1_post1_title', function( value ) {
		value.bind( function( to ) {
			$('#PostZone1 h3.post1').text( to );
		} );
	} );

	api( 'PostZone1_post2_title', function( value ) {
		value.bind( function( to ) {
			$('#PostZone1 h3.post2').text( to );
		} );
	} );

	api( 'PostZone1_post2_title', function( value ) {
		value.bind( function( to ) {
			$('#PostZone1 h3.post2').text( to );
		} );
	} );
} )( jQuery );
