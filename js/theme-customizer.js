/**
 * Live-update changed settings in real time in the Customizer preview.
 */

( function( $ ) {
	api = wp.customize;

	api( 'office_title', function( value ) {
		value.bind( function( to ) {
			$('#office .title').text( to );
		} );
	} );

	api( 'office_detail', function( value ) {
		value.bind( function( to ) {
			$('#office .detail').text( to );
		} );
	} );

	//PostZone1
	api( 'PostZone1_post1_title', function( value ) {
		value.bind( function( to ) {
			$('#PostZone1 .post1 h3').text( to );
		} );
	} );

	api( 'PostZone1_post1_detail', function( value ) {
		value.bind( function( to ) {
			$('#PostZone1 .post1 p').text( to );
		} );
	} );

	api( 'PostZone1_post2_title', function( value ) {
		value.bind( function( to ) {
			$('#PostZone1 .post2 h3').text( to );
		} );
	} );

	api( 'PostZone1_post2_detail', function( value ) {
		value.bind( function( to ) {
			$('#PostZone1 .post2 p').text( to );
		} );
	} );

	api( 'PostZone1_post3_title', function( value ) {
		value.bind( function( to ) {
			$('#PostZone1 .post3 h3').text( to );
		} );
	} );

	api( 'PostZone1_post3_detail', function( value ) {
		value.bind( function( to ) {
			$('#PostZone1 .post3 p').text( to );
		} );
	} );

	//PostZone2
	api( 'PostZone2_post1_title', function( value ) {
		value.bind( function( to ) {
			$('#PostZone2 .post1 h3').text( to );
		} );
	} );

	api( 'PostZone2_post1_date', function( value ) {
		value.bind(function (to) {
			$('#PostZone2 .post1 .tzmeta span').text(to);
		});
	} );

	api( 'PostZone2_post2_title', function( value ) {
		value.bind( function( to ) {
			$('#PostZone2 .post2 h3').text( to );
		} );
	} );

	api( 'PostZone2_post2_date', function( value ) {
		value.bind( function( to ) {
			$('#PostZone2 .post2 .tzmeta span').text( to );
		} );
	} );

	api( 'PostZone2_post3_title', function( value ) {
		value.bind( function( to ) {
			$('#PostZone2 .post3 h3').text( to );
		} );
	} );

	api( 'PostZone2_post3_date', function( value ) {
		value.bind( function( to ) {
			$('#PostZone2 .post3 .tzmeta span').text( to );
		} );
	} );

	api( 'PostZone2_post4_title', function( value ) {
		value.bind( function( to ) {
			$('#PostZone2 .post4 h3').text( to );
		} );
	} );

	api( 'PostZone2_post4_date', function( value ) {
		value.bind( function( to ) {
			$('#PostZone2 .post4 .tzmeta span').text( to );
		} );
	} );

	api( 'PostZone2_post5_title', function( value ) {
		value.bind( function( to ) {
			$('#PostZone2 .post5 h3').text( to );
		} );
	} );

	api( 'PostZone2_post5_date', function( value ) {
		value.bind( function( to ) {
			$('#PostZone2 .post5 .tzmeta span').text( to );
		} );
	} );

	api( 'PostZone2_post6_title', function( value ) {
		value.bind( function( to ) {
			$('#PostZone2 .post6 h3').text( to );
		} );
	} );

	api( 'PostZone2_post6_date', function( value ) {
		value.bind( function( to ) {
			$('#PostZone2 .post6 .tzmeta span').text( to );
		} );
	} );

	//PostZone3
	api( 'PostZone3_Title', function( value ) {
		value.bind( function( to ) {
			$('#PostZone3 .title').text( to );
		} );
	} );

	api( 'PostZone3_post1_title', function( value ) {
		value.bind( function( to ) {
			$('#PostZone3 .post1 h4').text( to );
		} );
	} );

	api( 'PostZone3_post1_detail', function( value ) {
		value.bind( function( to ) {
			$('#PostZone3 .post1 p').text( to );
		} );
	} );

	api( 'PostZone3_post2_title', function( value ) {
		value.bind( function( to ) {
			$('#PostZone3 .post2 h4').text( to );
		} );
	} );

	api( 'PostZone3_post2_detail', function( value ) {
		value.bind( function( to ) {
			$('#PostZone3 .post2 p').text( to );
		} );
	} );

	api( 'PostZone3_post3_title', function( value ) {
		value.bind( function( to ) {
			$('#PostZone3 .post3 h4').text( to );
		} );
	} );

	api( 'PostZone3_post3_detail', function( value ) {
		value.bind( function( to ) {
			$('#PostZone3 .post3 p').text( to );
		} );
	} );

	api( 'PostZone3_post4_title', function( value ) {
		value.bind( function( to ) {
			$('#PostZone3 .post4 h4').text( to );
		} );
	} );

	api( 'PostZone3_post4_detail', function( value ) {
		value.bind( function( to ) {
			$('#PostZone3 .post4 p').text( to );
		} );
	} );

	//Footer Social
	api( 'Footer_social_one', function( value ) {
		value.bind( function( to ) {
			$('.dl-footer p.one').text( to );
		} );
	} );

	api( 'Footer_social_two', function( value ) {
		value.bind( function( to ) {
			$('.dl-footer p.two').text( to );
		} );
	} );

	api( 'Footer_social_three', function( value ) {
		value.bind( function( to ) {
			$('.dl-footer p.three').text( to );
		} );
	} );

	api( 'Footer_social_four', function( value ) {
		value.bind( function( to ) {
			$('.dl-footer p.four').text( to );
		} );
	} );

	api( 'Footer_social_five', function( value ) {
		value.bind( function( to ) {
			$('.dl-footer p.five').text( to );
		} );
	} );

	api( 'Footer_social_six', function( value ) {
		value.bind( function( to ) {
			$('.dl-footer p.six').text( to );
		} );
	} );
} )( jQuery );
