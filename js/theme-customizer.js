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


	api( 'PostZone1_post1_detail', function( value ) {
		value.bind( function( to ) {
			$('#PostZone1 p.post1').text( to );
		} );
	} );

	api( 'PostZone2_post1_title', function( value ) {
		value.bind( function( to ) {
			$('#PostZone2 h3.post1').text( to );
		} );
	} );


	api( 'PostZone2_post1_date', function( value ) {
		value.bind( function( to ) {
			$('#PostZone2 span.post1').text( to );
		} );
	} );

	api( 'PostZone2_post2_title', function( value ) {
		value.bind( function( to ) {
			$('#PostZone2 h3.post2').text( to );
		} );
	} );


	api( 'PostZone2_post2_date', function( value ) {
		value.bind( function( to ) {
			$('#PostZone2 span.post2').text( to );
		} );
	} );

	api( 'PostZone2_post3_title', function( value ) {
		value.bind( function( to ) {
			$('#PostZone2 h3.post3').text( to );
		} );
	} );


	api( 'PostZone2_post3_date', function( value ) {
		value.bind( function( to ) {
			$('#PostZone2 span.post3').text( to );
		} );
	} );

	api( 'PostZone2_post4_title', function( value ) {
		value.bind( function( to ) {
			$('#PostZone2 h3.post4').text( to );
		} );
	} );


	api( 'PostZone2_post4_date', function( value ) {
		value.bind( function( to ) {
			$('#PostZone2 span.post4').text( to );
		} );
	} );
	api( 'PostZone2_post5_title', function( value ) {
		value.bind( function( to ) {
			$('#PostZone2 h3.post5').text( to );
		} );
	} );


	api( 'PostZone2_post5_date', function( value ) {
		value.bind( function( to ) {
			$('#PostZone2 span.post5').text( to );
		} );
	} );

	api( 'PostZone2_post6_title', function( value ) {
		value.bind( function( to ) {
			$('#PostZone2 h3.post6').text( to );
		} );
	} );


	api( 'PostZone2_post6_date', function( value ) {
		value.bind( function( to ) {
			$('#PostZone2 span.post6').text( to );
		} );
	} );

	api( 'PostZone1_post2_detail', function( value ) {
		value.bind( function( to ) {
			$('#PostZone1 p.post2').text( to );
		} );
	} );


	api( 'PostZone1_post3_detail', function( value ) {
		value.bind( function( to ) {
			$('#PostZone1 p.post3').text( to );
		} );
	} );

	api( 'PostZone3_title', function( value ) {
		value.bind( function( to ) {
			$('#PostZone3 .title').text( to );
		} );
	} );

	api( 'PostZone3_post1_title', function( value ) {
		value.bind( function( to ) {
			$('#PostZone3 h3.post1').text( to );
		} );
	} );

	api( 'PostZone3_post1_detail', function( value ) {
		value.bind( function( to ) {
			$('#PostZone3 p.post1').text( to );
		} );
	} );

	api( 'PostZone3_post2_title', function( value ) {
		value.bind( function( to ) {
			$('#PostZone3 h3.post2').text( to );
		} );
	} );

	api( 'PostZone3_post2_detail', function( value ) {
		value.bind( function( to ) {
			$('#PostZone3 p.post2').text( to );
		} );
	} );

	api( 'PostZone3_post3_title', function( value ) {
		value.bind( function( to ) {
			$('#PostZone3 h3.post3').text( to );
		} );
	} );

	api( 'PostZone3_post3_detail', function( value ) {
		value.bind( function( to ) {
			$('#PostZone3 p.post3').text( to );
		} );
	} );

	api( 'PostZone3_post4_title', function( value ) {
		value.bind( function( to ) {
			$('#PostZone3 h3.post4').text( to );
		} );
	} );

	api( 'PostZone3_post4_detail', function( value ) {
		value.bind( function( to ) {
			$('#PostZone3 p.post4').text( to );
		} );
	} );
} )( jQuery );
