<?php 
/**
 * Fany Lab Theme Customizer
 *
 * @package Fancy Lab
 */

function fancy_lab_customizer( $wp_customize ){

	// Copyright Section

	$wp_customize->add_section( 
		'sec_copyright', array(
			'title' 		=> __( 'Copyright Settings', 'fancy-lab'),
			'description' 	=> __( 'Copyright Section', 'fancy-lab' )
		)
	);

			// Field 1 - Copyright Text Box
			$wp_customize->add_setting(
				'set_copyright', array(
					'type' 				=> 'theme_mod',
					'default' 			=> '',
					'sanitize_callback' => 'sanitize_text_field'
				)
			);

			$wp_customize->add_control(
				'set_copyright', array(
					'label' 		=> __( 'Copyright', 'fancy-lab' ),
					'description' 	=> __( 'Please, add your copyright information here', 'fancy-lab' ),
					'section' 		=> 'sec_copyright',
					'type' 			=> 'text'
				)
			);

	/*---------------------------------------------------------------------------------------*/
	// Slider Section

	$wp_customize->add_section( 
		'sec_slider', array(
			'title' 		=> __( 'Slider Settings', 'fancy-lab'),
			'description' 	=> __( 'Slider Section', 'fancy-lab' )
		)
	);

			// Field 1 - Slider Page Number 1
			$wp_customize->add_setting(
				'set_slider_page1', array(
					'type' 				=> 'theme_mod',
					'default' 			=> '',
					'sanitize_callback' => 'absint'
				)
			);

			$wp_customize->add_control(
				'set_slider_page1', array(
					'label' 		=> __( 'Set slider page 1', 'fancy-lab' ),
					'description' 	=> __( 'Set slider page 1', 'fancy-lab' ),
					'section' 		=> 'sec_slider',
					'type' 			=> 'dropdown-pages'
				)
			);

			// Field 2 - Slider Button Text Number 1
			$wp_customize->add_setting(
				'set_slider_button_text1', array(
					'type' 				=> 'theme_mod',
					'default' 			=> '',
					'sanitize_callback' => 'sanitize_text_field'
				)
			);

			$wp_customize->add_control(
				'set_slider_button_text1', array(
					'label' 		=> __( 'Button Text for Page 1', 'fancy-lab' ),
					'description' 	=> __( 'Button Text for Page 1', 'fancy-lab' ),
					'section' 		=> 'sec_slider',
					'type' 			=> 'text'
				)
			);

			// Field 3 - Slider Button URL Number 1
			$wp_customize->add_setting(
				'set_slider_button_url1', array(
					'type' 				=> 'theme_mod',
					'default' 			=> '',
					'sanitize_callback' => 'esc_url_raw'
				)
			);

			$wp_customize->add_control(
				'set_slider_button_url1', array(
					'label' 		=> __( 'URL for Page 1', 'fancy-lab' ),
					'description' 	=> __( 'URL for Page 1', 'fancy-lab' ),
					'section' 		=> 'sec_slider',
					'type' 			=> 'url'
				)
			);

			/*---------------------------------------------------------------------------------------*/

			// Field 4 - Slider Page Number 2
			$wp_customize->add_setting(
				'set_slider_page2', array(
					'type' 				=> 'theme_mod',
					'default' 			=> '',
					'sanitize_callback' => 'absint'
				)
			);

			$wp_customize->add_control(
				'set_slider_page2', array(
					'label' 		=> __( 'Set slider page 2', 'fancy-lab' ),
					'description' 	=> __( 'Set slider page 2', 'fancy-lab' ),
					'section' 		=> 'sec_slider',
					'type' 			=> 'dropdown-pages'
				)
			);

			// Field 5 - Slider Button Text Number 2
			$wp_customize->add_setting(
				'set_slider_button_text2', array(
					'type' 				=> 'theme_mod',
					'default' 			=> '',
					'sanitize_callback' => 'sanitize_text_field'
				)
			);

			$wp_customize->add_control(
				'set_slider_button_text2', array(
					'label' 		=> __( 'Button Text for Page 2', 'fancy-lab' ),
					'description' 	=> __( 'Button Text for Page 2', 'fancy-lab' ),
					'section' 		=> 'sec_slider',
					'type' 			=> 'text'
				)
			);

			// Field 6 - Slider Button URL Number 2
			$wp_customize->add_setting(
				'set_slider_button_url2', array(
					'type' 				=> 'theme_mod',
					'default' 			=> '',
					'sanitize_callback' => 'esc_url_raw'
				)
			);

			$wp_customize->add_control(
				'set_slider_button_url2', array(
					'label' 		=> __( 'URL for Page 2', 'fancy-lab' ),
					'description' 	=> __( 'URL for Page 2', 'fancy-lab' ),
					'section' 		=> 'sec_slider',
					'type' 			=> 'url'
				)
			);

			/*---------------------------------------------------------------------------------------*/

			// Field 7 - Slider Page Number 3
			$wp_customize->add_setting(
				'set_slider_page3', array(
					'type' 				=> 'theme_mod',
					'default' 			=> '',
					'sanitize_callback' => 'absint'
				)
			);

			$wp_customize->add_control(
				'set_slider_page3', array(
					'label' 		=> __( 'Set slider page 3', 'fancy-lab' ),
					'description' 	=> __( 'Set slider page 3', 'fancy-lab' ),
					'section' 		=> 'sec_slider',
					'type' 			=> 'dropdown-pages'
				)
			);

			// Field 8 - Slider Button Text Number 3
			$wp_customize->add_setting(
				'set_slider_button_text3', array(
					'type' 				=> 'theme_mod',
					'default' 			=> '',
					'sanitize_callback' => 'sanitize_text_field'
				)
			);

			$wp_customize->add_control(
				'set_slider_button_text3', array(
					'label' 		=> __( 'Button Text for Page 3', 'fancy-lab' ),
					'description' 	=> __( 'Button Text for Page 3', 'fancy-lab' ),
					'section' 		=> 'sec_slider',
					'type' 			=> 'text'
				)
			);

			// Field 9 - Slider Button URL Number 3
			$wp_customize->add_setting(
				'set_slider_button_url3', array(
					'type' 				=> 'theme_mod',
					'default' 			=> '',
					'sanitize_callback' => 'esc_url_raw'
				)
			);

			$wp_customize->add_control(
				'set_slider_button_url3', array(
					'label' 		=> __( 'URL for Page 3', 'fancy-lab' ),
					'description' 	=> __( 'URL for Page 3', 'fancy-lab' ),
					'section' 		=> 'sec_slider',
					'type' 			=> 'url'
				)
			);


	/*---------------------------------------------------------------------------------------*/
	// Home Page Settings

	$wp_customize->add_section( 
		'sec_home_page', array(
			'title' 		=> __( 'Home Page Products and Blog Settings', 'fancy-lab'),
			'description' 	=> __( 'Home Page Section', 'fancy-lab' )
		)
	);

		// We're gonna show the following options if WooCommerce is active
		if( class_exists( 'WooCommerce' )):

			// Field 1 - Popular Products Title
			$wp_customize->add_setting(
				'set_popular_title', array(
					'type' 				=> 'theme_mod',
					'default' 			=> '',
					'sanitize_callback' => 'sanitize_text_field'
				)
			);

			$wp_customize->add_control(
				'set_popular_title', array(
					'label' 		=> __( 'Popular Products Title', 'fancy-lab' ),
					'description' 	=> __( 'Popular Products Title', 'fancy-lab' ),
					'section' 		=> 'sec_home_page',
					'type' 			=> 'text'
				)
			);

			// Field 2 - Popular Products Limit
			$wp_customize->add_setting(
				'set_popular_max_num', array(
					'type' 				=> 'theme_mod',
					'default' 			=> '',
					'sanitize_callback' => 'absint'
				)
			);

			$wp_customize->add_control(
				'set_popular_max_num', array(
					'label' 		=> __( 'Popular Products Max Number', 'fancy-lab' ),
					'description' 	=> __( 'Popular Products Max Number', 'fancy-lab' ),
					'section' 		=> 'sec_home_page',
					'type' 			=> 'number'
				)
			);

			// Field 3 - Popular Products Columns
			$wp_customize->add_setting(
				'set_popular_max_col', array(
					'type' 				=> 'theme_mod',
					'default' 			=> '',
					'sanitize_callback' => 'absint'
				)
			);

			$wp_customize->add_control(
				'set_popular_max_col', array(
					'label' 		=> __( 'Popular Products Max Columns', 'fancy-lab' ),
					'description' 	=> __( 'Popular Products Max Columns', 'fancy-lab' ),
					'section' 		=> 'sec_home_page',
					'type' 			=> 'number'
				)
			);	


			/*---------------------------------------------------------------------------------------*/
			// Field 4 - New Arrivals Title
			$wp_customize->add_setting(
				'set_new_arrivals_title', array(
					'type' 				=> 'theme_mod',
					'default' 			=> '',
					'sanitize_callback' => 'sanitize_text_field'
				)
			);

			$wp_customize->add_control(
				'set_new_arrivals_title', array(
					'label' 		=> __( 'New Arrivals Title', 'fancy-lab' ),
					'description' 	=> __( 'New Arrivals Title', 'fancy-lab' ),
					'section' 		=> 'sec_home_page',
					'type' 			=> 'text'
				)
			);

			// Field 5 - New Arrivals Limit
			$wp_customize->add_setting(
				'set_new_arrivals_max_num', array(
					'type' 				=> 'theme_mod',
					'default' 			=> '',
					'sanitize_callback' => 'absint'
				)
			);

			$wp_customize->add_control(
				'set_new_arrivals_max_num', array(
					'label' 		=> __( 'New Arrivals Max Number', 'fancy-lab' ),
					'description'	=> __( 'New Arrivals Max Number', 'fancy-lab' ),
					'section' 		=> 'sec_home_page',
					'type' 			=> 'number'
				)
			);

			// Field 6 - New Arrivals Columns
			$wp_customize->add_setting(
				'set_new_arrivals_max_col', array(
					'type' 				=> 'theme_mod',
					'default' 			=> '',
					'sanitize_callback' => 'absint'
				)
			);

			$wp_customize->add_control(
				'set_new_arrivals_max_col', array(
					'label' 		=> __( 'New Arrivals Max Columns', 'fancy-lab' ),
					'description' 	=> __( 'New Arrivals Max Columns', 'fancy-lab' ),
					'section' 		=> 'sec_home_page',
					'type' 			=> 'number'
				)
			);


			/*---------------------------------------------------------------------------------------*/
			// Field 7 - Deal of the Week Title
			$wp_customize->add_setting(
				'set_deal_title', array(
					'type' 				=> 'theme_mod',
					'default' 			=> '',
					'sanitize_callback' => 'sanitize_text_field'
				)
			);

			$wp_customize->add_control(
				'set_deal_title', array(
					'label' 		=> __( 'Deal of the Week Title', 'fancy-lab' ),
					'description' 	=> __( 'Deal of the Week Title', 'fancy-lab' ),
					'section' 		=> 'sec_home_page',
					'type' 			=> 'text'
				)
			);

			// Field 8 - Deal of the Week Checkbox
			$wp_customize->add_setting(
				'set_deal_show', array(
					'type' 				=> 'theme_mod',
					'default' 			=> '',
					'sanitize_callback' => 'fancy_lab_sanitize_checkbox' //See below
				)
			);

			$wp_customize->add_control(
				'set_deal_show', array(
					'label' 	=> __( 'Show Deal of the Week?', 'fancy-lab' ),
					'section' 	=> 'sec_home_page',
					'type' 		=> 'checkbox'			
				)
			);

			// Field 9 - Deal of the Week Product ID
			$wp_customize->add_setting(
			   'set_deal', array(
			      'type'               => 'theme_mod',
			      'default'            => '',
			      'sanitize_callback'  => 'absint',
			      'validate_callback'  => 'fancy_lab_validate_sale_price'
			   )
			);

			// Checks if the selected product has a sale price. If not, displays a warning
			function fancy_lab_validate_sale_price( $validity, $product ) {
			   $sale_validation = get_post_meta( $product, '_sale_price', true );
			   if ( empty( $sale_validation ) ):
			   	  /* translators: 1: product ID number */
			      $validity->add( 'sale_price_not_set', sprintf( __( 'Please Add Sale Price - Product ID: %1$s', 'fancy-lab' ), $product ) );
			   endif;
			   return $validity;
			}

			$wp_customize->add_control(
			   'set_deal', array(
			      'label'        => __( 'Deal of the Week Product ID', 'fancy-lab' ),
			      'description'  => __( 'Product ID to Display', 'fancy-lab' ),
			      'section'      => 'sec_home_page',
			      'type'         => 'number'
			   )
			);

		endif; // End Class Exists WooCommerce

			/*---------------------------------------------------------------------------------------*/
			// Field 10 - Blog Title
			$wp_customize->add_setting(
				'set_blog_title', array(
					'type' 				=> 'theme_mod',
					'default' 			=> '',
					'sanitize_callback' => 'sanitize_text_field'
				)
			);

			$wp_customize->add_control(
				'set_blog_title', array(
					'label' 		=> __( 'Blog Section Title', 'fancy-lab' ),
					'description' 	=> __( 'Blog Section Title', 'fancy-lab' ),
					'section' 		=> 'sec_home_page',
					'type' 			=> 'text'
				)
			);

}
add_action( 'customize_register', 'fancy_lab_customizer' );

function fancy_lab_sanitize_checkbox( $checked ){
    //returns true if checkbox is checked
    return ( ( isset( $checked ) && true == $checked ) ? true : false );
}