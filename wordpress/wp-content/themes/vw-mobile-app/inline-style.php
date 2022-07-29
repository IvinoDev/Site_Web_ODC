<?php
	
	/*---------------------------First highlight color-------------------*/

	$vw_mobile_app_first_color = get_theme_mod('vw_mobile_app_first_color');

	$vw_mobile_app_custom_css = '';

	if($vw_mobile_app_first_color != false){
		$vw_mobile_app_custom_css .='.error-btn a:hover, a.content-bttn:hover, .pagination .current, .pagination a:hover, .woocommerce #respond input#submit:hover, .woocommerce a.button:hover, .woocommerce button.button:hover, .woocommerce input.button:hover, .woocommerce #respond input#submit.alt:hover, .woocommerce a.button.alt:hover, .woocommerce button.button.alt:hover, .woocommerce input.button.alt:hover, .woocommerce span.onsale, #sidebar a.custom_read_more:hover, #footer a.custom_read_more:hover{';
			$vw_mobile_app_custom_css .='background-color: '.esc_html($vw_mobile_app_first_color).';';
		$vw_mobile_app_custom_css .='}';
	}
	if($vw_mobile_app_first_color != false){
		$vw_mobile_app_custom_css .='a, #footer h3, .post-main-box:hover h3 a, .post-navigation a:hover .post-title, .post-navigation a:focus .post-title, .entry-content a, .post-main-box:hover h2 a, #footer li a:hover{';
			$vw_mobile_app_custom_css .='color: '.esc_html($vw_mobile_app_first_color).';';
		$vw_mobile_app_custom_css .='}';
	}
	if($vw_mobile_app_first_color != false){
		$vw_mobile_app_custom_css .='{';
			$vw_mobile_app_custom_css .='border-color: '.esc_html($vw_mobile_app_first_color).';';
		$vw_mobile_app_custom_css .='}';
	}
	if($vw_mobile_app_first_color != false){
		$vw_mobile_app_custom_css .='#about-us hr, .post-info hr{';
			$vw_mobile_app_custom_css .='border-top-color: '.esc_html($vw_mobile_app_first_color).';';
		$vw_mobile_app_custom_css .='}';
	}

	/*---------------------------Second highlight color-------------------*/

	$vw_mobile_app_second_color = get_theme_mod('vw_mobile_app_second_color');

	if($vw_mobile_app_second_color != false){
		$vw_mobile_app_custom_css .='.pagination span, .pagination a, #comments a.comment-reply-link, .toggle-nav i{';
			$vw_mobile_app_custom_css .='background-color: '.esc_html($vw_mobile_app_second_color).';';
		$vw_mobile_app_custom_css .='}';
	}
	if($vw_mobile_app_second_color != false){
		$vw_mobile_app_custom_css .='#sidebar .custom-social-icons i:hover, #footer .custom-social-icons i:hover, .main-navigation ul.sub-menu a:hover, .page-template-custom-home-page .main-navigation a:hover, .entry-content a, .sidebar .textwidget p a, .textwidget p a, #comments p a, .slider .inner_carousel p a{';
			$vw_mobile_app_custom_css .='color: '.esc_html($vw_mobile_app_second_color).';';
		$vw_mobile_app_custom_css .='}';
	}
	if($vw_mobile_app_second_color != false){
		$vw_mobile_app_custom_css .='.main-navigation ul ul{';
			$vw_mobile_app_custom_css .='border-top-color: '.esc_html($vw_mobile_app_second_color).';';
		$vw_mobile_app_custom_css .='}';
	}
	if($vw_mobile_app_second_color != false){
		$vw_mobile_app_custom_css .='.main-navigation ul ul{';
			$vw_mobile_app_custom_css .='border-bottom-color: '.esc_html($vw_mobile_app_second_color).';';
		$vw_mobile_app_custom_css .='}';
	}

	if($vw_mobile_app_second_color != false || $vw_mobile_app_first_color != false){
		$vw_mobile_app_custom_css .='.scrollup i, #sidebar .custom-social-icons i, #footer .custom-social-icons i, #footer .tagcloud a:hover, input[type="submit"], #footer-2, #sidebar input[type="submit"], #sidebar .tagcloud a:hover, .error-btn a, a.content-bttn, #header, #comments input[type="submit"].submit, nav.woocommerce-MyAccount-navigation ul li, .woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, #sidebar .widget_price_filter .ui-slider .ui-slider-range, #sidebar .widget_price_filter .ui-slider .ui-slider-handle, #sidebar .woocommerce-product-search button, #footer .widget_price_filter .ui-slider .ui-slider-range, #footer .widget_price_filter .ui-slider .ui-slider-handle, #footer .woocommerce-product-search button, #footer a.custom_read_more, #sidebar a.custom_read_more, #header .header-fixed , .page-template-custom-home-page #header .header-fixed{
		background: linear-gradient(to right, '.esc_html($vw_mobile_app_second_color).', '.esc_html($vw_mobile_app_first_color).');
	 	}';
	}

	/*---------------------------Width Layout -------------------*/

	$vw_mobile_app_theme_lay = get_theme_mod( 'vw_mobile_app_width_option','Full Width');
    if($vw_mobile_app_theme_lay == 'Boxed'){
		$vw_mobile_app_custom_css .='body{';
			$vw_mobile_app_custom_css .='max-width: 1140px; width: 100%; padding-right: 15px; padding-left: 15px; margin-right: auto; margin-left: auto;';
		$vw_mobile_app_custom_css .='}';
	}else if($vw_mobile_app_theme_lay == 'Wide Width'){
		$vw_mobile_app_custom_css .='body{';
			$vw_mobile_app_custom_css .='width: 100%;padding-right: 15px;padding-left: 15px;margin-right: auto;margin-left: auto;';
		$vw_mobile_app_custom_css .='}';
	}else if($vw_mobile_app_theme_lay == 'Full Width'){
		$vw_mobile_app_custom_css .='body{';
			$vw_mobile_app_custom_css .='max-width: 100%;';
		$vw_mobile_app_custom_css .='}';
	}

	/*--------------------------- Slider Opacity -------------------*/

	$vw_mobile_app_theme_lay = get_theme_mod( 'vw_mobile_app_slider_opacity_color','0.5');
	if($vw_mobile_app_theme_lay == '0'){
		$vw_mobile_app_custom_css .='#banner img{';
			$vw_mobile_app_custom_css .='opacity:0';
		$vw_mobile_app_custom_css .='}';
		}else if($vw_mobile_app_theme_lay == '0.1'){
		$vw_mobile_app_custom_css .='#banner img{';
			$vw_mobile_app_custom_css .='opacity:0.1';
		$vw_mobile_app_custom_css .='}';
		}else if($vw_mobile_app_theme_lay == '0.2'){
		$vw_mobile_app_custom_css .='#banner img{';
			$vw_mobile_app_custom_css .='opacity:0.2';
		$vw_mobile_app_custom_css .='}';
		}else if($vw_mobile_app_theme_lay == '0.3'){
		$vw_mobile_app_custom_css .='#banner img{';
			$vw_mobile_app_custom_css .='opacity:0.3';
		$vw_mobile_app_custom_css .='}';
		}else if($vw_mobile_app_theme_lay == '0.4'){
		$vw_mobile_app_custom_css .='#banner img{';
			$vw_mobile_app_custom_css .='opacity:0.4';
		$vw_mobile_app_custom_css .='}';
		}else if($vw_mobile_app_theme_lay == '0.5'){
		$vw_mobile_app_custom_css .='#banner img{';
			$vw_mobile_app_custom_css .='opacity:0.5';
		$vw_mobile_app_custom_css .='}';
		}else if($vw_mobile_app_theme_lay == '0.6'){
		$vw_mobile_app_custom_css .='#banner img{';
			$vw_mobile_app_custom_css .='opacity:0.6';
		$vw_mobile_app_custom_css .='}';
		}else if($vw_mobile_app_theme_lay == '0.7'){
		$vw_mobile_app_custom_css .='#banner img{';
			$vw_mobile_app_custom_css .='opacity:0.7';
		$vw_mobile_app_custom_css .='}';
		}else if($vw_mobile_app_theme_lay == '0.8'){
		$vw_mobile_app_custom_css .='#banner img{';
			$vw_mobile_app_custom_css .='opacity:0.8';
		$vw_mobile_app_custom_css .='}';
		}else if($vw_mobile_app_theme_lay == '0.9'){
		$vw_mobile_app_custom_css .='#banner img{';
			$vw_mobile_app_custom_css .='opacity:0.9';
		$vw_mobile_app_custom_css .='}';
		}

	/*---------------------------Slider Content Layout -------------------*/

	$vw_mobile_app_theme_lay = get_theme_mod( 'vw_mobile_app_slider_content_option','Left');
    if($vw_mobile_app_theme_lay == 'Left'){
		$vw_mobile_app_custom_css .='.box-content, .box-content h1{';
			$vw_mobile_app_custom_css .='text-align:left; left:10%; right:55%;';
		$vw_mobile_app_custom_css .='}';
	}else if($vw_mobile_app_theme_lay == 'Center'){
		$vw_mobile_app_custom_css .='.box-content, .box-content h1{';
			$vw_mobile_app_custom_css .='text-align:center; left:30%; right:30%;';
		$vw_mobile_app_custom_css .='}';
	}else if($vw_mobile_app_theme_lay == 'Right'){
		$vw_mobile_app_custom_css .='.box-content, .box-content h1{';
			$vw_mobile_app_custom_css .='text-align:right; left:55%; right:10%;';
		$vw_mobile_app_custom_css .='}';
	}

	/*---------------------------Banner Height ------------*/

	$vw_mobile_app_banner_height = get_theme_mod('vw_mobile_app_banner_height');
	if($vw_mobile_app_banner_height != false){
		$vw_mobile_app_custom_css .='#banner img{';
			$vw_mobile_app_custom_css .='height: '.esc_html($vw_mobile_app_banner_height).';';
		$vw_mobile_app_custom_css .='}';
	}

	/*--------------------------- Slider -------------------*/

	$vw_mobile_app_slider = get_theme_mod('vw_mobile_app_banner_settings');
	if($vw_mobile_app_slider == false){
		$vw_mobile_app_custom_css .='.page-template-custom-home-page #header{';
			$vw_mobile_app_custom_css .='position: static; background-image: linear-gradient(to right, #f94a5b , #fd6c4f);';
		$vw_mobile_app_custom_css .='}';
		$vw_mobile_app_custom_css .='.page-template-custom-home-page .main-navigation a:hover{';
			$vw_mobile_app_custom_css .='color: #fff;';
		$vw_mobile_app_custom_css .='}';
	}

	/*---------------------------Blog Layout -------------------*/

	$vw_mobile_app_theme_lay = get_theme_mod( 'vw_mobile_app_blog_layout_option','Default');
    if($vw_mobile_app_theme_lay == 'Default'){
		$vw_mobile_app_custom_css .='.post-main-box{';
			$vw_mobile_app_custom_css .='';
		$vw_mobile_app_custom_css .='}';
	}else if($vw_mobile_app_theme_lay == 'Center'){
		$vw_mobile_app_custom_css .='.post-main-box, .post-main-box h2, .post-info, .new-text p, .content-bttn, #our-services p{';
			$vw_mobile_app_custom_css .='text-align:center;';
		$vw_mobile_app_custom_css .='}';
		$vw_mobile_app_custom_css .='.post-info{';
			$vw_mobile_app_custom_css .='margin-top:10px;';
		$vw_mobile_app_custom_css .='}';
		$vw_mobile_app_custom_css .='.post-info hr{';
			$vw_mobile_app_custom_css .='margin:15px auto;';
		$vw_mobile_app_custom_css .='}';
	}else if($vw_mobile_app_theme_lay == 'Left'){
		$vw_mobile_app_custom_css .='.post-main-box, .post-main-box h2, .post-info, .new-text p, .content-bttn, #our-services p{';
			$vw_mobile_app_custom_css .='text-align:Left;';
		$vw_mobile_app_custom_css .='}';
		$vw_mobile_app_custom_css .='.post-info{';
			$vw_mobile_app_custom_css .='margin-top:20px;';
		$vw_mobile_app_custom_css .='}';
	}

	/*------------------------------Responsive Media -----------------------*/

	$vw_mobile_app_stickyheader = get_theme_mod( 'vw_mobile_app_stickyheader_hide_show',false);
    if($vw_mobile_app_stickyheader == true){
    	$vw_mobile_app_custom_css .='@media screen and (max-width:575px) {';
		$vw_mobile_app_custom_css .='.page-template-custom-home-page #header .header-fixed, #header .header-fixed{';
			$vw_mobile_app_custom_css .='display:block;';
		$vw_mobile_app_custom_css .='} }';
	}else if($vw_mobile_app_stickyheader == false){
		$vw_mobile_app_custom_css .='@media screen and (max-width:575px) {';
		$vw_mobile_app_custom_css .='.page-template-custom-home-page #header .header-fixed, #header .header-fixed{';
			$vw_mobile_app_custom_css .='display:none;';
		$vw_mobile_app_custom_css .='} }';
	}

	$vw_mobile_app_metabox = get_theme_mod( 'vw_mobile_app_metabox_hide_show',true);
    if($vw_mobile_app_metabox == true){
    	$vw_mobile_app_custom_css .='@media screen and (max-width:575px) {';
		$vw_mobile_app_custom_css .='.post-info{';
			$vw_mobile_app_custom_css .='display:block;';
		$vw_mobile_app_custom_css .='} }';
	}else if($vw_mobile_app_metabox == false){
		$vw_mobile_app_custom_css .='@media screen and (max-width:575px) {';
		$vw_mobile_app_custom_css .='.post-info{';
			$vw_mobile_app_custom_css .='display:none;';
		$vw_mobile_app_custom_css .='} }';
	}

	$vw_mobile_app_sidebar = get_theme_mod( 'vw_mobile_app_sidebar_hide_show',true);
    if($vw_mobile_app_sidebar == true){
    	$vw_mobile_app_custom_css .='@media screen and (max-width:575px) {';
		$vw_mobile_app_custom_css .='#sidebar{';
			$vw_mobile_app_custom_css .='display:block;';
		$vw_mobile_app_custom_css .='} }';
	}else if($vw_mobile_app_sidebar == false){
		$vw_mobile_app_custom_css .='@media screen and (max-width:575px) {';
		$vw_mobile_app_custom_css .='#sidebar{';
			$vw_mobile_app_custom_css .='display:none;';
		$vw_mobile_app_custom_css .='} }';
	}

	$vw_mobile_app_resp_scroll_top = get_theme_mod( 'vw_mobile_app_resp_scroll_top_hide_show',true);
    if($vw_mobile_app_resp_scroll_top == true){
    	$vw_mobile_app_custom_css .='@media screen and (max-width:575px) {';
		$vw_mobile_app_custom_css .='.scrollup i{';
			$vw_mobile_app_custom_css .='display:block;';
		$vw_mobile_app_custom_css .='} }';
	}else if($vw_mobile_app_resp_scroll_top == false){
		$vw_mobile_app_custom_css .='@media screen and (max-width:575px) {';
		$vw_mobile_app_custom_css .='.scrollup i{';
			$vw_mobile_app_custom_css .='display:none !important;';
		$vw_mobile_app_custom_css .='} }';
	}

	/*---------------- Button Settings ------------------*/

	$vw_mobile_app_button_padding_top_bottom = get_theme_mod('vw_mobile_app_button_padding_top_bottom');
	$vw_mobile_app_button_padding_left_right = get_theme_mod('vw_mobile_app_button_padding_left_right');
	if($vw_mobile_app_button_padding_top_bottom != false || $vw_mobile_app_button_padding_left_right != false){
		$vw_mobile_app_custom_css .='a.content-bttn{';
			$vw_mobile_app_custom_css .='padding-top: '.esc_html($vw_mobile_app_button_padding_top_bottom).'; padding-bottom: '.esc_html($vw_mobile_app_button_padding_top_bottom).';padding-left: '.esc_html($vw_mobile_app_button_padding_left_right).';padding-right: '.esc_html($vw_mobile_app_button_padding_left_right).';';
		$vw_mobile_app_custom_css .='}';
	}

	$vw_mobile_app_button_border_radius = get_theme_mod('vw_mobile_app_button_border_radius');
	if($vw_mobile_app_button_border_radius != false){
		$vw_mobile_app_custom_css .='a.content-bttn{';
			$vw_mobile_app_custom_css .='border-radius: '.esc_html($vw_mobile_app_button_border_radius).'px;';
		$vw_mobile_app_custom_css .='}';
	}

	/*-------------- Copyright Alignment ----------------*/

	$vw_mobile_app_copyright_alingment = get_theme_mod('vw_mobile_app_copyright_alingment');
	if($vw_mobile_app_copyright_alingment != false){
		$vw_mobile_app_custom_css .='.copyright p{';
			$vw_mobile_app_custom_css .='text-align: '.esc_html($vw_mobile_app_copyright_alingment).';';
		$vw_mobile_app_custom_css .='}';
	}

	$vw_mobile_app_copyright_padding_top_bottom = get_theme_mod('vw_mobile_app_copyright_padding_top_bottom');
	if($vw_mobile_app_copyright_padding_top_bottom != false){
		$vw_mobile_app_custom_css .='#footer-2{';
			$vw_mobile_app_custom_css .='padding-top: '.esc_html($vw_mobile_app_copyright_padding_top_bottom).'; padding-bottom: '.esc_html($vw_mobile_app_copyright_padding_top_bottom).';';
		$vw_mobile_app_custom_css .='}';
	}

	/*----------------Sroll to top Settings ------------------*/

	$vw_mobile_app_scroll_to_top_font_size = get_theme_mod('vw_mobile_app_scroll_to_top_font_size');
	if($vw_mobile_app_scroll_to_top_font_size != false){
		$vw_mobile_app_custom_css .='.scrollup i{';
			$vw_mobile_app_custom_css .='font-size: '.esc_html($vw_mobile_app_scroll_to_top_font_size).';';
		$vw_mobile_app_custom_css .='}';
	}

	$vw_mobile_app_scroll_to_top_padding = get_theme_mod('vw_mobile_app_scroll_to_top_padding');
	$vw_mobile_app_scroll_to_top_padding = get_theme_mod('vw_mobile_app_scroll_to_top_padding');
	if($vw_mobile_app_scroll_to_top_padding != false){
		$vw_mobile_app_custom_css .='.scrollup i{';
			$vw_mobile_app_custom_css .='padding-top: '.esc_html($vw_mobile_app_scroll_to_top_padding).';padding-bottom: '.esc_html($vw_mobile_app_scroll_to_top_padding).';';
		$vw_mobile_app_custom_css .='}';
	}

	$vw_mobile_app_scroll_to_top_width = get_theme_mod('vw_mobile_app_scroll_to_top_width');
	if($vw_mobile_app_scroll_to_top_width != false){
		$vw_mobile_app_custom_css .='.scrollup i{';
			$vw_mobile_app_custom_css .='width: '.esc_html($vw_mobile_app_scroll_to_top_width).';';
		$vw_mobile_app_custom_css .='}';
	}

	$vw_mobile_app_scroll_to_top_height = get_theme_mod('vw_mobile_app_scroll_to_top_height');
	if($vw_mobile_app_scroll_to_top_height != false){
		$vw_mobile_app_custom_css .='.scrollup i{';
			$vw_mobile_app_custom_css .='height: '.esc_html($vw_mobile_app_scroll_to_top_height).';';
		$vw_mobile_app_custom_css .='}';
	}

	$vw_mobile_app_scroll_to_top_border_radius = get_theme_mod('vw_mobile_app_scroll_to_top_border_radius');
	if($vw_mobile_app_scroll_to_top_border_radius != false){
		$vw_mobile_app_custom_css .='.scrollup i{';
			$vw_mobile_app_custom_css .='border-radius: '.esc_html($vw_mobile_app_scroll_to_top_border_radius).'px;';
		$vw_mobile_app_custom_css .='}';
	}