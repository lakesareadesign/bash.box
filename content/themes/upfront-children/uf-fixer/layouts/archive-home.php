<?php
$region_14 = upfront_create_region(
			array (
  'name' => 'region-14',
  'title' => 'Region 14',
  'type' => 'wide',
  'scope' => 'local',
  'container' => 'region-14',
  'position' => 1,
  'allow_sidebar' => true,
),
			array (
  'row' => 184,
  'breakpoint' =>
  (array)(array(
     'tablet' =>
    (array)(array(
       'edited' => true,
       'background_type' => 'image',
       'background_position_y' => '50',
       'background_style' => 'full',
       'background_position_x' => '50',
       'background_image' => '' . get_stylesheet_directory_uri() . '/images/archive-home/slider-e.jpg',
       'background_image_ratio' => 0.68000000000000004884981308350688777863979339599609375,
       'row' => 121,
    )),
     'mobile' =>
    (array)(array(
       'edited' => true,
       'background_type' => 'color',
       'background_color' => 'rgba(254,212,27,1)',
       'row' => 107,
    )),
     'custom-1410783666947' =>
    (array)(array(
       'edited' => true,
       'col' => 24,
       'row' => 166,
    )),
  )),
  'background_type' => 'slider',
  'nav_region' => '',
  'background_color' => '#ffffff',
  'background_slider_rotate' => true,
  'background_slider_rotate_time' => 5,
  'background_slider_control' => 'always',
  'background_slider_transition' => 'crossfade',
  'background_slider_images' =>
  array (
    0 => '/images/slider-b.jpg',
    1 => '/images/slider-a.jpg',
    2 => '/images/slider-c.jpg',
    3 => '/images/slider-d.jpg',
    4 => '/images/slider-e.jpg',
  ),
  'background_style' => 'full',
  'background_position_y' => '50',
  'background_position_x' => '50',
  'use_padding' => 0,
  'sub_regions' =>
  array (
    0 => '',
  ),
  'background_image' => '' . get_stylesheet_directory_uri() . '/images/archive-home/slider-a.jpg',
  'background_image_ratio' => 0.68000000000000004884981308350688777863979339599609375,
)
			);

$region_14->add_element("Uimage", array (
  'columns' => '4',
  'margin_left' => '1',
  'margin_right' => '0',
  'margin_top' => '6',
  'margin_bottom' => '0',
  'id' => 'module-1422416936720-1326',
  'options' =>
  array (
    'src' => '' . get_stylesheet_directory_uri() . '/images/archive-home/fixer-logo-111x26-8987.png',
    'srcFull' => '' . get_stylesheet_directory_uri() . '/images/archive-home/fixer-logo.png',
    'srcOriginal' => '' . get_stylesheet_directory_uri() . '/images/archive-home/fixer-logo.png',
    'image_title' => '',
    'alternative_text' => '',
    'when_clicked' => 'external',
    'image_link' => '' . get_home_url() . '/',
    'include_image_caption' => false,
    'image_caption' => 'My awesome image caption',
    'caption_position' => false,
    'caption_alignment' => false,
    'caption_trigger' => 'always_show',
    'image_status' => 'ok',
    'size' =>
    (array)(array(
       'width' => 111,
       'height' => 26,
    )),
    'fullSize' =>
    (array)(array(
       'width' => 111,
       'height' => 26,
    )),
    'position' =>
    (array)(array(
       'top' => 0,
       'left' => 0,
    )),
    'marginTop' => 0,
    'element_size' =>
    (array)(array(
       'width' => 150,
       'height' => 30,
    )),
    'rotation' => 0,
    'color' => '#ffffff',
    'background' => '#000000',
    'captionBackground' => '0',
    'image_id' => '1768',
    'align' => 'left',
    'stretch' => false,
    'vstretch' => false,
    'quick_swap' => false,
    'gifImage' => 0,
    'placeholder_class' => '',
    'type' => 'UimageModel',
    'view_class' => 'UimageView',
    'has_settings' => 1,
    'class' => 'c24 upfront-image',
    'id_slug' => 'image',
    'element_id' => 'image-1422416936718-1443',
    'row' => 4,
    'breakpoint' =>
    (array)(array(
       'mobile' =>
      (array)(array(
         'row' => 12,
      )),
       'tablet' =>
      (array)(array(
         'row' => 10,
      )),
    )),
    'link_target' => '_blank',
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1422432407745-1362',
  'new_line' => 'true',
  'wrapper_breakpoint' =>
  array (
    'tablet' =>
    array (
      'edited' => true,
      'col' => 5,
      'clear' => true,
      'order' => 0,
    ),
    'mobile' =>
    array (
      'edited' => false,
      'col' => 4,
      'clear' => true,
      'order' => 0,
    ),
    'custom-1410783666947' =>
    array (
      'col' => 11,
      'order' => 0,
      'clear' => true,
      'edited' => true,
    ),
  ),
  'breakpoint' =>
  array (
    'tablet' =>
    array (
      'edited' => true,
      'left' => 1,
      'col' => 4,
      'top' => 6,
      'row' => 10,
    ),
    'mobile' =>
    array (
      'edited' => true,
      'left' => 1,
      'col' => 3,
      'row' => 12,
      'top' => 5,
    ),
    'custom-1410783666947' =>
    array (
      'edited' => false,
      'left' => 7,
      'col' => 4,
      'order' => 0,
    ),
  ),
));

$region_14->add_element("Unewnavigation", array (
  'columns' => '13',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '6',
  'margin_bottom' => '0',
  'id' => 'module-1422430251821-1124',
  'options' =>
  array (
    'type' => 'UnewnavigationModel',
    'view_class' => 'UnewnavigationView',
    'class' => 'c24 upfront-navigation',
    'has_settings' => 1,
    'id_slug' => 'unewnavigation',
    'menu_items' =>
    array (
      0 =>
      (array)(array(
         'menu-item-db-id' => 7,
         'menu-item-parent-id' => '0',
         'menu-item-type' => 'custom',
         'menu-item-title' => 'Service',
         'menu-item-url' => '#services',
         'menu-item-object' => 'custom',
         'menu-item-object-id' => '7',
         'menu-item-target' => '_self',
         'menu-item-position' => 1,
      )),
      1 =>
      (array)(array(
         'menu-item-db-id' => 8,
         'menu-item-parent-id' => '0',
         'menu-item-type' => 'custom',
         'menu-item-title' => 'Get a Quote',
         'menu-item-url' => '#quote',
         'menu-item-object' => 'custom',
         'menu-item-object-id' => '8',
         'menu-item-target' => '_self',
         'menu-item-position' => 2,
      )),
      2 =>
      (array)(array(
         'menu-item-db-id' => 9,
         'menu-item-parent-id' => '0',
         'menu-item-type' => 'custom',
         'menu-item-title' => 'Blog',
         'menu-item-url' => '' . get_home_url() . '/blog',
         'menu-item-object' => 'custom',
         'menu-item-object-id' => '9',
         'menu-item-target' => '',
         'menu-item-position' => 3,
      )),
      3 =>
      (array)(array(
         'menu-item-db-id' => 10,
         'menu-item-parent-id' => '0',
         'menu-item-type' => 'custom',
         'menu-item-title' => 'About',
         'menu-item-url' => '#about',
         'menu-item-object' => 'custom',
         'menu-item-object-id' => '10',
         'menu-item-target' => '_self',
         'menu-item-position' => 4,
      )),
      4 =>
      (array)(array(
         'menu-item-db-id' => 11,
         'menu-item-parent-id' => '0',
         'menu-item-type' => 'custom',
         'menu-item-title' => 'Coverage Area',
         'menu-item-url' => '#coverage',
         'menu-item-object' => 'custom',
         'menu-item-object-id' => '11',
         'menu-item-target' => '_self',
         'menu-item-position' => 5,
      )),
    ),
    'menu_style' => 'horizontal',
    'menu_alignment' => 'left',
    'allow_sub_nav' =>
    array (
      0 => 'no',
    ),
    'allow_new_pages' =>
    array (
    ),
    'element_id' => 'unewnavigation-object-1422430251820-1816',
    'initialized' => false,
    'menu_id' => false,
    'menu_slug' => 'fixer-menu',
    'burger_menu' =>
    array (
    ),
    'burger_alignment' => 'left',
    'burger_over' => 'over',
    'is_floating' =>
    array (
    ),
    'anchor' => '',
    'theme_style' => '_default',
    'breakpoint' =>
    (array)(array(
       'desktop' =>
      (array)(array(
         'burger_alignment' => 'left',
         'burger_over' => 'over',
         'menu_style' => 'horizontal',
         'menu_alignment' => 'left',
         'width' => 1080,
      )),
       'tablet' =>
      (array)(array(
         'theme_style' => 'mobile-nav',
         'width' => 570,
         'burger_menu' => 'yes',
         'burger_alignment' => 'top',
         'burger_over' => 'over',
         'row' => 14,
         'menu_style' => 'horizontal',
         'menu_alignment' => 'center',
      )),
       'mobile' =>
      (array)(array(
         'burger_menu' => 'yes',
         'burger_alignment' => 'top',
         'burger_over' => 'over',
         'width' => 315,
         'row' => 15,
         'theme_style' => 'mobile-nav',
         'menu_style' => 'horizontal',
         'menu_alignment' => 'center',
      )),
       'custom-1410783666947' =>
      (array)(array(
         'burger_menu' => '',
         'burger_alignment' => 'left',
         'burger_over' => 'over',
         'menu_style' => 'horizontal',
         'menu_alignment' => 'center',
         'width' => 810,
         'row' => 9,
      )),
    )),
    'row' => 13,
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1422432419698-1772',
  'wrapper_breakpoint' =>
  array (
    'tablet' =>
    array (
      'edited' => true,
      'col' => 6,
      'clear' => false,
      'order' => 1,
    ),
    'mobile' =>
    array (
      'edited' => false,
      'col' => 2,
      'clear' => false,
      'order' => 0,
    ),
    'custom-1410783666947' =>
    array (
      'col' => 16,
      'order' => 1,
      'clear' => true,
      'edited' => true,
    ),
  ),
  'breakpoint' =>
  array (
    'tablet' =>
    array (
      'edited' => true,
      'left' => 4,
      'col' => 2,
      'top' => 6,
      'row' => 14,
    ),
    'mobile' =>
    array (
      'edited' => true,
      'left' => 0,
      'col' => 2,
      'top' => 3,
      'row' => 15,
    ),
    'custom-1410783666947' =>
    array (
      'edited' => true,
      'left' => 2,
      'col' => 14,
      'order' => 0,
      'row' => 9,
    ),
  ),
));

$region_14->add_element("PlainTxt", array (
  'columns' => '5',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '4',
  'margin_bottom' => '0',
  'id' => 'module-1405520755970-1045',
  'options' =>
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<p style="text-align: right;" class="">
	<strong data-redactor-tag="strong" data-verified="redactor">One call does it all</strong>
</p>
<h2 style="text-align: right;" class=""><span class="uf_font_icon" style="font-size: 22px; top: 0px;" rel="font-size: 22px; top: 0px;" data-verified="redactor" data-redactor-tag="span" data-redactor-style="font-size: 22px; top: 0px;">a </span><span class="redactor-invisible-space" data-verified="redactor" data-redactor-tag="span" data-redactor-class="redactor-invisible-space">​</span>1300 FIXER</h2>',
    'type' => 'PlainTxtModel',
    'element_id' => 'text-object-1405520755969-1764',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'is_edited' => true,
    'border_style' => 'none',
    'border_width' => '0',
    'border_color' => '',
    'bg_color' => '',
    'theme_style' => 'header-contact-text',
    'anchor' => '',
    'row' => 18,
    'breakpoint' =>
    (array)(array(
       'tablet' =>
      (array)(array(
         'row' => 18,
      )),
       'custom-1410783666947' =>
      (array)(array(
         'row' => 18,
      )),
    )),
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1422432441317-1341',
  'wrapper_breakpoint' =>
  array (
    'tablet' =>
    array (
      'edited' => true,
      'col' => 11,
      'clear' => true,
      'order' => 2,
    ),
    'mobile' =>
    array (
      'edited' => false,
      'col' => 6,
      'clear' => true,
      'order' => 0,
    ),
    'custom-1410783666947' =>
    array (
      'col' => 11,
      'order' => 2,
      'clear' => true,
      'edited' => true,
    ),
  ),
  'breakpoint' =>
  array (
    'tablet' =>
    array (
      'edited' => true,
      'left' => 5,
      'col' => 6,
      'top' => 5,
      'row' => 18,
    ),
    'mobile' =>
    array (
      'edited' => true,
      'left' => 1,
      'col' => 5,
      'top' => 0,
    ),
    'custom-1410783666947' =>
    array (
      'edited' => true,
      'left' => 6,
      'col' => 5,
      'order' => 0,
      'top' => 5,
      'row' => 18,
    ),
  ),
));

$region_14->add_element("PlainTxt", array (
  'columns' => '17',
  'margin_left' => '6',
  'margin_right' => '0',
  'margin_top' => '25',
  'margin_bottom' => '0',
  'id' => 'module-1422430251668-1045',
  'options' =>
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<h1 class="" style="text-align: right;"><span class="upfront_theme_color_0" data-verified="redactor" data-redactor-tag="span" data-redactor-class="upfront_theme_color_0">We Build and Fix</span></h1>',
    'type' => 'PlainTxtModel',
    'element_id' => 'text-object-1422430251668-1689',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'is_edited' => true,
    'row' => 66,
    'border_style' => 'none',
    'border_width' => 1,
    'border_color' => 'rgba(0, 0, 0, 0)',
    'bg_color' => 'rgba(0, 0, 0, 0)',
    'anchor' => '',
    'theme_style' => 'home-slideshow-text',
    'breakpoint' =>
    (array)(array(
       'tablet' =>
      (array)(array(
         'theme_style' => 'u-slider-text-tablet',
         'row' => 45,
      )),
       'mobile' =>
      (array)(array(
         'theme_style' => 'slider-txt-mobile',
         'row' => 25,
      )),
       'custom-1410783666947' =>
      (array)(array(
         'row' => 67,
         'theme_style' => 'u-slider-text-tablet',
      )),
    )),
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1422432479895-1097',
  'new_line' => 'true',
  'wrapper_breakpoint' =>
  array (
    'tablet' =>
    array (
      'edited' => true,
      'col' => 12,
      'clear' => true,
      'order' => 3,
    ),
    'mobile' =>
    array (
      'edited' => false,
      'col' => 7,
      'clear' => true,
      'order' => 0,
    ),
    'custom-1410783666947' =>
    array (
      'col' => 16,
      'order' => 3,
      'clear' => true,
      'edited' => true,
    ),
  ),
  'breakpoint' =>
  array (
    'tablet' =>
    array (
      'edited' => true,
      'left' => 0,
      'col' => 12,
      'top' => 0,
      'row' => 45,
    ),
    'mobile' =>
    array (
      'edited' => true,
      'left' => 0,
      'col' => 7,
      'top' => 2,
      'row' => 25,
    ),
    'custom-1410783666947' =>
    array (
      'edited' => true,
      'left' => 2,
      'col' => 14,
      'order' => 0,
      'top' => 6,
      'row' => 67,
    ),
  ),
));

$region_14->add_element("Button", array (
  'columns' => '4',
  'margin_left' => '15',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'id' => 'module-1412693769329-1564',
  'options' =>
  array (
    'content' => 'Get a quote',
    'href' => '#quote',
    'align' => 'center',
    'type' => 'ButtonModel',
    'view_class' => 'ButtonView',
    'element_id' => 'button-object-1412693769328-1389',
    'class' => 'c24 upfront-button',
    'has_settings' => 1,
    'id_slug' => 'button',
    'currentpreset' => 'white-borders-button',
    'theme_style' => '_default',
    'row' => 6,
    'is_edited' => true,
    'linkTarget' => '_self',
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1422432582706-1701',
  'new_line' => 'true',
  'wrapper_breakpoint' =>
  array (
    'tablet' =>
    array (
      'edited' => true,
      'col' => 6,
      'clear' => true,
      'order' => 4,
    ),
    'mobile' =>
    array (
      'edited' => false,
      'col' => 6,
      'clear' => true,
      'order' => 0,
    ),
    'custom-1410783666947' =>
    array (
      'col' => 8,
      'order' => 4,
      'clear' => true,
      'edited' => true,
    ),
  ),
  'breakpoint' =>
  array (
    'tablet' =>
    array (
      'edited' => true,
      'left' => 2,
      'col' => 4,
      'top' => 1,
    ),
    'mobile' =>
    array (
      'edited' => true,
      'left' => 1,
      'col' => 5,
      'top' => 0,
    ),
    'custom-1410783666947' =>
    array (
      'edited' => true,
      'left' => 4,
      'col' => 4,
      'order' => 0,
      'top' => 7,
    ),
  ),
));

$region_14->add_element("Button", array (
  'columns' => '4',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'id' => 'module-1412693935237-1809',
  'options' =>
  array (
    'content' => 'View Service',
    'href' => '#services',
    'align' => 'center',
    'type' => 'ButtonModel',
    'view_class' => 'ButtonView',
    'element_id' => 'object-1412693935237-1754',
    'class' => 'c24 upfront-button',
    'has_settings' => 1,
    'id_slug' => 'button',
    'currentpreset' => 'white-borders-button',
    'theme_style' => '_default',
    'row' => 6,
    'is_edited' => true,
    'linkTarget' => '_self',
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1422432586280-1756',
  'wrapper_breakpoint' =>
  array (
    'tablet' =>
    array (
      'edited' => true,
      'col' => 4,
      'clear' => false,
      'order' => 5,
    ),
    'mobile' =>
    array (
      'edited' => false,
      'col' => 6,
      'clear' => true,
      'order' => 0,
    ),
    'custom-1410783666947' =>
    array (
      'col' => 6,
      'order' => 5,
      'clear' => false,
      'edited' => true,
    ),
  ),
  'breakpoint' =>
  array (
    'tablet' =>
    array (
      'edited' => true,
      'left' => 0,
      'col' => 4,
      'top' => 1,
    ),
    'mobile' =>
    array (
      'edited' => true,
      'left' => 1,
      'col' => 5,
      'top' => 0,
    ),
    'custom-1410783666947' =>
    array (
      'edited' => true,
      'left' => 2,
      'col' => 4,
      'order' => 0,
      'top' => 7,
    ),
  ),
));

$regions->add($region_14);

$region_13 = upfront_create_region(
			array (
  'name' => 'region-13',
  'title' => 'Region 13',
  'type' => 'wide',
  'scope' => 'local',
  'container' => 'region-13',
  'position' => 1,
  'allow_sidebar' => true,
),
			array (
  'row' => 315,
  'breakpoint' =>
  (array)(array(
     'tablet' =>
    (array)(array(
       'edited' => true,
       'background_position_y' => '79',
       'background_style' => 'fixed',
       'background_repeat' => 'no-repeat',
       'background_position' => '50% 79%',
       'background_position_x' => '50',
       'background_type' => 'color',
       'row' => 543,
    )),
     'mobile' =>
    (array)(array(
       'edited' => true,
       'background_position_y' => '79',
       'background_style' => 'fixed',
       'background_repeat' => 'no-repeat',
       'background_position' => '50% 79%',
       'background_position_x' => '50',
       'background_type' => 'color',
       'row' => 571,
    )),
     'custom-1410783666947' =>
    (array)(array(
       'edited' => true,
       'row' => 350,
       'background_position_y' => '86',
       'background_style' => 'fixed',
       'background_repeat' => 'no-repeat',
       'background_position' => '50% 86%',
       'background_position_x' => '50',
       'background_type' => 'color',
    )),
  )),
  'background_type' => 'image',
  'nav_region' => '',
  'background_color' => '#ufc1',
  'background_style' => 'fixed',
  'background_position_y' => '80',
  'background_position_x' => '50',
  'background_image' => '' . get_stylesheet_directory_uri() . '/images/archive-home/spanner.png',
  'background_image_ratio' => 2.5,
  'background_repeat' => 'no-repeat',
  'background_position' => '50% 80%',
  'use_padding' => 0,
  'sub_regions' =>
  array (
    0 => '',
  ),
)
			);

$region_13->add_element("PlainTxt", array (
  'columns' => '24',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '13',
  'margin_bottom' => '0',
  'id' => 'module-1412752367986-1614',
  'options' =>
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<h3 style="text-align: center;" class=""><span class="upfront_theme_color_0">Service</span></h3>',
    'type' => 'PlainTxtModel',
    'element_id' => 'text-object-1412752367985-1171',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'is_edited' => true,
    'row' => 5,
    'border_style' => 'none',
    'border_width' => 1,
    'border_color' => 'rgba(0, 0, 0, 0)',
    'bg_color' => 'rgba(0, 0, 0, 0)',
    'anchor' => 'services',
    'theme_style' => 'u-sub-heading',
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1422429463425-1242',
  'new_line' => 'true',
  'wrapper_breakpoint' =>
  array (
    'tablet' =>
    array (
      'edited' => true,
      'col' => 12,
      'order' => 0,
      'clear' => true,
    ),
    'mobile' =>
    array (
      'edited' => true,
      'col' => 7,
      'clear' => true,
      'order' => 0,
    ),
    'custom-1410783666947' =>
    array (
      'col' => 18,
      'order' => 0,
      'clear' => true,
      'edited' => true,
    ),
  ),
  'breakpoint' =>
  array (
    'tablet' =>
    array (
      'edited' => true,
      'left' => 0,
      'col' => 12,
      'top' => 8,
      'order' => 0,
    ),
    'mobile' =>
    array (
      'edited' => false,
      'left' => 0,
      'col' => 7,
      'order' => 0,
    ),
    'custom-1410783666947' =>
    array (
      'edited' => false,
      'left' => 0,
      'col' => 18,
      'order' => 0,
    ),
  ),
));

$region_13->add_element("PlainTxt", array (
  'columns' => '24',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'id' => 'module-1412753049856-1341',
  'options' =>
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<h1 style="text-align: center;" class=""><span class="upfront_theme_color_0">Premier<br>
Service &amp; Quality</span>
</h1>',
    'type' => 'PlainTxtModel',
    'element_id' => 'text-object-1412753049855-1267',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'is_edited' => true,
    'row' => 59,
    'border_style' => 'none',
    'border_width' => 1,
    'border_color' => 'rgba(0, 0, 0, 0)',
    'bg_color' => 'rgba(0, 0, 0, 0)',
    'anchor' => '',
    'breakpoint' =>
    (array)(array(
       'mobile' =>
      (array)(array(
         'row' => 34,
      )),
    )),
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1422429454235-1180',
  'new_line' => 'true',
  'wrapper_breakpoint' =>
  array (
    'tablet' =>
    array (
      'edited' => true,
      'col' => 12,
      'order' => 1,
      'clear' => true,
    ),
    'mobile' =>
    array (
      'edited' => true,
      'col' => 7,
      'clear' => true,
      'order' => 1,
    ),
    'custom-1410783666947' =>
    array (
      'col' => 18,
      'order' => 1,
      'clear' => true,
      'edited' => true,
    ),
  ),
  'breakpoint' =>
  array (
    'tablet' =>
    array (
      'edited' => true,
      'left' => 0,
      'col' => 12,
      'top' => 0,
      'order' => 2,
    ),
    'mobile' =>
    array (
      'edited' => true,
      'left' => 0,
      'col' => 7,
      'row' => 34,
      'top' => 0,
    ),
    'custom-1410783666947' =>
    array (
      'edited' => true,
      'left' => 0,
      'col' => 18,
      'order' => 0,
      'top' => 0,
    ),
  ),
));

$region_13->add_group(array (
  'columns' => '6',
  'margin_left' => '1',
  'margin_right' => '0',
  'margin_top' => '16',
  'margin_bottom' => '0',
  'id' => 'module-group-1433406298129-1171',
  'type' => 'ModuleGroup',
  'wrapper_id' => 'wrapper-1432886627216-1815',
  'original_col' => 6,
  'background_color' => 'rgba(137,77,77,0)',
  'background_style' => 'full',
  'background_position_y' => 50,
  'background_position_x' => 50,
  'use_padding' => '',
  'background_type' => 'color',
  'anchor' => '',
  'theme_style' => 'no-y-padding',
  'new_line' => 'true',
  'wrapper_breakpoint' =>
  array (
    'tablet' =>
    array (
      'edited' => true,
      'col' => 9,
      'order' => 4,
      'clear' => true,
    ),
    'mobile' =>
    array (
      'edited' => true,
      'col' => 7,
      'order' => 4,
      'clear' => true,
    ),
    'custom-1410783666947' =>
    array (
      'edited' => true,
      'col' => 12,
      'order' => 2,
      'clear' => true,
    ),
  ),
  'breakpoint' =>
  array (
    'tablet' =>
    array (
      'edited' => true,
      'left' => 3,
      'col' => 6,
      'order' => 0,
      'top' => 88,
    ),
    'mobile' =>
    array (
      'edited' => true,
      'left' => 0,
      'col' => 7,
      'order' => 0,
      'top' => 54,
    ),
    'custom-1410783666947' =>
    array (
      'edited' => true,
      'left' => 6,
      'col' => 6,
      'order' => 0,
      'top' => 36,
    ),
  ),
  'close_wrapper' => false,
));

$region_13->add_element("PlainTxt", array (
  'columns' => '6',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'id' => 'module-1422428824571-1103',
  'options' =>
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<h3 class="" style="text-align: right;"><span class="upfront_theme_color_0" data-verified="redactor" data-redactor-tag="span" data-redactor-class="upfront_theme_color_0">Bricklaying &nbsp;<span class="uf_font_icon" style="font-size: 20px; top: 0px;" rel="font-size: 20px; top: 0px;" data-verified="redactor">d</span><span class="redactor-invisible-space">​</span></span></h3>',
    'type' => 'PlainTxtModel',
    'element_id' => 'object-1422428824571-1705',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'is_edited' => true,
    'row' => 6,
    'border_style' => 'none',
    'border_width' => 1,
    'border_color' => '',
    'bg_color' => '',
    'anchor' => '',
    'theme_style' => 'u-services-text',
    'breakpoint' =>
    (array)(array(
       'tablet' =>
      (array)(array(
         'row' => 11,
      )),
    )),
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1433406347111-1637',
  'new_line' => 'true',
  'wrapper_breakpoint' =>
  array (
    'tablet' =>
    array (
      'edited' => false,
      'col' => 6,
      'order' => 0,
    ),
    'mobile' =>
    array (
      'edited' => false,
      'col' => 7,
      'order' => 0,
    ),
    'custom-1410783666947' =>
    array (
      'edited' => false,
      'col' => 6,
      'order' => 0,
    ),
  ),
  'breakpoint' =>
  array (
    'tablet' =>
    array (
      'edited' => false,
      'left' => 0,
      'col' => 6,
      'order' => 0,
      'row' => 11,
    ),
    'mobile' =>
    array (
      'edited' => false,
      'left' => 0,
      'col' => 7,
      'order' => 0,
    ),
    'custom-1410783666947' =>
    array (
      'edited' => false,
      'left' => 0,
      'col' => 6,
      'order' => 0,
    ),
  ),
  'group' => 'module-group-1433406298129-1171',
));

$region_13->add_element("Uimage", array (
  'columns' => '6',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '2',
  'margin_bottom' => '0',
  'id' => 'module-1422428830962-1500',
  'options' =>
  array (
    'src' => '' . get_stylesheet_directory_uri() . '/images/archive-home/bricklaying-240x120-6927.jpg',
    'srcFull' => '' . get_stylesheet_directory_uri() . '/images/archive-home/bricklaying.jpg',
    'srcOriginal' => '' . get_stylesheet_directory_uri() . '/images/archive-home/bricklaying.jpg',
    'image_title' => '',
    'alternative_text' => '',
    'when_clicked' => false,
    'image_link' => '',
    'include_image_caption' => false,
    'image_caption' => 'My awesome image caption',
    'caption_position' => false,
    'caption_alignment' => false,
    'caption_trigger' => 'always_show',
    'image_status' => 'ok',
    'size' =>
    (array)(array(
       'width' => 240,
       'height' => 120,
    )),
    'fullSize' =>
    (array)(array(
       'width' => 240,
       'height' => 120,
    )),
    'position' =>
    (array)(array(
       'top' => 0,
       'left' => 0,
    )),
    'marginTop' => 0,
    'element_size' =>
    (array)(array(
       'width' => 240,
       'height' => 120,
    )),
    'rotation' => 0,
    'color' => '#ffffff',
    'background' => '#000000',
    'captionBackground' => '0',
    'image_id' => '1852',
    'align' => 'left',
    'stretch' => true,
    'vstretch' => true,
    'quick_swap' => false,
    'gifImage' => 0,
    'placeholder_class' => '',
    'type' => 'UimageModel',
    'view_class' => 'UimageView',
    'has_settings' => 1,
    'class' => 'c24 upfront-image',
    'id_slug' => 'image',
    'element_id' => 'object-1422428830962-1948',
    'row' => 10,
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1433406347118-1038',
  'new_line' => 'true',
  'wrapper_breakpoint' =>
  array (
    'tablet' =>
    array (
      'edited' => false,
      'col' => 6,
      'order' => 0,
    ),
    'mobile' =>
    array (
      'edited' => false,
      'col' => 7,
      'order' => 0,
    ),
    'custom-1410783666947' =>
    array (
      'edited' => false,
      'col' => 6,
      'order' => 0,
    ),
  ),
  'breakpoint' =>
  array (
    'tablet' =>
    array (
      'edited' => false,
      'left' => 0,
      'col' => 6,
      'order' => 0,
    ),
    'mobile' =>
    array (
      'edited' => false,
      'left' => 0,
      'col' => 7,
      'order' => 0,
    ),
    'custom-1410783666947' =>
    array (
      'edited' => false,
      'left' => 0,
      'col' => 6,
      'order' => 0,
    ),
  ),
  'group' => 'module-group-1433406298129-1171',
));

$region_13->add_element("PlainTxt", array (
  'columns' => '5',
  'margin_left' => '1',
  'margin_right' => '0',
  'margin_top' => '2',
  'margin_bottom' => '0',
  'id' => 'module-1422428837655-1419',
  'options' =>
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<p class="" style="text-align: right;">
	<span class="upfront_theme_color_0" data-verified="redactor" data-redactor-tag="span" data-redactor-class="upfront_theme_color_0">Erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation allmcorper san el iusto</span><br>
	<span class="uf_font_icon" style="font-size: 27px; top: 0px;" rel="font-size: 27px; top: 0px;" data-verified="redactor" data-redactor-tag="span" data-redactor-style="font-size: 27px; top: 0px;"></span>
</p>',
    'type' => 'PlainTxtModel',
    'element_id' => 'object-1422428837655-1901',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'is_edited' => true,
    'row' => 16,
    'border_style' => 'none',
    'border_width' => 1,
    'border_color' => 'rgba(0, 0, 0, 0)',
    'bg_color' => 'rgba(0, 0, 0, 0)',
    'anchor' => '',
    'theme_style' => 'u-services-text',
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1433406347125-1842',
  'new_line' => 'true',
  'wrapper_breakpoint' =>
  array (
    'tablet' =>
    array (
      'edited' => false,
      'col' => 6,
      'order' => 0,
    ),
    'mobile' =>
    array (
      'edited' => false,
      'col' => 6,
      'order' => 0,
    ),
    'custom-1410783666947' =>
    array (
      'edited' => false,
      'col' => 6,
      'order' => 0,
    ),
  ),
  'breakpoint' =>
  array (
    'tablet' =>
    array (
      'edited' => false,
      'left' => 0,
      'col' => 6,
      'order' => 0,
    ),
    'mobile' =>
    array (
      'edited' => false,
      'left' => 1,
      'col' => 5,
      'order' => 0,
    ),
    'custom-1410783666947' =>
    array (
      'edited' => false,
      'left' => 0,
      'col' => 6,
      'order' => 0,
    ),
  ),
  'group' => 'module-group-1433406298129-1171',
));

$region_13->add_element("PlainTxt", array (
  'columns' => '4',
  'margin_left' => '2',
  'margin_right' => '0',
  'margin_top' => '1',
  'margin_bottom' => '0',
  'id' => 'module-1433403494722-1900',
  'options' =>
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<p class="" style="text-align: right;"><span class="upfront_theme_color_0" data-verified="redactor" data-redactor-tag="span" data-redactor-class="upfront_theme_color_0" style="" rel=""><a target="_self" rel="entry" href="' . get_home_url() . '/service-brick/"><span class="upfront_theme_color_0" data-verified="redactor" data-redactor-tag="span" data-redactor-class="upfront_theme_color_0"><span class="uf_font_icon" style="font-size: 24px; top: 0px;" rel="font-size: 24px; top: 0px;" data-verified="redactor" data-redactor-tag="span" data-redactor-style="font-size: 24px; top: 0px;">j</span></span></a></span></p>',
    'type' => 'PlainTxtModel',
    'element_id' => 'text-object-1433403494722-1808',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'row' => 5,
    'is_edited' => true,
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1433406347129-1420',
  'new_line' => 'true',
  'wrapper_breakpoint' =>
  array (
    'tablet' =>
    array (
      'edited' => false,
      'col' => 5,
      'order' => 0,
    ),
    'mobile' =>
    array (
      'edited' => false,
      'col' => 6,
      'order' => 0,
    ),
    'custom-1410783666947' =>
    array (
      'edited' => false,
      'col' => 5,
      'order' => 0,
    ),
  ),
  'breakpoint' =>
  array (
    'tablet' =>
    array (
      'edited' => false,
      'left' => 1,
      'col' => 4,
      'order' => 0,
    ),
    'mobile' =>
    array (
      'edited' => false,
      'left' => 1,
      'col' => 5,
      'order' => 0,
    ),
    'custom-1410783666947' =>
    array (
      'edited' => false,
      'left' => 1,
      'col' => 4,
      'order' => 0,
    ),
  ),
  'group' => 'module-group-1433406298129-1171',
));

$region_13->add_group(array (
  'columns' => '6',
  'margin_left' => '1',
  'margin_right' => '0',
  'margin_top' => '6',
  'margin_bottom' => '0',
  'id' => 'module-group-1433406408885-1831',
  'type' => 'ModuleGroup',
  'wrapper_id' => 'wrapper-1432886627216-1815',
  'original_col' => 6,
  'background_color' => 'rgba(137,77,77,0)',
  'background_style' => 'full',
  'background_position_y' => 50,
  'background_position_x' => 50,
  'use_padding' => '',
  'background_type' => 'color',
  'anchor' => '',
  'theme_style' => 'no-y-padding',
  'new_line' => 'true',
  'breakpoint' =>
  array (
    'tablet' =>
    array (
      'edited' => false,
      'left' => 3,
      'col' => 6,
      'order' => 0,
    ),
    'mobile' =>
    array (
      'edited' => false,
      'left' => 0,
      'col' => 7,
      'order' => 0,
    ),
    'custom-1410783666947' =>
    array (
      'edited' => false,
      'left' => 6,
      'col' => 6,
      'order' => 0,
    ),
  ),
  'close_wrapper' => false,
));

$region_13->add_element("PlainTxt", array (
  'columns' => '6',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'id' => 'module-1433406278107-1825',
  'options' =>
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<h3 class="" style="text-align: right;"><span class="upfront_theme_color_0" data-verified="redactor" data-redactor-tag="span" data-redactor-class="upfront_theme_color_0">Plumbing &nbsp;<span class="uf_font_icon" style="font-size: 20px; top: 0px;" rel="font-size: 20px; top: 0px;" data-verified="redactor" data-redactor-tag="span" data-redactor-style="font-size: 20px; top: 0px;">e</span><span class="redactor-invisible-space" data-verified="redactor" data-redactor-tag="span" data-redactor-class="redactor-invisible-space">​</span></span></h3>',
    'type' => 'PlainTxtModel',
    'element_id' => 'object-1433406278107-1985',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'is_edited' => true,
    'row' => 6,
    'border_style' => 'none',
    'border_width' => 1,
    'border_color' => '',
    'bg_color' => '',
    'anchor' => '',
    'theme_style' => 'u-services-text',
    'breakpoint' =>
    (array)(array(
       'tablet' =>
      (array)(array(
         'row' => 11,
      )),
    )),
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1433406459061-1226',
  'new_line' => 'true',
  'wrapper_breakpoint' =>
  array (
    'tablet' =>
    array (
      'edited' => false,
      'col' => 6,
      'order' => 0,
    ),
    'mobile' =>
    array (
      'edited' => false,
      'col' => 7,
      'order' => 0,
    ),
    'custom-1410783666947' =>
    array (
      'edited' => false,
      'col' => 6,
      'order' => 0,
    ),
  ),
  'breakpoint' =>
  array (
    'tablet' =>
    array (
      'edited' => false,
      'left' => 0,
      'col' => 6,
      'order' => 0,
      'row' => 11,
    ),
    'mobile' =>
    array (
      'edited' => false,
      'left' => 0,
      'col' => 7,
      'order' => 0,
    ),
    'custom-1410783666947' =>
    array (
      'edited' => false,
      'left' => 0,
      'col' => 6,
      'order' => 0,
    ),
  ),
  'group' => 'module-group-1433406408885-1831',
));

$region_13->add_element("Uimage", array (
  'columns' => '6',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '2',
  'margin_bottom' => '0',
  'id' => 'module-1433406282618-1475',
  'options' =>
  array (
    'src' => '' . get_stylesheet_directory_uri() . '/images/archive-home/plumbing-240x120-6220.jpg',
    'srcFull' => '' . get_stylesheet_directory_uri() . '/images/archive-home/plumbing.jpg',
    'srcOriginal' => '' . get_stylesheet_directory_uri() . '/images/archive-home/plumbing.jpg',
    'image_title' => '',
    'alternative_text' => '',
    'when_clicked' => false,
    'image_link' => '',
    'include_image_caption' => false,
    'image_caption' => 'My awesome image caption',
    'caption_position' => false,
    'caption_alignment' => false,
    'caption_trigger' => 'always_show',
    'image_status' => 'ok',
    'size' =>
    (array)(array(
       'width' => 240,
       'height' => 120,
    )),
    'fullSize' =>
    (array)(array(
       'width' => 240,
       'height' => 120,
    )),
    'position' =>
    (array)(array(
       'top' => 0,
       'left' => 0,
    )),
    'marginTop' => 0,
    'element_size' =>
    (array)(array(
       'width' => 240,
       'height' => 120,
    )),
    'rotation' => 0,
    'color' => '#ffffff',
    'background' => '#000000',
    'captionBackground' => '0',
    'image_id' => '1854',
    'align' => 'left',
    'stretch' => true,
    'vstretch' => true,
    'quick_swap' => false,
    'gifImage' => 0,
    'placeholder_class' => '',
    'type' => 'UimageModel',
    'view_class' => 'UimageView',
    'has_settings' => 1,
    'class' => 'c24 upfront-image',
    'id_slug' => 'image',
    'element_id' => 'object-1433406282618-1440',
    'row' => 10,
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1433406459068-1769',
  'new_line' => 'true',
  'wrapper_breakpoint' =>
  array (
    'tablet' =>
    array (
      'edited' => false,
      'col' => 6,
      'order' => 0,
    ),
    'mobile' =>
    array (
      'edited' => false,
      'col' => 7,
      'order' => 0,
    ),
    'custom-1410783666947' =>
    array (
      'edited' => false,
      'col' => 6,
      'order' => 0,
    ),
  ),
  'breakpoint' =>
  array (
    'tablet' =>
    array (
      'edited' => false,
      'left' => 0,
      'col' => 6,
      'order' => 0,
    ),
    'mobile' =>
    array (
      'edited' => false,
      'left' => 0,
      'col' => 7,
      'order' => 0,
    ),
    'custom-1410783666947' =>
    array (
      'edited' => false,
      'left' => 0,
      'col' => 6,
      'order' => 0,
    ),
  ),
  'group' => 'module-group-1433406408885-1831',
));

$region_13->add_element("PlainTxt", array (
  'columns' => '5',
  'margin_left' => '1',
  'margin_right' => '0',
  'margin_top' => '2',
  'margin_bottom' => '0',
  'id' => 'module-1433406287083-1659',
  'options' =>
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<p class="" style="text-align: right;">
	<span class="upfront_theme_color_0" data-verified="redactor" data-redactor-tag="span" data-redactor-class="upfront_theme_color_0">Erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation allmcorper san el iusto</span><br>
	<span class="uf_font_icon" style="font-size: 27px; top: 0px;" rel="font-size: 27px; top: 0px;" data-verified="redactor" data-redactor-tag="span" data-redactor-style="font-size: 27px; top: 0px;"></span>
</p>',
    'type' => 'PlainTxtModel',
    'element_id' => 'object-1433406287083-1130',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'is_edited' => true,
    'row' => 16,
    'border_style' => 'none',
    'border_width' => 1,
    'border_color' => 'rgba(0, 0, 0, 0)',
    'bg_color' => 'rgba(0, 0, 0, 0)',
    'anchor' => '',
    'theme_style' => 'u-services-text',
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1433406459073-1893',
  'new_line' => 'true',
  'wrapper_breakpoint' =>
  array (
    'tablet' =>
    array (
      'edited' => false,
      'col' => 6,
      'order' => 0,
    ),
    'mobile' =>
    array (
      'edited' => false,
      'col' => 6,
      'order' => 0,
    ),
    'custom-1410783666947' =>
    array (
      'edited' => false,
      'col' => 6,
      'order' => 0,
    ),
  ),
  'breakpoint' =>
  array (
    'tablet' =>
    array (
      'edited' => false,
      'left' => 0,
      'col' => 6,
      'order' => 0,
    ),
    'mobile' =>
    array (
      'edited' => false,
      'left' => 1,
      'col' => 5,
      'order' => 0,
    ),
    'custom-1410783666947' =>
    array (
      'edited' => false,
      'left' => 0,
      'col' => 6,
      'order' => 0,
    ),
  ),
  'group' => 'module-group-1433406408885-1831',
));

$region_13->add_element("PlainTxt", array (
  'columns' => '4',
  'margin_left' => '2',
  'margin_right' => '0',
  'margin_top' => '1',
  'margin_bottom' => '0',
  'id' => 'module-1433406291549-1493',
  'options' =>
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<p class="" style="text-align: right;"><span class="upfront_theme_color_0" data-verified="redactor" data-redactor-tag="span" data-redactor-class="upfront_theme_color_0" style="" rel=""><a target="_self" rel="entry" href="' . get_home_url() . '/service-plumb/"><span class="upfront_theme_color_0" data-verified="redactor" data-redactor-tag="span" data-redactor-class="upfront_theme_color_0"><span class="uf_font_icon" style="font-size: 24px; top: 0px;" rel="font-size: 24px; top: 0px;" data-verified="redactor" data-redactor-tag="span" data-redactor-style="font-size: 24px; top: 0px;">j</span></span></a></span></p>',
    'type' => 'PlainTxtModel',
    'element_id' => 'object-1433406291549-1805',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'row' => 5,
    'is_edited' => true,
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1433406459076-1387',
  'new_line' => 'true',
  'wrapper_breakpoint' =>
  array (
    'tablet' =>
    array (
      'edited' => false,
      'col' => 5,
      'order' => 0,
    ),
    'mobile' =>
    array (
      'edited' => false,
      'col' => 6,
      'order' => 0,
    ),
    'custom-1410783666947' =>
    array (
      'edited' => false,
      'col' => 5,
      'order' => 0,
    ),
  ),
  'breakpoint' =>
  array (
    'tablet' =>
    array (
      'edited' => false,
      'left' => 1,
      'col' => 4,
      'order' => 0,
    ),
    'mobile' =>
    array (
      'edited' => false,
      'left' => 1,
      'col' => 5,
      'order' => 0,
    ),
    'custom-1410783666947' =>
    array (
      'edited' => false,
      'left' => 1,
      'col' => 4,
      'order' => 0,
    ),
  ),
  'group' => 'module-group-1433406408885-1831',
));

$region_13->add_group(array (
  'columns' => '6',
  'margin_left' => '1',
  'margin_right' => '0',
  'margin_top' => '6',
  'margin_bottom' => '0',
  'id' => 'module-group-1433407951043-1220',
  'type' => 'ModuleGroup',
  'wrapper_id' => 'wrapper-1432886627216-1815',
  'original_col' => 6,
  'background_color' => 'rgba(137,77,77,0)',
  'background_style' => 'full',
  'background_position_y' => 50,
  'background_position_x' => 50,
  'use_padding' => '',
  'background_type' => 'color',
  'anchor' => '',
  'theme_style' => 'no-y-padding',
  'new_line' => 'true',
  'breakpoint' =>
  array (
    'tablet' =>
    array (
      'edited' => false,
      'left' => 3,
      'col' => 6,
      'order' => 0,
    ),
    'mobile' =>
    array (
      'edited' => false,
      'left' => 0,
      'col' => 7,
      'order' => 0,
    ),
    'custom-1410783666947' =>
    array (
      'edited' => false,
      'left' => 6,
      'col' => 6,
      'order' => 0,
    ),
  ),
));

$region_13->add_element("PlainTxt", array (
  'columns' => '6',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'id' => 'module-1433406392023-1138',
  'options' =>
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<h3 class="" style="text-align: right;"><span class="upfront_theme_color_0" data-verified="redactor" data-redactor-tag="span" data-redactor-class="upfront_theme_color_0">Electrical &nbsp;<span class="uf_font_icon" style="font-size: 20px; top: 0px;" rel="font-size: 20px; top: 0px;" data-verified="redactor" data-redactor-tag="span" data-redactor-style="font-size: 20px; top: 0px;">f</span><span class="redactor-invisible-space" data-verified="redactor" data-redactor-tag="span" data-redactor-class="redactor-invisible-space">​</span></span></h3>',
    'type' => 'PlainTxtModel',
    'element_id' => 'object-1433406392023-1289',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'is_edited' => true,
    'row' => 6,
    'border_style' => 'none',
    'border_width' => 1,
    'border_color' => '',
    'bg_color' => '',
    'anchor' => '',
    'theme_style' => 'u-services-text',
    'breakpoint' =>
    (array)(array(
       'tablet' =>
      (array)(array(
         'row' => 11,
      )),
    )),
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1433407951093-1384',
  'new_line' => 'true',
  'wrapper_breakpoint' =>
  array (
    'tablet' =>
    array (
      'edited' => false,
      'col' => 6,
      'order' => 0,
    ),
    'mobile' =>
    array (
      'edited' => false,
      'col' => 7,
      'order' => 0,
    ),
    'custom-1410783666947' =>
    array (
      'edited' => false,
      'col' => 6,
      'order' => 0,
    ),
  ),
  'breakpoint' =>
  array (
    'tablet' =>
    array (
      'edited' => false,
      'left' => 0,
      'col' => 6,
      'order' => 0,
      'row' => 11,
    ),
    'mobile' =>
    array (
      'edited' => false,
      'left' => 0,
      'col' => 7,
      'order' => 0,
    ),
    'custom-1410783666947' =>
    array (
      'edited' => false,
      'left' => 0,
      'col' => 6,
      'order' => 0,
    ),
  ),
  'group' => 'module-group-1433407951043-1220',
));

$region_13->add_element("Uimage", array (
  'columns' => '6',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '2',
  'margin_bottom' => '0',
  'id' => 'module-1433406396052-1381',
  'options' =>
  array (
    'src' => '' . get_stylesheet_directory_uri() . '/images/archive-home/electrical-240x120-7937.jpg',
    'srcFull' => '' . get_stylesheet_directory_uri() . '/images/archive-home/electrical.jpg',
    'srcOriginal' => '' . get_stylesheet_directory_uri() . '/images/archive-home/electrical.jpg',
    'image_title' => '',
    'alternative_text' => '',
    'when_clicked' => false,
    'image_link' => '',
    'include_image_caption' => false,
    'image_caption' => 'My awesome image caption',
    'caption_position' => false,
    'caption_alignment' => false,
    'caption_trigger' => 'always_show',
    'image_status' => 'ok',
    'size' =>
    (array)(array(
       'width' => 240,
       'height' => 120,
    )),
    'fullSize' =>
    (array)(array(
       'width' => 240,
       'height' => 120,
    )),
    'position' =>
    (array)(array(
       'top' => 0,
       'left' => 0,
    )),
    'marginTop' => 0,
    'element_size' =>
    (array)(array(
       'width' => 240,
       'height' => 120,
    )),
    'rotation' => 0,
    'color' => '#ffffff',
    'background' => '#000000',
    'captionBackground' => '0',
    'image_id' => '1879',
    'align' => 'left',
    'stretch' => true,
    'vstretch' => true,
    'quick_swap' => false,
    'gifImage' => 0,
    'placeholder_class' => '',
    'type' => 'UimageModel',
    'view_class' => 'UimageView',
    'has_settings' => 1,
    'class' => 'c24 upfront-image',
    'id_slug' => 'image',
    'element_id' => 'object-1433406396052-1059',
    'row' => 10,
    'anchor' => '',
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1433407951095-1410',
  'new_line' => 'true',
  'wrapper_breakpoint' =>
  array (
    'tablet' =>
    array (
      'edited' => false,
      'col' => 6,
      'order' => 0,
    ),
    'mobile' =>
    array (
      'edited' => false,
      'col' => 7,
      'order' => 0,
    ),
    'custom-1410783666947' =>
    array (
      'edited' => false,
      'col' => 6,
      'order' => 0,
    ),
  ),
  'breakpoint' =>
  array (
    'tablet' =>
    array (
      'edited' => false,
      'left' => 0,
      'col' => 6,
      'order' => 0,
    ),
    'mobile' =>
    array (
      'edited' => false,
      'left' => 0,
      'col' => 7,
      'order' => 0,
    ),
    'custom-1410783666947' =>
    array (
      'edited' => false,
      'left' => 0,
      'col' => 6,
      'order' => 0,
    ),
  ),
  'group' => 'module-group-1433407951043-1220',
));

$region_13->add_element("PlainTxt", array (
  'columns' => '5',
  'margin_left' => '1',
  'margin_right' => '0',
  'margin_top' => '2',
  'margin_bottom' => '0',
  'id' => 'module-1433406399053-1234',
  'options' =>
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<p class="" style="text-align: right;">
	<span class="upfront_theme_color_0" data-verified="redactor" data-redactor-tag="span" data-redactor-class="upfront_theme_color_0">Erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation allmcorper san el iusto</span><br>
	<span class="uf_font_icon" style="font-size: 27px; top: 0px;" rel="font-size: 27px; top: 0px;" data-verified="redactor" data-redactor-tag="span" data-redactor-style="font-size: 27px; top: 0px;"></span>
</p>',
    'type' => 'PlainTxtModel',
    'element_id' => 'object-1433406399054-1803',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'is_edited' => true,
    'row' => 16,
    'border_style' => 'none',
    'border_width' => 1,
    'border_color' => 'rgba(0, 0, 0, 0)',
    'bg_color' => 'rgba(0, 0, 0, 0)',
    'anchor' => '',
    'theme_style' => 'u-services-text',
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1433407951096-1824',
  'new_line' => 'true',
  'wrapper_breakpoint' =>
  array (
    'tablet' =>
    array (
      'edited' => false,
      'col' => 6,
      'order' => 0,
    ),
    'mobile' =>
    array (
      'edited' => false,
      'col' => 6,
      'order' => 0,
    ),
    'custom-1410783666947' =>
    array (
      'edited' => false,
      'col' => 6,
      'order' => 0,
    ),
  ),
  'breakpoint' =>
  array (
    'tablet' =>
    array (
      'edited' => false,
      'left' => 0,
      'col' => 6,
      'order' => 0,
    ),
    'mobile' =>
    array (
      'edited' => false,
      'left' => 1,
      'col' => 5,
      'order' => 0,
    ),
    'custom-1410783666947' =>
    array (
      'edited' => false,
      'left' => 0,
      'col' => 6,
      'order' => 0,
    ),
  ),
  'group' => 'module-group-1433407951043-1220',
));

$region_13->add_element("PlainTxt", array (
  'columns' => '4',
  'margin_left' => '2',
  'margin_right' => '0',
  'margin_top' => '1',
  'margin_bottom' => '0',
  'id' => 'module-1433406402068-1392',
  'options' =>
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<p class="" style="text-align: right;"><span class="upfront_theme_color_0" data-verified="redactor" data-redactor-tag="span" data-redactor-class="upfront_theme_color_0" style="" rel=""><a target="_self" rel="entry" href="' . get_home_url() . '/service-electrical/"><span class="upfront_theme_color_0" data-verified="redactor" data-redactor-tag="span" data-redactor-class="upfront_theme_color_0"><span class="uf_font_icon" style="font-size: 24px; top: 0px;" rel="font-size: 24px; top: 0px;" data-verified="redactor" data-redactor-tag="span" data-redactor-style="font-size: 24px; top: 0px;">j</span></span></a></span></p>',
    'type' => 'PlainTxtModel',
    'element_id' => 'object-1433406402068-1466',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'row' => 5,
    'is_edited' => true,
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1433407951097-1113',
  'new_line' => 'true',
  'wrapper_breakpoint' =>
  array (
    'tablet' =>
    array (
      'edited' => false,
      'col' => 5,
      'order' => 0,
    ),
    'mobile' =>
    array (
      'edited' => false,
      'col' => 6,
      'order' => 0,
    ),
    'custom-1410783666947' =>
    array (
      'edited' => false,
      'col' => 5,
      'order' => 0,
    ),
  ),
  'breakpoint' =>
  array (
    'tablet' =>
    array (
      'edited' => false,
      'left' => 1,
      'col' => 4,
      'order' => 0,
    ),
    'mobile' =>
    array (
      'edited' => false,
      'left' => 1,
      'col' => 5,
      'order' => 0,
    ),
    'custom-1410783666947' =>
    array (
      'edited' => false,
      'left' => 1,
      'col' => 4,
      'order' => 0,
    ),
  ),
  'group' => 'module-group-1433407951043-1220',
));

$region_13->add_group(array (
  'columns' => '6',
  'margin_left' => '10',
  'margin_right' => '0',
  'margin_top' => '16',
  'margin_bottom' => '0',
  'id' => 'module-group-1433408441587-1485',
  'type' => 'ModuleGroup',
  'wrapper_id' => 'wrapper-1433408406557-1087',
  'original_col' => 6,
  'background_color' => 'rgba(137,77,77,0)',
  'background_style' => 'full',
  'background_position_y' => 50,
  'background_position_x' => 50,
  'use_padding' => '',
  'background_type' => 'color',
  'anchor' => '',
  'theme_style' => 'no-y-padding',
  'wrapper_breakpoint' =>
  array (
    'tablet' =>
    array (
      'edited' => true,
      'col' => 9,
      'order' => 2,
      'clear' => true,
    ),
    'mobile' =>
    array (
      'edited' => true,
      'col' => 7,
      'order' => 2,
      'clear' => true,
    ),
    'custom-1410783666947' =>
    array (
      'edited' => true,
      'col' => 12,
      'order' => 3,
      'clear' => true,
    ),
  ),
  'breakpoint' =>
  array (
    'tablet' =>
    array (
      'edited' => false,
      'left' => 3,
      'col' => 6,
      'order' => 0,
    ),
    'mobile' =>
    array (
      'edited' => false,
      'left' => 0,
      'col' => 7,
      'order' => 0,
    ),
    'custom-1410783666947' =>
    array (
      'edited' => false,
      'left' => 6,
      'col' => 6,
      'order' => 0,
    ),
  ),
  'close_wrapper' => false,
));

$region_13->add_element("PlainTxt", array (
  'columns' => '6',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'id' => 'module-1433408404419-1280',
  'options' =>
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<h3 class=""><span class="upfront_theme_color_0" data-verified="redactor" data-redactor-tag="span" data-redactor-class="upfront_theme_color_0"><span class="uf_font_icon" style="font-size: 20px; top: 0px;" rel="font-size: 20px; top: 0px;" data-verified="redactor" data-redactor-tag="span" data-redactor-style="font-size: 20px; top: 0px;">g</span><span class="redactor-invisible-space" data-verified="redactor" data-redactor-tag="span" data-redactor-class="redactor-invisible-space">​</span>&nbsp; Fencing</span></h3>',
    'type' => 'PlainTxtModel',
    'element_id' => 'object-1433408404420-1411',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'is_edited' => true,
    'row' => 6,
    'border_style' => 'none',
    'border_width' => 1,
    'border_color' => '',
    'bg_color' => '',
    'anchor' => '',
    'theme_style' => 'u-services-text',
    'breakpoint' =>
    (array)(array(
       'tablet' =>
      (array)(array(
         'row' => 11,
      )),
    )),
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1433408454891-1805',
  'new_line' => 'true',
  'wrapper_breakpoint' =>
  array (
    'tablet' =>
    array (
      'edited' => false,
      'col' => 6,
      'order' => 0,
    ),
    'mobile' =>
    array (
      'edited' => false,
      'col' => 7,
      'order' => 0,
    ),
    'custom-1410783666947' =>
    array (
      'edited' => false,
      'col' => 6,
      'order' => 0,
    ),
  ),
  'breakpoint' =>
  array (
    'tablet' =>
    array (
      'edited' => false,
      'left' => 0,
      'col' => 6,
      'order' => 0,
      'row' => 11,
    ),
    'mobile' =>
    array (
      'edited' => false,
      'left' => 0,
      'col' => 7,
      'order' => 0,
    ),
    'custom-1410783666947' =>
    array (
      'edited' => false,
      'left' => 0,
      'col' => 6,
      'order' => 0,
    ),
  ),
  'group' => 'module-group-1433408441587-1485',
));

$region_13->add_element("Uimage", array (
  'columns' => '6',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '2',
  'margin_bottom' => '0',
  'id' => 'module-1433408407863-1278',
  'options' =>
  array (
    'src' => '' . get_stylesheet_directory_uri() . '/images/archive-home/fencing-240x120-9850.jpg',
    'srcFull' => '' . get_stylesheet_directory_uri() . '/images/archive-home/fencing.jpg',
    'srcOriginal' => '' . get_stylesheet_directory_uri() . '/images/archive-home/fencing.jpg',
    'image_title' => '',
    'alternative_text' => '',
    'when_clicked' => false,
    'image_link' => '',
    'include_image_caption' => false,
    'image_caption' => 'My awesome image caption',
    'caption_position' => false,
    'caption_alignment' => false,
    'caption_trigger' => 'always_show',
    'image_status' => 'ok',
    'size' =>
    (array)(array(
       'width' => 240,
       'height' => 120,
    )),
    'fullSize' =>
    (array)(array(
       'width' => 240,
       'height' => 120,
    )),
    'position' =>
    (array)(array(
       'top' => 0,
       'left' => 0,
    )),
    'marginTop' => 0,
    'element_size' =>
    (array)(array(
       'width' => 240,
       'height' => 120,
    )),
    'rotation' => 0,
    'color' => '#ffffff',
    'background' => '#000000',
    'captionBackground' => '0',
    'image_id' => '1855',
    'align' => 'left',
    'stretch' => true,
    'vstretch' => true,
    'quick_swap' => false,
    'gifImage' => 0,
    'placeholder_class' => '',
    'type' => 'UimageModel',
    'view_class' => 'UimageView',
    'has_settings' => 1,
    'class' => 'c24 upfront-image',
    'id_slug' => 'image',
    'element_id' => 'object-1433408407863-1814',
    'row' => 10,
    'anchor' => '',
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1433408454897-1535',
  'new_line' => 'true',
  'wrapper_breakpoint' =>
  array (
    'tablet' =>
    array (
      'edited' => false,
      'col' => 6,
      'order' => 0,
    ),
    'mobile' =>
    array (
      'edited' => false,
      'col' => 7,
      'order' => 0,
    ),
    'custom-1410783666947' =>
    array (
      'edited' => false,
      'col' => 6,
      'order' => 0,
    ),
  ),
  'breakpoint' =>
  array (
    'tablet' =>
    array (
      'edited' => false,
      'left' => 0,
      'col' => 6,
      'order' => 0,
    ),
    'mobile' =>
    array (
      'edited' => false,
      'left' => 0,
      'col' => 7,
      'order' => 0,
    ),
    'custom-1410783666947' =>
    array (
      'edited' => false,
      'left' => 0,
      'col' => 6,
      'order' => 0,
    ),
  ),
  'group' => 'module-group-1433408441587-1485',
));

$region_13->add_element("PlainTxt", array (
  'columns' => '5',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '2',
  'margin_bottom' => '0',
  'id' => 'module-1433408413341-1502',
  'options' =>
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<p class="">
	<span class="upfront_theme_color_0" data-verified="redactor" data-redactor-tag="span" data-redactor-class="upfront_theme_color_0">Erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation allmcorper san el iusto</span><br>
	<span class="uf_font_icon" style="font-size: 27px; top: 0px;" rel="font-size: 27px; top: 0px;" data-verified="redactor" data-redactor-tag="span" data-redactor-style="font-size: 27px; top: 0px;"></span>
</p>',
    'type' => 'PlainTxtModel',
    'element_id' => 'object-1433408413341-1433',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'is_edited' => true,
    'row' => 16,
    'border_style' => 'none',
    'border_width' => 1,
    'border_color' => 'rgba(0, 0, 0, 0)',
    'bg_color' => 'rgba(0, 0, 0, 0)',
    'anchor' => '',
    'theme_style' => 'u-services-text',
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1433408454903-1992',
  'new_line' => 'true',
  'wrapper_breakpoint' =>
  array (
    'tablet' =>
    array (
      'edited' => false,
      'col' => 6,
      'order' => 0,
    ),
    'mobile' =>
    array (
      'edited' => false,
      'col' => 6,
      'order' => 0,
    ),
    'custom-1410783666947' =>
    array (
      'edited' => false,
      'col' => 6,
      'order' => 0,
    ),
  ),
  'breakpoint' =>
  array (
    'tablet' =>
    array (
      'edited' => false,
      'left' => 0,
      'col' => 6,
      'order' => 0,
    ),
    'mobile' =>
    array (
      'edited' => false,
      'left' => 1,
      'col' => 5,
      'order' => 0,
    ),
    'custom-1410783666947' =>
    array (
      'edited' => false,
      'left' => 0,
      'col' => 6,
      'order' => 0,
    ),
  ),
  'group' => 'module-group-1433408441587-1485',
));

$region_13->add_element("PlainTxt", array (
  'columns' => '4',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '1',
  'margin_bottom' => '0',
  'id' => 'module-1433408416917-1768',
  'options' =>
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<p class=""><span class="upfront_theme_color_0" data-verified="redactor" data-redactor-tag="span" data-redactor-class="upfront_theme_color_0" style="" rel=""><a target="_self" rel="entry" href="' . get_home_url() . '/service-fenc/"><span class="upfront_theme_color_0" data-verified="redactor" data-redactor-tag="span" data-redactor-class="upfront_theme_color_0"><span class="uf_font_icon" style="font-size: 24px; top: 0px;" rel="font-size: 24px; top: 0px;" data-verified="redactor" data-redactor-tag="span" data-redactor-style="font-size: 24px; top: 0px;">j</span></span></a></span></p>',
    'type' => 'PlainTxtModel',
    'element_id' => 'object-1433408416917-1502',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'row' => 5,
    'is_edited' => true,
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1433408454906-1619',
  'new_line' => 'true',
  'wrapper_breakpoint' =>
  array (
    'tablet' =>
    array (
      'edited' => false,
      'col' => 5,
      'order' => 0,
    ),
    'mobile' =>
    array (
      'edited' => false,
      'col' => 6,
      'order' => 0,
    ),
    'custom-1410783666947' =>
    array (
      'edited' => false,
      'col' => 5,
      'order' => 0,
    ),
  ),
  'breakpoint' =>
  array (
    'tablet' =>
    array (
      'edited' => false,
      'left' => 1,
      'col' => 4,
      'order' => 0,
    ),
    'mobile' =>
    array (
      'edited' => false,
      'left' => 1,
      'col' => 5,
      'order' => 0,
    ),
    'custom-1410783666947' =>
    array (
      'edited' => false,
      'left' => 1,
      'col' => 4,
      'order' => 0,
    ),
  ),
  'group' => 'module-group-1433408441587-1485',
));

$region_13->add_group(array (
  'columns' => '6',
  'margin_left' => '10',
  'margin_right' => '0',
  'margin_top' => '6',
  'margin_bottom' => '0',
  'id' => 'module-group-1433408489130-1464',
  'type' => 'ModuleGroup',
  'wrapper_id' => 'wrapper-1433408406557-1087',
  'original_col' => 6,
  'background_color' => 'rgba(137,77,77,0)',
  'background_style' => 'full',
  'background_position_y' => 50,
  'background_position_x' => 50,
  'use_padding' => '',
  'background_type' => 'color',
  'anchor' => '',
  'theme_style' => 'no-y-padding',
  'breakpoint' =>
  array (
    'tablet' =>
    array (
      'edited' => false,
      'left' => 3,
      'col' => 6,
      'order' => 0,
    ),
    'mobile' =>
    array (
      'edited' => false,
      'left' => 0,
      'col' => 7,
      'order' => 0,
    ),
    'custom-1410783666947' =>
    array (
      'edited' => false,
      'left' => 6,
      'col' => 6,
      'order' => 0,
    ),
  ),
  'close_wrapper' => false,
));

$region_13->add_element("PlainTxt", array (
  'columns' => '6',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'id' => 'module-1433408454739-1282',
  'options' =>
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<h3 class=""><span class="upfront_theme_color_0" data-verified="redactor" data-redactor-tag="span" data-redactor-class="upfront_theme_color_0"><span class="uf_font_icon" style="font-size: 20px; top: 0px;" rel="font-size: 20px; top: 0px;" data-verified="redactor" data-redactor-tag="span" data-redactor-style="font-size: 20px; top: 0px;">h</span><span class="redactor-invisible-space" data-verified="redactor" data-redactor-tag="span" data-redactor-class="redactor-invisible-space">​</span>&nbsp; Windows</span></h3>',
    'type' => 'PlainTxtModel',
    'element_id' => 'object-1433408454740-1759',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'is_edited' => true,
    'row' => 6,
    'border_style' => 'none',
    'border_width' => 1,
    'border_color' => '',
    'bg_color' => '',
    'anchor' => '',
    'theme_style' => 'u-services-text',
    'breakpoint' =>
    (array)(array(
       'tablet' =>
      (array)(array(
         'row' => 11,
      )),
    )),
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1433408489178-1099',
  'new_line' => 'true',
  'wrapper_breakpoint' =>
  array (
    'tablet' =>
    array (
      'edited' => false,
      'col' => 6,
      'order' => 0,
    ),
    'mobile' =>
    array (
      'edited' => false,
      'col' => 7,
      'order' => 0,
    ),
    'custom-1410783666947' =>
    array (
      'edited' => false,
      'col' => 6,
      'order' => 0,
    ),
  ),
  'breakpoint' =>
  array (
    'tablet' =>
    array (
      'edited' => false,
      'left' => 0,
      'col' => 6,
      'order' => 0,
      'row' => 11,
    ),
    'mobile' =>
    array (
      'edited' => false,
      'left' => 0,
      'col' => 7,
      'order' => 0,
    ),
    'custom-1410783666947' =>
    array (
      'edited' => false,
      'left' => 0,
      'col' => 6,
      'order' => 0,
    ),
  ),
  'group' => 'module-group-1433408489130-1464',
));

$region_13->add_element("Uimage", array (
  'columns' => '6',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '2',
  'margin_bottom' => '0',
  'id' => 'module-1433408457768-1767',
  'options' =>
  array (
    'src' => '' . get_stylesheet_directory_uri() . '/images/archive-home/windows-240x120-6119.jpg',
    'srcFull' => '' . get_stylesheet_directory_uri() . '/images/archive-home/windows.jpg',
    'srcOriginal' => '' . get_stylesheet_directory_uri() . '/images/archive-home/windows.jpg',
    'image_title' => '',
    'alternative_text' => '',
    'when_clicked' => false,
    'image_link' => '',
    'include_image_caption' => false,
    'image_caption' => 'My awesome image caption',
    'caption_position' => false,
    'caption_alignment' => false,
    'caption_trigger' => 'always_show',
    'image_status' => 'ok',
    'size' =>
    (array)(array(
       'width' => 240,
       'height' => 120,
    )),
    'fullSize' =>
    (array)(array(
       'width' => 240,
       'height' => 120,
    )),
    'position' =>
    (array)(array(
       'top' => 0,
       'left' => 0,
    )),
    'marginTop' => 0,
    'element_size' =>
    (array)(array(
       'width' => 240,
       'height' => 120,
    )),
    'rotation' => 0,
    'color' => '#ffffff',
    'background' => '#000000',
    'captionBackground' => '0',
    'image_id' => '1856',
    'align' => 'left',
    'stretch' => true,
    'vstretch' => true,
    'quick_swap' => false,
    'gifImage' => 0,
    'placeholder_class' => '',
    'type' => 'UimageModel',
    'view_class' => 'UimageView',
    'has_settings' => 1,
    'class' => 'c24 upfront-image',
    'id_slug' => 'image',
    'element_id' => 'object-1433408457768-1995',
    'row' => 10,
    'anchor' => '',
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1433408489180-1450',
  'new_line' => 'true',
  'wrapper_breakpoint' =>
  array (
    'tablet' =>
    array (
      'edited' => false,
      'col' => 6,
      'order' => 0,
    ),
    'mobile' =>
    array (
      'edited' => false,
      'col' => 7,
      'order' => 0,
    ),
    'custom-1410783666947' =>
    array (
      'edited' => false,
      'col' => 6,
      'order' => 0,
    ),
  ),
  'breakpoint' =>
  array (
    'tablet' =>
    array (
      'edited' => false,
      'left' => 0,
      'col' => 6,
      'order' => 0,
    ),
    'mobile' =>
    array (
      'edited' => false,
      'left' => 0,
      'col' => 7,
      'order' => 0,
    ),
    'custom-1410783666947' =>
    array (
      'edited' => false,
      'left' => 0,
      'col' => 6,
      'order' => 0,
    ),
  ),
  'group' => 'module-group-1433408489130-1464',
));

$region_13->add_element("PlainTxt", array (
  'columns' => '5',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '2',
  'margin_bottom' => '0',
  'id' => 'module-1433408461219-1337',
  'options' =>
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<p class="">
	<span class="upfront_theme_color_0" data-verified="redactor" data-redactor-tag="span" data-redactor-class="upfront_theme_color_0">Erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation allmcorper san el iusto</span><br>
	<span class="uf_font_icon" style="font-size: 27px; top: 0px;" rel="font-size: 27px; top: 0px;" data-verified="redactor" data-redactor-tag="span" data-redactor-style="font-size: 27px; top: 0px;"></span>
</p>',
    'type' => 'PlainTxtModel',
    'element_id' => 'object-1433408461220-1464',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'is_edited' => true,
    'row' => 16,
    'border_style' => 'none',
    'border_width' => 1,
    'border_color' => 'rgba(0, 0, 0, 0)',
    'bg_color' => 'rgba(0, 0, 0, 0)',
    'anchor' => '',
    'theme_style' => 'u-services-text',
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1433408489181-1904',
  'new_line' => 'true',
  'wrapper_breakpoint' =>
  array (
    'tablet' =>
    array (
      'edited' => false,
      'col' => 6,
      'order' => 0,
    ),
    'mobile' =>
    array (
      'edited' => false,
      'col' => 6,
      'order' => 0,
    ),
    'custom-1410783666947' =>
    array (
      'edited' => false,
      'col' => 6,
      'order' => 0,
    ),
  ),
  'breakpoint' =>
  array (
    'tablet' =>
    array (
      'edited' => false,
      'left' => 0,
      'col' => 6,
      'order' => 0,
    ),
    'mobile' =>
    array (
      'edited' => false,
      'left' => 1,
      'col' => 5,
      'order' => 0,
    ),
    'custom-1410783666947' =>
    array (
      'edited' => false,
      'left' => 0,
      'col' => 6,
      'order' => 0,
    ),
  ),
  'group' => 'module-group-1433408489130-1464',
));

$region_13->add_element("PlainTxt", array (
  'columns' => '4',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '1',
  'margin_bottom' => '0',
  'id' => 'module-1433408465325-1983',
  'options' =>
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<p class=""><span class="upfront_theme_color_0" data-verified="redactor" data-redactor-tag="span" data-redactor-class="upfront_theme_color_0" style="" rel=""><a target="_self" rel="entry" href="' . get_home_url() . '/service-windows/"><span class="upfront_theme_color_0" data-verified="redactor" data-redactor-tag="span" data-redactor-class="upfront_theme_color_0"><span class="uf_font_icon" style="font-size: 24px; top: 0px;" rel="font-size: 24px; top: 0px;" data-verified="redactor" data-redactor-tag="span" data-redactor-style="font-size: 24px; top: 0px;">j</span></span></a></span></p>',
    'type' => 'PlainTxtModel',
    'element_id' => 'object-1433408465325-1138',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'row' => 5,
    'is_edited' => true,
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1433408489182-1278',
  'new_line' => 'true',
  'wrapper_breakpoint' =>
  array (
    'tablet' =>
    array (
      'edited' => false,
      'col' => 5,
      'order' => 0,
    ),
    'mobile' =>
    array (
      'edited' => false,
      'col' => 6,
      'order' => 0,
    ),
    'custom-1410783666947' =>
    array (
      'edited' => false,
      'col' => 5,
      'order' => 0,
    ),
  ),
  'breakpoint' =>
  array (
    'tablet' =>
    array (
      'edited' => false,
      'left' => 1,
      'col' => 4,
      'order' => 0,
    ),
    'mobile' =>
    array (
      'edited' => false,
      'left' => 1,
      'col' => 5,
      'order' => 0,
    ),
    'custom-1410783666947' =>
    array (
      'edited' => false,
      'left' => 1,
      'col' => 4,
      'order' => 0,
    ),
  ),
  'group' => 'module-group-1433408489130-1464',
));

$region_13->add_group(array (
  'columns' => '6',
  'margin_left' => '10',
  'margin_right' => '0',
  'margin_top' => '6',
  'margin_bottom' => '0',
  'id' => 'module-group-1433408599187-1298',
  'type' => 'ModuleGroup',
  'wrapper_id' => 'wrapper-1433408406557-1087',
  'original_col' => 6,
  'background_color' => 'rgba(137,77,77,0)',
  'background_style' => 'full',
  'background_position_y' => 50,
  'background_position_x' => 50,
  'use_padding' => '',
  'background_type' => 'color',
  'anchor' => '',
  'theme_style' => 'no-y-padding',
  'breakpoint' =>
  array (
    'tablet' =>
    array (
      'edited' => false,
      'left' => 3,
      'col' => 6,
      'order' => 0,
    ),
    'mobile' =>
    array (
      'edited' => false,
      'left' => 0,
      'col' => 7,
      'order' => 0,
    ),
    'custom-1410783666947' =>
    array (
      'edited' => false,
      'left' => 6,
      'col' => 6,
      'order' => 0,
    ),
  ),
));

$region_13->add_element("PlainTxt", array (
  'columns' => '6',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'id' => 'module-1433408499718-1760',
  'options' =>
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<h3 class=""><span class="upfront_theme_color_0" data-verified="redactor" data-redactor-tag="span" data-redactor-class="upfront_theme_color_0"><span class="uf_font_icon" style="font-size: 20px; top: 0px;" rel="font-size: 20px; top: 0px;" data-verified="redactor" data-redactor-tag="span" data-redactor-style="font-size: 20px; top: 0px;">i</span><span class="redactor-invisible-space" data-verified="redactor" data-redactor-tag="span" data-redactor-class="redactor-invisible-space">​</span>&nbsp; Roofing</span></h3>',
    'type' => 'PlainTxtModel',
    'element_id' => 'object-1433408499718-1073',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'is_edited' => true,
    'row' => 6,
    'border_style' => 'none',
    'border_width' => 1,
    'border_color' => '',
    'bg_color' => '',
    'anchor' => '',
    'theme_style' => 'u-services-text',
    'breakpoint' =>
    (array)(array(
       'tablet' =>
      (array)(array(
         'row' => 11,
      )),
    )),
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1433408599236-1457',
  'new_line' => 'true',
  'wrapper_breakpoint' =>
  array (
    'tablet' =>
    array (
      'edited' => false,
      'col' => 6,
      'order' => 0,
    ),
    'mobile' =>
    array (
      'edited' => false,
      'col' => 7,
      'order' => 0,
    ),
    'custom-1410783666947' =>
    array (
      'edited' => false,
      'col' => 6,
      'order' => 0,
    ),
  ),
  'breakpoint' =>
  array (
    'tablet' =>
    array (
      'edited' => false,
      'left' => 0,
      'col' => 6,
      'order' => 0,
      'row' => 11,
    ),
    'mobile' =>
    array (
      'edited' => false,
      'left' => 0,
      'col' => 7,
      'order' => 0,
    ),
    'custom-1410783666947' =>
    array (
      'edited' => false,
      'left' => 0,
      'col' => 6,
      'order' => 0,
    ),
  ),
  'group' => 'module-group-1433408599187-1298',
));

$region_13->add_element("Uimage", array (
  'columns' => '6',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '2',
  'margin_bottom' => '0',
  'id' => 'module-1433408504017-1785',
  'options' =>
  array (
    'src' => '' . get_stylesheet_directory_uri() . '/images/archive-home/roof-240x120-9421.jpg',
    'srcFull' => '' . get_stylesheet_directory_uri() . '/images/archive-home/roof.jpg',
    'srcOriginal' => '' . get_stylesheet_directory_uri() . '/images/archive-home/roof.jpg',
    'image_title' => '',
    'alternative_text' => '',
    'when_clicked' => false,
    'image_link' => '',
    'include_image_caption' => false,
    'image_caption' => 'My awesome image caption',
    'caption_position' => false,
    'caption_alignment' => false,
    'caption_trigger' => 'always_show',
    'image_status' => 'ok',
    'size' =>
    (array)(array(
       'width' => 240,
       'height' => 120,
    )),
    'fullSize' =>
    (array)(array(
       'width' => 240,
       'height' => 120,
    )),
    'position' =>
    (array)(array(
       'top' => 0,
       'left' => 0,
    )),
    'marginTop' => 0,
    'element_size' =>
    (array)(array(
       'width' => 240,
       'height' => 120,
    )),
    'rotation' => 0,
    'color' => '#ffffff',
    'background' => '#000000',
    'captionBackground' => '0',
    'image_id' => '1858',
    'align' => 'left',
    'stretch' => true,
    'vstretch' => true,
    'quick_swap' => false,
    'gifImage' => 0,
    'placeholder_class' => '',
    'type' => 'UimageModel',
    'view_class' => 'UimageView',
    'has_settings' => 1,
    'class' => 'c24 upfront-image',
    'id_slug' => 'image',
    'element_id' => 'object-1433408504017-1533',
    'row' => 10,
    'anchor' => '',
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1433408599237-1774',
  'new_line' => 'true',
  'wrapper_breakpoint' =>
  array (
    'tablet' =>
    array (
      'edited' => false,
      'col' => 6,
      'order' => 0,
    ),
    'mobile' =>
    array (
      'edited' => false,
      'col' => 7,
      'order' => 0,
    ),
    'custom-1410783666947' =>
    array (
      'edited' => false,
      'col' => 6,
      'order' => 0,
    ),
  ),
  'breakpoint' =>
  array (
    'tablet' =>
    array (
      'edited' => false,
      'left' => 0,
      'col' => 6,
      'order' => 0,
    ),
    'mobile' =>
    array (
      'edited' => false,
      'left' => 0,
      'col' => 7,
      'order' => 0,
    ),
    'custom-1410783666947' =>
    array (
      'edited' => false,
      'left' => 0,
      'col' => 6,
      'order' => 0,
    ),
  ),
  'group' => 'module-group-1433408599187-1298',
));

$region_13->add_element("PlainTxt", array (
  'columns' => '5',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '2',
  'margin_bottom' => '0',
  'id' => 'module-1433408507840-1391',
  'options' =>
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<p class="">
	<span class="upfront_theme_color_0" data-verified="redactor" data-redactor-tag="span" data-redactor-class="upfront_theme_color_0">Erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation allmcorper san el iusto</span><br>
	<span class="uf_font_icon" style="font-size: 27px; top: 0px;" rel="font-size: 27px; top: 0px;" data-verified="redactor" data-redactor-tag="span" data-redactor-style="font-size: 27px; top: 0px;"></span>
</p>',
    'type' => 'PlainTxtModel',
    'element_id' => 'object-1433408507840-1352',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'is_edited' => true,
    'row' => 16,
    'border_style' => 'none',
    'border_width' => 1,
    'border_color' => 'rgba(0, 0, 0, 0)',
    'bg_color' => 'rgba(0, 0, 0, 0)',
    'anchor' => '',
    'theme_style' => 'u-services-text',
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1433408599238-1043',
  'new_line' => 'true',
  'wrapper_breakpoint' =>
  array (
    'tablet' =>
    array (
      'edited' => false,
      'col' => 6,
      'order' => 0,
    ),
    'mobile' =>
    array (
      'edited' => false,
      'col' => 6,
      'order' => 0,
    ),
    'custom-1410783666947' =>
    array (
      'edited' => false,
      'col' => 6,
      'order' => 0,
    ),
  ),
  'breakpoint' =>
  array (
    'tablet' =>
    array (
      'edited' => false,
      'left' => 0,
      'col' => 6,
      'order' => 0,
    ),
    'mobile' =>
    array (
      'edited' => false,
      'left' => 1,
      'col' => 5,
      'order' => 0,
    ),
    'custom-1410783666947' =>
    array (
      'edited' => false,
      'left' => 0,
      'col' => 6,
      'order' => 0,
    ),
  ),
  'group' => 'module-group-1433408599187-1298',
));

$region_13->add_element("PlainTxt", array (
  'columns' => '4',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '1',
  'margin_bottom' => '0',
  'id' => 'module-1433408512013-1267',
  'options' =>
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<p class=""><span class="upfront_theme_color_0" data-verified="redactor" data-redactor-tag="span" data-redactor-class="upfront_theme_color_0" style="" rel=""><a target="_self" rel="entry" href="' . get_home_url() . '/service-roof/"><span class="upfront_theme_color_0" data-verified="redactor" data-redactor-tag="span" data-redactor-class="upfront_theme_color_0"><span class="uf_font_icon" style="font-size: 24px; top: 0px;" rel="font-size: 24px; top: 0px;" data-verified="redactor" data-redactor-tag="span" data-redactor-style="font-size: 24px; top: 0px;">j</span></span></a></span></p>',
    'type' => 'PlainTxtModel',
    'element_id' => 'object-1433408512013-1791',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'row' => 5,
    'is_edited' => true,
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1433408599239-1018',
  'new_line' => 'true',
  'wrapper_breakpoint' =>
  array (
    'tablet' =>
    array (
      'edited' => false,
      'col' => 5,
      'order' => 0,
    ),
    'mobile' =>
    array (
      'edited' => false,
      'col' => 6,
      'order' => 0,
    ),
    'custom-1410783666947' =>
    array (
      'edited' => false,
      'col' => 5,
      'order' => 0,
    ),
  ),
  'breakpoint' =>
  array (
    'tablet' =>
    array (
      'edited' => false,
      'left' => 1,
      'col' => 4,
      'order' => 0,
    ),
    'mobile' =>
    array (
      'edited' => false,
      'left' => 1,
      'col' => 5,
      'order' => 0,
    ),
    'custom-1410783666947' =>
    array (
      'edited' => false,
      'left' => 1,
      'col' => 4,
      'order' => 0,
    ),
  ),
  'group' => 'module-group-1433408599187-1298',
));

$regions->add($region_13);

$quote = upfront_create_region(
			array (
  'name' => 'quote',
  'title' => 'Quote',
  'type' => 'wide',
  'scope' => 'local',
  'container' => 'quote',
  'position' => 1,
  'allow_sidebar' => true,
),
			array (
  'row' => 172,
  'background_type' => 'color',
  'nav_region' => '',
  'background_color' => '#ufc2',
  'breakpoint' =>
  (array)(array(
     'tablet' =>
    (array)(array(
       'edited' => true,
       'row' => 363,
    )),
     'mobile' =>
    (array)(array(
       'edited' => true,
       'row' => 305,
    )),
     'custom-1410783666947' =>
    (array)(array(
       'edited' => true,
       'row' => 345,
    )),
  )),
)
			);

$quote->add_element("PlainTxt", array (
  'columns' => '24',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '17',
  'margin_bottom' => '0',
  'id' => 'module-1412779180680-1829',
  'options' =>
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<h2 class="" style="text-align: center;">Need help right now? No problem!</h2>',
    'type' => 'PlainTxtModel',
    'element_id' => 'text-object-1412779180680-1452',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'is_edited' => true,
    'border_style' => 'none',
    'border_width' => 1,
    'border_color' => 'rgba(0, 0, 0, 0)',
    'bg_color' => 'rgba(0, 0, 0, 0)',
    'anchor' => 'quote',
    'row' => 8,
    'theme_style' => 'u-sub-heading',
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1405604490158-1724',
  'new_line' => 'true',
  'wrapper_breakpoint' =>
  array (
    'tablet' =>
    array (
      'col' => 12,
      'order' => 0,
      'clear' => true,
      'edited' => true,
    ),
    'mobile' =>
    array (
      'col' => 7,
      'clear' => true,
      'order' => 0,
      'edited' => true,
    ),
    'custom-1410783666947' =>
    array (
      'col' => 18,
      'order' => 0,
      'clear' => true,
      'edited' => true,
    ),
  ),
  'breakpoint' =>
  array (
    'tablet' =>
    array (
      'edited' => true,
      'left' => 0,
      'col' => 12,
      'order' => 0,
    ),
    'mobile' =>
    array (
      'edited' => true,
      'left' => 0,
      'col' => 7,
      'top' => 5,
      'order' => 0,
    ),
    'custom-1410783666947' =>
    array (
      'edited' => true,
      'left' => 0,
      'col' => 18,
      'order' => 0,
    ),
  ),
));

$quote->add_element("PlainTxt", array (
  'columns' => '24',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'id' => 'module-1405603545291-1575',
  'options' =>
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<h1 style="text-align: center;" class="">First Thing\'s First</h1>',
    'type' => 'PlainTxtModel',
    'element_id' => 'object-1405603545292-1703',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'row' => 23,
    'is_edited' => true,
    'border_style' => 'none',
    'border_width' => 1,
    'border_color' => 'rgba(0, 0, 0, 0)',
    'bg_color' => 'rgba(0, 0, 0, 0)',
    'anchor' => '',
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1412779479175-1095',
  'new_line' => 'true',
  'wrapper_breakpoint' =>
  array (
    'tablet' =>
    array (
      'col' => 12,
      'order' => 1,
      'clear' => true,
      'edited' => true,
    ),
    'mobile' =>
    array (
      'col' => 7,
      'clear' => true,
      'order' => 1,
      'edited' => true,
    ),
    'custom-1410783666947' =>
    array (
      'col' => 18,
      'order' => 1,
      'clear' => true,
      'edited' => true,
    ),
  ),
  'breakpoint' =>
  array (
    'tablet' =>
    array (
      'edited' => true,
      'left' => 0,
      'col' => 12,
      'order' => 1,
    ),
    'mobile' =>
    array (
      'edited' => true,
      'left' => 0,
      'col' => 7,
      'top' => 0,
      'order' => 3,
    ),
    'custom-1410783666947' =>
    array (
      'edited' => true,
      'left' => 0,
      'col' => 18,
      'order' => 1,
    ),
  ),
));

$quote->add_element("PlainTxt", array (
  'columns' => '8',
  'margin_left' => '1',
  'margin_right' => '0',
  'margin_top' => '8',
  'margin_bottom' => '0',
  'id' => 'module-1410351484471-1157',
  'options' =>
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<h3 class="">1. Get a Quote</h3>',
    'type' => 'PlainTxtModel',
    'element_id' => 'text-object-1410351484470-1706',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'is_edited' => true,
    'row' => 12,
    'border_style' => 'none',
    'border_width' => 1,
    'border_color' => 'rgba(0, 0, 0, 0)',
    'bg_color' => 'rgba(0, 0, 0, 0)',
    'anchor' => '',
    'theme_style' => '_default',
    'breakpoint' =>
    (array)(array(
       'tablet' =>
      (array)(array(
         'theme_style' => 'u-sub-heading-mobile',
      )),
       'custom-1410783666947' =>
      (array)(array(
         'theme_style' => 'u-sub-heading-mobile',
      )),
       'mobile' =>
      (array)(array(
         'theme_style' => 'u-sub-heading-mobile',
      )),
    )),
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1410351832277-1394',
  'new_line' => 'true',
  'wrapper_breakpoint' =>
  array (
    'tablet' =>
    array (
      'col' => 10,
      'order' => 2,
      'clear' => true,
      'edited' => true,
    ),
    'mobile' =>
    array (
      'col' => 7,
      'clear' => true,
      'order' => 2,
      'edited' => true,
    ),
    'custom-1410783666947' =>
    array (
      'col' => 13,
      'order' => 2,
      'clear' => true,
      'edited' => true,
    ),
  ),
  'breakpoint' =>
  array (
    'tablet' =>
    array (
      'edited' => true,
      'left' => 2,
      'col' => 8,
      'order' => 2,
      'top' => 9,
    ),
    'mobile' =>
    array (
      'edited' => true,
      'left' => 0,
      'col' => 7,
      'top' => 0,
      'order' => 4,
    ),
    'custom-1410783666947' =>
    array (
      'edited' => true,
      'left' => 5,
      'col' => 8,
      'order' => 2,
      'top' => 9,
    ),
  ),
));

$quote->add_element("PlainTxt", array (
  'columns' => '6',
  'margin_left' => '1',
  'margin_right' => '0',
  'margin_top' => '8',
  'margin_bottom' => '0',
  'id' => 'module-1410351502219-1963',
  'options' =>
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<h3>2. We Roll</h3>',
    'type' => 'PlainTxtModel',
    'element_id' => 'text-object-1410351502218-1570',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'is_edited' => true,
    'border_style' => 'none',
    'border_width' => 1,
    'border_color' => 'rgba(0, 0, 0, 0)',
    'bg_color' => 'rgba(0, 0, 0, 0)',
    'anchor' => '',
    'theme_style' => '_default',
    'row' => 12,
    'breakpoint' =>
    (array)(array(
       'custom-1410783666947' =>
      (array)(array(
         'row' => 11,
         'theme_style' => 'u-sub-heading-mobile',
      )),
       'tablet' =>
      (array)(array(
         'row' => 11,
         'theme_style' => 'u-sub-heading-mobile',
      )),
       'mobile' =>
      (array)(array(
         'theme_style' => 'u-sub-heading-mobile',
         'row' => 11,
      )),
    )),
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1410351835513-1789',
  'wrapper_breakpoint' =>
  array (
    'tablet' =>
    array (
      'col' => 10,
      'order' => 4,
      'clear' => true,
      'edited' => true,
    ),
    'mobile' =>
    array (
      'col' => 7,
      'clear' => true,
      'order' => 4,
      'edited' => true,
    ),
    'custom-1410783666947' =>
    array (
      'col' => 13,
      'order' => 4,
      'clear' => true,
      'edited' => true,
    ),
  ),
  'breakpoint' =>
  array (
    'tablet' =>
    array (
      'edited' => true,
      'left' => 2,
      'col' => 8,
      'order' => 3,
      'top' => 5,
      'row' => 11,
    ),
    'mobile' =>
    array (
      'edited' => true,
      'left' => 0,
      'col' => 7,
      'top' => 0,
      'order' => 5,
      'row' => 11,
    ),
    'custom-1410783666947' =>
    array (
      'edited' => true,
      'left' => 5,
      'col' => 8,
      'order' => 7,
      'top' => 8,
      'row' => 11,
    ),
  ),
));

$quote->add_element("PlainTxt", array (
  'columns' => '6',
  'margin_left' => '1',
  'margin_right' => '0',
  'margin_top' => '8',
  'margin_bottom' => '0',
  'id' => 'module-1410351535850-1535',
  'options' =>
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<h3>3. We Fix It</h3>',
    'type' => 'PlainTxtModel',
    'element_id' => 'text-object-1410351535848-1723',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'is_edited' => true,
    'border_style' => 'none',
    'border_width' => 1,
    'border_color' => 'rgba(0, 0, 0, 0)',
    'bg_color' => 'rgba(0, 0, 0, 0)',
    'anchor' => '',
    'theme_style' => '_default',
    'row' => 5,
    'breakpoint' =>
    (array)(array(
       'custom-1410783666947' =>
      (array)(array(
         'row' => 11,
         'theme_style' => 'u-sub-heading-mobile',
      )),
       'tablet' =>
      (array)(array(
         'row' => 12,
         'theme_style' => 'u-sub-heading-mobile',
      )),
       'mobile' =>
      (array)(array(
         'theme_style' => 'u-sub-heading-mobile',
      )),
    )),
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1410351850120-1954',
  'wrapper_breakpoint' =>
  array (
    'tablet' =>
    array (
      'col' => 10,
      'order' => 6,
      'clear' => true,
      'edited' => true,
    ),
    'mobile' =>
    array (
      'col' => 7,
      'clear' => true,
      'order' => 6,
      'edited' => true,
    ),
    'custom-1410783666947' =>
    array (
      'col' => 13,
      'order' => 6,
      'clear' => true,
      'edited' => true,
    ),
  ),
  'breakpoint' =>
  array (
    'tablet' =>
    array (
      'edited' => true,
      'left' => 2,
      'col' => 8,
      'order' => 4,
      'top' => 6,
      'row' => 12,
    ),
    'mobile' =>
    array (
      'edited' => true,
      'left' => 0,
      'col' => 7,
      'order' => 1,
    ),
    'custom-1410783666947' =>
    array (
      'edited' => true,
      'left' => 5,
      'col' => 8,
      'order' => 3,
      'top' => 6,
      'row' => 11,
    ),
  ),
));

$quote->add_element("Ucontact", array (
  'columns' => '8',
  'margin_left' => '1',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'id' => 'module-1413175385317-1417',
  'options' =>
  array (
    'form_add_title' =>
    array (
    ),
    'form_title' => 'Contact form',
    'form_name_label' => 'Name',
    'form_email_label' => 'Email Address',
    'form_email_to' => '',
    'show_subject' =>
    array (
    ),
    'show_captcha' =>
    array (
    ),
    'form_subject_label' => 'Your subject:',
    'form_captcha_label' => 'CAPTCHA:',
    'form_default_subject' => 'Sent from the website',
    'form_message_label' => 'Type your enquiry here',
    'form_button_text' => 'Get A Quote',
    'form_validate_when' => 'submit',
    'form_label_position' => 'over',
    'type' => 'UcontactModel',
    'view_class' => 'UcontactView',
    'class' => 'c24 upfront-contact-form',
    'has_settings' => 1,
    'id_slug' => 'ucontact',
    'element_id' => 'ucontact-object-1413175385312-1163',
    'anchor' => '',
    'theme_style' => 'ucontact-quote-style',
    'breakpoint' =>
    (array)(array(
       'mobile' =>
      (array)(array(
         'row' => 68,
      )),
    )),
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1410352674285-1830',
  'new_line' => 'true',
  'wrapper_breakpoint' =>
  array (
    'tablet' =>
    array (
      'col' => 10,
      'order' => 3,
      'clear' => true,
      'edited' => true,
    ),
    'mobile' =>
    array (
      'col' => 7,
      'clear' => true,
      'order' => 3,
      'edited' => true,
    ),
    'custom-1410783666947' =>
    array (
      'col' => 13,
      'order' => 3,
      'clear' => true,
      'edited' => true,
    ),
  ),
  'breakpoint' =>
  array (
    'tablet' =>
    array (
      'edited' => true,
      'left' => 2,
      'col' => 8,
      'order' => 5,
      'top' => 0,
    ),
    'mobile' =>
    array (
      'edited' => true,
      'left' => 0,
      'col' => 7,
      'top' => 0,
      'order' => 6,
      'row' => 68,
    ),
    'custom-1410783666947' =>
    array (
      'edited' => true,
      'left' => 5,
      'col' => 8,
      'order' => 4,
      'top' => 0,
    ),
  ),
));

$quote->add_element("Uimage", array (
  'columns' => '6',
  'margin_left' => '1',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'id' => 'module-1410350687438-1702',
  'options' =>
  array (
    'src' => '' . get_stylesheet_directory_uri() . '/images/archive-home/fixer-van-230x100-9286.png',
    'srcFull' => '' . get_stylesheet_directory_uri() . '/images/archive-home/fixer-van.png',
    'srcOriginal' => '' . get_stylesheet_directory_uri() . '/images/archive-home/fixer-van.png',
    'image_title' => '',
    'alternative_text' => '',
    'when_clicked' => false,
    'image_link' => '',
    'include_image_caption' => false,
    'image_caption' => 'My awesome image caption',
    'caption_position' => false,
    'caption_alignment' => false,
    'caption_trigger' => 'always_show',
    'image_status' => 'ok',
    'size' =>
    (array)(array(
       'width' => 230,
       'height' => 100,
    )),
    'fullSize' =>
    (array)(array(
       'width' => 230,
       'height' => 100,
    )),
    'position' =>
    (array)(array(
       'top' => 0,
       'left' => -27.5,
    )),
    'marginTop' => 0,
    'element_size' =>
    (array)(array(
       'width' => 240,
       'height' => 100,
    )),
    'rotation' => 0,
    'color' => '#ffffff',
    'background' => '#000000',
    'captionBackground' => '0',
    'image_id' => '1769',
    'align' => 'center',
    'stretch' => false,
    'vstretch' => true,
    'quick_swap' => false,
    'gifImage' => 0,
    'placeholder_class' => '',
    'type' => 'UimageModel',
    'view_class' => 'UimageView',
    'has_settings' => 1,
    'class' => 'c24 upfront-image',
    'id_slug' => 'image',
    'element_id' => 'image-1410350687421-1049',
    'row' => 26,
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1410352686491-1034',
  'wrapper_breakpoint' =>
  array (
    'tablet' =>
    array (
      'col' => 10,
      'order' => 5,
      'clear' => true,
      'edited' => true,
    ),
    'mobile' =>
    array (
      'col' => 7,
      'order' => 5,
      'clear' => true,
      'edited' => true,
    ),
    'custom-1410783666947' =>
    array (
      'col' => 12,
      'order' => 5,
      'clear' => true,
      'edited' => true,
    ),
  ),
  'breakpoint' =>
  array (
    'tablet' =>
    array (
      'edited' => true,
      'left' => 2,
      'col' => 8,
      'order' => 6,
      'top' => 0,
    ),
    'mobile' =>
    array (
      'edited' => true,
      'left' => 0,
      'col' => 7,
      'top' => 0,
      'order' => 7,
    ),
    'custom-1410783666947' =>
    array (
      'edited' => true,
      'left' => 5,
      'col' => 7,
      'order' => 5,
      'top' => 0,
    ),
  ),
  'close_wrapper' => false,
));

$quote->add_element("PlainTxt", array (
  'columns' => '6',
  'margin_left' => '1',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'id' => 'module-1410352199210-1157',
  'options' =>
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<p class="">
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus consequat, tortor id malesuada faucibus, elit nisl luctus massa, vel consectetur.</p>',
    'type' => 'PlainTxtModel',
    'element_id' => 'text-object-1410352199209-1378',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'row' => 31,
    'is_edited' => true,
    'border_style' => 'none',
    'border_width' => 1,
    'border_color' => 'rgba(0, 0, 0, 0)',
    'bg_color' => 'rgba(0, 0, 0, 0)',
    'anchor' => '',
    'theme_style' => '_default',
    'breakpoint' =>
    (array)(array(
       'tablet' =>
      (array)(array(
         'row' => 15,
         'theme_style' => 'u-paragraph-mobile',
      )),
       'mobile' =>
      (array)(array(
         'row' => 26,
         'theme_style' => 'u-paragraph-mobile',
      )),
       'custom-1410783666947' =>
      (array)(array(
         'row' => 24,
         'theme_style' => 'u-paragraph-mobile',
      )),
    )),
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1410352686491-1034',
  'breakpoint' =>
  array (
    'tablet' =>
    array (
      'edited' => true,
      'left' => 2,
      'col' => 8,
      'row' => 15,
      'top' => 0,
      'order' => 8,
    ),
    'mobile' =>
    array (
      'edited' => true,
      'left' => 0,
      'col' => 7,
      'row' => 26,
      'top' => 0,
      'order' => 8,
    ),
    'custom-1410783666947' =>
    array (
      'edited' => true,
      'left' => 5,
      'col' => 7,
      'order' => 8,
      'top' => 0,
      'row' => 24,
    ),
  ),
));

$quote->add_element("Uimage", array (
  'columns' => '6',
  'margin_left' => '1',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'id' => 'module-1410351290321-1363',
  'options' =>
  array (
    'src' => '' . get_stylesheet_directory_uri() . '/images/archive-home/fixer-cloud-230x100-3674.png',
    'srcFull' => '' . get_stylesheet_directory_uri() . '/images/archive-home/fixer-cloud.png',
    'srcOriginal' => '' . get_stylesheet_directory_uri() . '/images/archive-home/fixer-cloud.png',
    'image_title' => '',
    'alternative_text' => '',
    'when_clicked' => false,
    'image_link' => '',
    'include_image_caption' => false,
    'image_caption' => 'My awesome image caption',
    'caption_position' => false,
    'caption_alignment' => false,
    'caption_trigger' => 'always_show',
    'image_status' => 'ok',
    'size' =>
    (array)(array(
       'width' => 230,
       'height' => 100,
    )),
    'fullSize' =>
    (array)(array(
       'width' => 230,
       'height' => 100,
    )),
    'position' =>
    (array)(array(
       'top' => 0,
       'left' => -27.5,
    )),
    'marginTop' => 0,
    'element_size' =>
    (array)(array(
       'width' => 240,
       'height' => 100,
    )),
    'rotation' => 0,
    'color' => '#ffffff',
    'background' => '#000000',
    'captionBackground' => '0',
    'image_id' => '1770',
    'align' => 'center',
    'stretch' => false,
    'vstretch' => true,
    'quick_swap' => false,
    'gifImage' => 0,
    'placeholder_class' => '',
    'type' => 'UimageModel',
    'view_class' => 'UimageView',
    'has_settings' => 1,
    'class' => 'c24 upfront-image',
    'id_slug' => 'image',
    'element_id' => 'image-1410351290307-1196',
    'row' => 26,
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1410352591269-1346',
  'wrapper_breakpoint' =>
  array (
    'tablet' =>
    array (
      'col' => 10,
      'order' => 7,
      'clear' => true,
      'edited' => true,
    ),
    'mobile' =>
    array (
      'col' => 7,
      'order' => 7,
      'clear' => true,
      'edited' => true,
    ),
    'custom-1410783666947' =>
    array (
      'col' => 12,
      'order' => 7,
      'clear' => true,
      'edited' => true,
    ),
  ),
  'breakpoint' =>
  array (
    'tablet' =>
    array (
      'edited' => true,
      'left' => 2,
      'col' => 8,
      'order' => 7,
    ),
    'mobile' =>
    array (
      'edited' => true,
      'left' => 0,
      'col' => 7,
      'order' => 2,
      'top' => 0,
    ),
    'custom-1410783666947' =>
    array (
      'edited' => true,
      'left' => 5,
      'col' => 7,
      'order' => 6,
      'top' => 0,
    ),
  ),
  'close_wrapper' => false,
));

$quote->add_element("PlainTxt", array (
  'columns' => '6',
  'margin_left' => '1',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'id' => 'module-1410352455168-1374',
  'options' =>
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<p class="">
	It works as smooth as new. quis nostrud exerci tation ullamcorper san et iusto praesent luptatum zzril volutpat. Ut wisi enim ad minim veniam.</p>',
    'type' => 'PlainTxtModel',
    'element_id' => 'text-object-1410352455166-1289',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'row' => 27,
    'is_edited' => true,
    'border_style' => 'none',
    'border_width' => 1,
    'border_color' => 'rgba(0, 0, 0, 0)',
    'bg_color' => 'rgba(0, 0, 0, 0)',
    'anchor' => '',
    'theme_style' => '_default',
    'breakpoint' =>
    (array)(array(
       'tablet' =>
      (array)(array(
         'row' => 18,
         'theme_style' => 'u-paragraph-mobile',
      )),
       'mobile' =>
      (array)(array(
         'row' => 26,
         'theme_style' => 'u-paragraph-mobile',
      )),
       'custom-1410783666947' =>
      (array)(array(
         'row' => 23,
         'theme_style' => 'u-paragraph-mobile',
      )),
    )),
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1410352591269-1346',
  'breakpoint' =>
  array (
    'tablet' =>
    array (
      'edited' => true,
      'left' => 2,
      'col' => 8,
      'row' => 18,
      'order' => 9,
      'top' => 0,
    ),
    'mobile' =>
    array (
      'edited' => true,
      'left' => 0,
      'col' => 7,
      'row' => 26,
      'order' => 9,
      'top' => 0,
    ),
    'custom-1410783666947' =>
    array (
      'edited' => true,
      'left' => 5,
      'col' => 7,
      'order' => 9,
      'top' => 0,
      'row' => 23,
    ),
  ),
));

$regions->add($quote);

$blog_header = upfront_create_region(
			array (
  'name' => 'blog-header',
  'title' => 'Blog Header',
  'type' => 'wide',
  'scope' => 'local',
  'container' => 'blog-header',
  'position' => 1,
  'allow_sidebar' => true,
),
			array (
  'row' => 117,
  'background_type' => 'image',
  'nav_region' => '',
  'background_color' => '#ffffff',
  'background_style' => 'full',
  'background_position_y' => '50',
  'background_position_x' => '50',
  'background_image' => '' . get_stylesheet_directory_uri() . '/images/archive-home/background-leaves.jpg',
  'background_image_ratio' => 0.429999999999999993338661852249060757458209991455078125,
  'breakpoint' =>
  (array)(array(
     'tablet' =>
    (array)(array(
       'edited' => true,
       'row' => 103,
    )),
     'mobile' =>
    (array)(array(
       'edited' => true,
       'row' => 85,
    )),
     'custom-1410783666947' =>
    (array)(array(
       'edited' => false,
       'col' => 24,
    )),
  )),
  'use_padding' => 0,
  'sub_regions' =>
  array (
    0 => '',
  ),
)
			);

$blog_header->add_element("PlainTxt", array (
  'columns' => '22',
  'margin_left' => '1',
  'margin_right' => '0',
  'margin_top' => '13',
  'margin_bottom' => '0',
  'id' => 'module-1414410069759-1295',
  'options' =>
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<h2 class=""><span class="upfront_theme_color_0">Blog</span></h2>',
    'type' => 'PlainTxtModel',
    'element_id' => 'text-object-1414410069741-1460',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'is_edited' => true,
    'border_style' => 'none',
    'border_width' => 1,
    'border_color' => 'rgba(0, 0, 0, 0)',
    'bg_color' => 'rgba(0, 0, 0, 0)',
    'anchor' => 'blog',
    'row' => 12,
    'breakpoint' =>
    (array)(array(
       'custom-1410783666947' =>
      (array)(array(
         'theme_style' => 'u-sub-heading-mobile',
      )),
       'tablet' =>
      (array)(array(
         'theme_style' => 'u-sub-heading-mobile',
      )),
       'mobile' =>
      (array)(array(
         'theme_style' => 'u-sub-heading-mobile',
      )),
    )),
    'theme_style' => 'u-sub-heading',
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1414410356362-1676',
  'new_line' => 'true',
  'wrapper_breakpoint' =>
  array (
    'tablet' =>
    array (
      'col' => 12,
      'order' => 0,
      'clear' => true,
      'edited' => true,
    ),
    'mobile' =>
    array (
      'col' => 7,
      'order' => 0,
      'clear' => false,
    ),
    'custom-1410783666947' =>
    array (
      'col' => 18,
      'order' => 0,
      'clear' => true,
      'edited' => true,
    ),
  ),
  'breakpoint' =>
  array (
    'tablet' =>
    array (
      'edited' => true,
      'left' => 0,
      'col' => 12,
      'order' => 0,
      'top' => 8,
    ),
    'mobile' =>
    array (
      'edited' => false,
      'left' => 0,
      'col' => 7,
      'order' => 0,
    ),
    'custom-1410783666947' =>
    array (
      'edited' => true,
      'left' => 0,
      'col' => 18,
      'order' => 0,
      'top' => 10,
    ),
  ),
));

$blog_header->add_element("PlainTxt", array (
  'columns' => '22',
  'margin_left' => '1',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'id' => 'module-1431007733914-1949',
  'options' =>
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<h1 class=""><span class="upfront_theme_color_0" data-verified="redactor" data-redactor-tag="span" data-redactor-class="upfront_theme_color_0">Latest<br>News &amp;<br>Tips</span></h1>',
    'type' => 'PlainTxtModel',
    'element_id' => 'text-object-1431007733914-1652',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'row' => 70,
    'is_edited' => true,
    'border_style' => 'none',
    'border_width' => 1,
    'border_color' => 'rgba(0, 0, 0, 0)',
    'bg_color' => 'rgba(0, 0, 0, 0)',
    'anchor' => '',
    'breakpoint' =>
    (array)(array(
       'custom-1410783666947' =>
      (array)(array(
         'theme_style' => 'u-heading-mobile',
      )),
       'tablet' =>
      (array)(array(
         'theme_style' => 'u-heading-mobile',
      )),
       'mobile' =>
      (array)(array(
         'row' => 41,
         'theme_style' => 'u-heading-mobile',
      )),
    )),
    'theme_style' => 'u-heading',
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1431007762684-1915',
  'new_line' => 'true',
  'wrapper_breakpoint' =>
  array (
    'tablet' =>
    array (
      'edited' => true,
      'col' => 12,
      'order' => 1,
      'clear' => true,
    ),
    'mobile' =>
    array (
      'edited' => false,
      'col' => 7,
      'order' => 0,
      'clear' => false,
    ),
    'custom-1410783666947' =>
    array (
      'edited' => true,
      'col' => 18,
      'order' => 1,
      'clear' => true,
    ),
  ),
  'breakpoint' =>
  array (
    'tablet' =>
    array (
      'edited' => false,
      'left' => 0,
      'col' => 12,
      'order' => 0,
    ),
    'mobile' =>
    array (
      'edited' => true,
      'left' => 0,
      'col' => 7,
      'order' => 0,
      'row' => 41,
    ),
    'custom-1410783666947' =>
    array (
      'edited' => false,
      'left' => 0,
      'col' => 18,
      'order' => 0,
    ),
  ),
));

$regions->add($blog_header);

$blog_items = upfront_create_region(
			array (
  'name' => 'blog-items',
  'title' => 'Blog Items',
  'type' => 'wide',
  'scope' => 'local',
  'container' => 'blog-items',
  'position' => 1,
  'allow_sidebar' => true,
),
			array (
  'row' => 60,
  'background_type' => 'color',
  'nav_region' => '',
  'background_color' => '#ffffff',
  'breakpoint' =>
  (array)(array(
     'tablet' =>
    (array)(array(
       'edited' => false,
       'background_type' => 'color',
       'col' => 24,
    )),
     'mobile' =>
    (array)(array(
       'edited' => false,
       'col' => 24,
    )),
     'custom-1410783666947' =>
    (array)(array(
       'edited' => false,
       'col' => 24,
    )),
  )),
  'use_padding' => 0,
  'sub_regions' =>
  array (
    0 => '',
  ),
)
			);

$blog_items->add_element("Posts", array (
  'columns' => '24',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'id' => 'module-1419155622479-1636',
  'options' =>
  array (
    'type' => 'PostsModel',
    'view_class' => 'PostsView',
    'has_settings' => 1,
    'class' => 'c24 uposts-object',
    'id_slug' => 'posts',
    'display_type' => 'list',
    'list_type' => 'generic',
    'offset' => 1,
    'taxonomy' => '',
    'term' => '',
    'content' => 'excerpt',
    'limit' => '3',
    'pagination' => '',
    'sticky' => '',
    'posts_list' => '',
    'post_parts' =>
    array (
      0 => 'featured_image',
      1 => 'date_posted',
      2 => 'title',
      3 => 'content',
      4 => 'read_more',
    ),
    'enabled_post_parts' =>
    array (
      0 => 'date_posted',
      1 => 'featured_image',
      2 => 'title',
      3 => 'content',
      4 => 'read_more',
    ),
    'default_parts' =>
    array (
      0 => 'date_posted',
      1 => 'author',
      2 => 'gravatar',
      3 => 'comment_count',
      4 => 'featured_image',
      5 => 'title',
      6 => 'content',
      7 => 'read_more',
      8 => 'tags',
      9 => 'categories',
    ),
    'date_posted_format' => 'd M',
    'categories_limit' => 3,
    'tags_limit' => 3,
    'comment_count_hide' => 0,
    'content_length' => '40',
    'resize_featured' => '1',
    'gravatar_size' => 200,
    'post-part-date_posted' => '<div class="uposts-part date_posted">
    <span class="day">{{date_1}}</span><span class="month">{{date_2}}</span>
</div>',
    'post-part-author' => '<div class="uposts-part author">
	By <a href="{{url}}">{{name}}</a></div>',
    'post-part-gravatar' => '<div class="uposts-part gravatar">
	{{gravatar}}
</div>',
    'post-part-comment_count' => '<div class="uposts-part comment_count">
	{{comment_count}}
</div>',
    'post-part-featured_image' => '<div class="uposts-part thumbnail" data-resize="{{resize}}">
	{{thumbnail}}
</div>',
    'post-part-title' => '<div class="uposts-part title">
	<h3><a href="{{permalink}}" title="{{title}}">{{title}}</a></h3>
</div>',
    'post-part-content' => '<div class="uposts-part content">
	{{content}}
</div>',
    'post-part-read_more' => '<div class="uposts-part read_more">
	<a class=\'uf_font_icon\' href="{{permalink}}">j</a></div>',
    'post-part-tags' => '<div class="uposts-part post_tags">
	{{tags}}
</div>',
    'post-part-categories' => '<div class="uposts-part post_categories">
	{{categories}}
</div>',
    'post-part-meta' => '<div class="uposts-part meta">

</div>
',
    'element_id' => 'posts-object-1419155622476-1899',
    'anchor' => '',
    'theme_style' => 'u-posts-home',
    'breakpoint' =>
    (array)(array(
       'custom-1410783666947' =>
      (array)(array(
         'theme_style' => 'u-posts-home-big-tablet',
      )),
       'tablet' =>
      (array)(array(
         'theme_style' => 'u-posts-home-tablet',
      )),
       'mobile' =>
      (array)(array(
         'theme_style' => 'u-posts-home-tablet',
      )),
    )),
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1419155636060-1682',
  'new_line' => 'true',
  'wrapper_breakpoint' =>
  array (
    'tablet' =>
    array (
      'edited' => false,
      'col' => 12,
      'order' => 0,
    ),
    'mobile' =>
    array (
      'edited' => false,
      'col' => 7,
      'order' => 0,
    ),
    'custom-1410783666947' =>
    array (
      'col' => 18,
      'order' => 0,
    ),
  ),
  'breakpoint' =>
  array (
    'tablet' =>
    array (
      'edited' => false,
      'left' => 0,
      'col' => 12,
      'order' => 0,
    ),
    'mobile' =>
    array (
      'edited' => false,
      'left' => 0,
      'col' => 7,
      'order' => 0,
    ),
    'custom-1410783666947' =>
    array (
      'edited' => false,
      'left' => 0,
      'col' => 18,
      'order' => 0,
    ),
  ),
));

$regions->add($blog_items);

$subscribe = upfront_create_region(
			array (
  'name' => 'subscribe',
  'title' => 'Subscribe',
  'type' => 'wide',
  'scope' => 'local',
  'container' => 'subscribe',
  'position' => 1,
  'allow_sidebar' => true,
),
			array (
  'row' => 31,
  'background_type' => 'color',
  'nav_region' => '',
  'background_color' => '#ffffff',
  'breakpoint' =>
  (array)(array(
     'tablet' =>
    (array)(array(
       'edited' => true,
       'row' => 46,
    )),
     'mobile' =>
    (array)(array(
       'edited' => true,
       'row' => 64,
    )),
     'custom-1410783666947' =>
    (array)(array(
       'edited' => true,
       'row' => 47,
    )),
  )),
  'use_padding' => 0,
  'sub_regions' =>
  array (
    0 => '',
  ),
)
			);

$subscribe->add_element("PlainTxt", array (
  'columns' => '13',
  'margin_left' => '2',
  'margin_right' => '0',
  'margin_top' => '10',
  'margin_bottom' => '0',
  'id' => 'module-1406194594842-1402',
  'options' =>
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<h2 class="">Interested in receiving more tips?</h2>',
    'type' => 'PlainTxtModel',
    'element_id' => 'text-object-1406194594841-1906',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'row' => 9,
    'is_edited' => true,
    'border_style' => 'none',
    'border_width' => 1,
    'border_color' => 'rgba(0, 0, 0, 0)',
    'bg_color' => 'rgba(0, 0, 0, 0)',
    'anchor' => '',
    'breakpoint' =>
    (array)(array(
       'custom-1410783666947' =>
      (array)(array(
         'theme_style' => 'u-sub-heading-mobile',
      )),
       'tablet' =>
      (array)(array(
         'theme_style' => 'u-sub-heading-mobile',
      )),
       'mobile' =>
      (array)(array(
         'theme_style' => 'u-sub-heading-mobile',
      )),
    )),
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1406194594842-1402',
  'new_line' => 'true',
  'wrapper_breakpoint' =>
  array (
    'tablet' =>
    array (
      'col' => 12,
      'order' => 0,
      'clear' => true,
      'edited' => true,
    ),
    'mobile' =>
    array (
      'col' => 7,
      'clear' => true,
      'order' => 0,
      'edited' => true,
    ),
    'custom-1410783666947' =>
    array (
      'col' => 16,
      'order' => 0,
      'clear' => true,
      'edited' => true,
    ),
  ),
  'breakpoint' =>
  array (
    'tablet' =>
    array (
      'edited' => false,
      'left' => 0,
      'col' => 12,
      'order' => 0,
    ),
    'mobile' =>
    array (
      'edited' => true,
      'left' => 0,
      'col' => 7,
      'order' => 0,
      'top' => 6,
    ),
    'custom-1410783666947' =>
    array (
      'edited' => false,
      'left' => 2,
      'col' => 14,
      'order' => 0,
    ),
  ),
));

$subscribe->add_element("Button", array (
  'columns' => '4',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '8',
  'margin_bottom' => '0',
  'id' => 'module-1412847584331-1365',
  'options' =>
  array (
    'content' => 'Subscribe',
    'href' => '#ltb-subscribe15',
    'align' => 'center',
    'type' => 'ButtonModel',
    'view_class' => 'ButtonView',
    'element_id' => 'button-object-1412847584330-1018',
    'class' => 'c24 upfront-button',
    'has_settings' => 1,
    'id_slug' => 'button',
    'currentpreset' => 'black-borders-button',
    'theme_style' => '_default',
    'row' => 6,
    'is_edited' => true,
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1412849840312-1624',
  'wrapper_breakpoint' =>
  array (
    'tablet' =>
    array (
      'col' => 6,
      'order' => 1,
      'clear' => true,
      'edited' => true,
    ),
    'mobile' =>
    array (
      'col' => 6,
      'clear' => true,
      'order' => 1,
      'edited' => true,
    ),
    'custom-1410783666947' =>
    array (
      'col' => 9,
      'order' => 1,
      'clear' => true,
      'edited' => true,
    ),
  ),
  'breakpoint' =>
  array (
    'tablet' =>
    array (
      'edited' => true,
      'left' => 2,
      'col' => 4,
      'order' => 0,
      'top' => 2,
    ),
    'mobile' =>
    array (
      'edited' => true,
      'left' => 1,
      'col' => 5,
      'order' => 0,
      'top' => 3,
    ),
    'custom-1410783666947' =>
    array (
      'edited' => true,
      'left' => 5,
      'col' => 4,
      'order' => 0,
      'top' => 3,
    ),
  ),
));

$subscribe->add_element("Button", array (
  'columns' => '4',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '8',
  'margin_bottom' => '0',
  'id' => 'module-1412845951334-1388',
  'options' =>
  array (
    'content' => 'View blog',
    'href' => '' . get_home_url() . '/blog/',
    'align' => 'center',
    'type' => 'ButtonModel',
    'view_class' => 'ButtonView',
    'element_id' => 'button-object-1412845951334-1229',
    'class' => 'c24 upfront-button',
    'has_settings' => 1,
    'id_slug' => 'button',
    'currentpreset' => 'black-borders-button',
    'theme_style' => '_default',
    'row' => 6,
    'is_edited' => true,
    'linkTarget' => '_self',
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1412849849778-1976',
  'wrapper_breakpoint' =>
  array (
    'tablet' =>
    array (
      'col' => 4,
      'order' => 2,
      'clear' => false,
      'edited' => true,
    ),
    'mobile' =>
    array (
      'col' => 6,
      'clear' => true,
      'order' => 2,
      'edited' => true,
    ),
    'custom-1410783666947' =>
    array (
      'col' => 4,
      'order' => 2,
      'clear' => false,
      'edited' => true,
    ),
  ),
  'breakpoint' =>
  array (
    'tablet' =>
    array (
      'edited' => true,
      'left' => 0,
      'col' => 4,
      'order' => 1,
      'top' => 2,
    ),
    'mobile' =>
    array (
      'edited' => true,
      'left' => 1,
      'col' => 5,
      'top' => 0,
    ),
    'custom-1410783666947' =>
    array (
      'edited' => true,
      'left' => 0,
      'col' => 4,
      'order' => 1,
      'top' => 3,
    ),
  ),
));

if (file_exists(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'lightboxes' . DIRECTORY_SEPARATOR . 'lightbox.php')) include(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'lightboxes' . DIRECTORY_SEPARATOR . 'lightbox.php');
if (file_exists(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'lightboxes' . DIRECTORY_SEPARATOR . 'ltb-subscribe15.php')) include(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'lightboxes' . DIRECTORY_SEPARATOR . 'ltb-subscribe15.php');
$regions->add($subscribe);

$about = upfront_create_region(
			array (
  'name' => 'about',
  'title' => 'About',
  'type' => 'wide',
  'scope' => 'local',
  'container' => 'about',
  'position' => 1,
  'allow_sidebar' => true,
),
			array (
  'row' => 340,
  'background_type' => 'color',
  'nav_region' => '',
  'background_color' => '#ufc4',
  'breakpoint' =>
  (array)(array(
     'tablet' =>
    (array)(array(
       'edited' => true,
       'row' => 419,
    )),
     'mobile' =>
    (array)(array(
       'edited' => true,
       'col' => 24,
       'row' => 464,
    )),
     'custom-1410783666947' =>
    (array)(array(
       'edited' => true,
       'row' => 352,
    )),
  )),
)
			);

$about->add_element("PlainTxt", array (
  'columns' => '24',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '13',
  'margin_bottom' => '0',
  'id' => 'module-1412782658100-1763',
  'options' =>
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<h2 class="" style="text-align: center;">About</h2>',
    'type' => 'PlainTxtModel',
    'element_id' => 'text-object-1412782658098-1018',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'is_edited' => true,
    'row' => 10,
    'border_style' => 'none',
    'border_width' => 1,
    'border_color' => 'rgba(0, 0, 0, 0)',
    'bg_color' => 'rgba(0, 0, 0, 0)',
    'anchor' => 'about',
    'theme_style' => 'u-sub-heading',
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1412782859322-1825',
  'new_line' => 'true',
  'wrapper_breakpoint' =>
  array (
    'tablet' =>
    array (
      'col' => 12,
      'clear' => true,
      'order' => 0,
      'edited' => true,
    ),
    'mobile' =>
    array (
      'col' => 7,
      'clear' => true,
      'order' => 0,
    ),
    'custom-1410783666947' =>
    array (
      'col' => 18,
      'order' => 0,
      'clear' => true,
      'edited' => true,
    ),
  ),
  'breakpoint' =>
  array (
    'tablet' =>
    array (
      'edited' => true,
      'left' => 0,
      'col' => 12,
      'order' => 0,
    ),
    'mobile' =>
    array (
      'edited' => false,
      'left' => 0,
      'col' => 7,
      'order' => 0,
    ),
    'custom-1410783666947' =>
    array (
      'edited' => true,
      'left' => 0,
      'col' => 18,
      'order' => 0,
      'top' => 4,
    ),
  ),
));

$about->add_element("PlainTxt", array (
  'columns' => '20',
  'margin_left' => '2',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'id' => 'module-1422420112604-1996',
  'options' =>
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<h1 class="" style="text-align: center;">Meet Mr Fixer</h1>',
    'type' => 'PlainTxtModel',
    'element_id' => 'text-object-1422420112603-1296',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'row' => 16,
    'is_edited' => true,
    'border_style' => 'none',
    'border_width' => 1,
    'border_color' => 'rgba(0, 0, 0, 0)',
    'bg_color' => 'rgba(0, 0, 0, 0)',
    'anchor' => '',
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1422422687242-1922',
  'new_line' => 'true',
  'wrapper_breakpoint' =>
  array (
    'tablet' =>
    array (
      'edited' => true,
      'col' => 12,
      'clear' => true,
      'order' => 1,
    ),
    'mobile' =>
    array (
      'edited' => false,
      'col' => 7,
      'order' => 0,
    ),
    'custom-1410783666947' =>
    array (
      'col' => 18,
      'order' => 1,
      'clear' => true,
      'edited' => true,
    ),
  ),
  'breakpoint' =>
  array (
    'tablet' =>
    array (
      'edited' => true,
      'left' => 0,
      'col' => 12,
      'order' => 4,
    ),
    'mobile' =>
    array (
      'edited' => false,
      'left' => 0,
      'col' => 7,
      'order' => 0,
    ),
    'custom-1410783666947' =>
    array (
      'edited' => true,
      'left' => 0,
      'col' => 18,
      'order' => 4,
      'top' => 0,
    ),
  ),
));

$about->add_element("PlainTxt", array (
  'columns' => '7',
  'margin_left' => '2',
  'margin_right' => '0',
  'margin_top' => '8',
  'margin_bottom' => '0',
  'id' => 'module-1406196281138-1720',
  'options' =>
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<p class="">
	Duis dolore te feugait nulla facilisi. Nam liber tempor cum Duis autem vel eum iriure dolor in hendrerit in vulputate velit Ut wisi enim ad minim veniam, quis nostrud esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril.
</p>',
    'type' => 'PlainTxtModel',
    'element_id' => 'text-object-1406196281137-1335',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'row' => 50,
    'is_edited' => true,
    'breakpoint' =>
    (array)(array(
       'tablet' =>
      (array)(array(
         'row' => 36,
         'theme_style' => 'u-paragraph-mobile',
      )),
       'mobile' =>
      (array)(array(
         'theme_style' => 'u-paragraph-mobile',
      )),
    )),
    'border_style' => 'none',
    'border_width' => 1,
    'border_color' => 'rgba(0, 0, 0, 0)',
    'bg_color' => 'rgba(0, 0, 0, 0)',
    'anchor' => '',
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1406196281138-1720',
  'new_line' => 'true',
  'wrapper_breakpoint' =>
  array (
    'tablet' =>
    array (
      'col' => 10,
      'clear' => true,
      'order' => 2,
      'edited' => true,
    ),
    'mobile' =>
    array (
      'col' => 7,
      'clear' => true,
      'order' => 0,
    ),
    'custom-1410783666947' =>
    array (
      'col' => 8,
      'order' => 2,
      'clear' => true,
      'edited' => true,
    ),
  ),
  'breakpoint' =>
  array (
    'tablet' =>
    array (
      'edited' => true,
      'left' => 2,
      'col' => 8,
      'row' => 36,
      'order' => 9,
    ),
    'mobile' =>
    array (
      'edited' => false,
      'left' => 0,
      'col' => 7,
      'order' => 0,
    ),
    'custom-1410783666947' =>
    array (
      'edited' => true,
      'left' => 1,
      'col' => 7,
      'order' => 1,
      'top' => 5,
    ),
  ),
));

$about->add_element("PlainTxt", array (
  'columns' => '7',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '8',
  'margin_bottom' => '0',
  'id' => 'module-1406196781398-1992',
  'options' =>
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<p class="">
	Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea Ut wisi enim ad minim veniam, quis nostrud commodo consequat</p>',
    'type' => 'PlainTxtModel',
    'element_id' => 'object-1406196781398-1916',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'row' => 50,
    'is_edited' => true,
    'breakpoint' =>
    (array)(array(
       'tablet' =>
      (array)(array(
         'row' => 27,
         'theme_style' => 'u-paragraph-mobile',
      )),
       'mobile' =>
      (array)(array(
         'theme_style' => 'u-paragraph-mobile',
      )),
    )),
    'border_style' => 'none',
    'border_width' => 1,
    'border_color' => 'rgba(0, 0, 0, 0)',
    'bg_color' => 'rgba(0, 0, 0, 0)',
    'anchor' => '',
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1406196781398-1992',
  'wrapper_breakpoint' =>
  array (
    'tablet' =>
    array (
      'col' => 10,
      'clear' => true,
      'order' => 3,
      'edited' => true,
    ),
    'mobile' =>
    array (
      'col' => 7,
      'clear' => true,
      'order' => 0,
    ),
    'custom-1410783666947' =>
    array (
      'col' => 9,
      'order' => 3,
      'clear' => false,
      'edited' => true,
    ),
  ),
  'breakpoint' =>
  array (
    'tablet' =>
    array (
      'edited' => true,
      'left' => 2,
      'col' => 8,
      'row' => 27,
      'top' => 0,
      'order' => 10,
    ),
    'mobile' =>
    array (
      'edited' => true,
      'left' => 0,
      'col' => 7,
      'top' => 0,
    ),
    'custom-1410783666947' =>
    array (
      'edited' => true,
      'left' => 2,
      'col' => 7,
      'order' => 10,
      'top' => 5,
    ),
  ),
));

$about->add_element("PlainTxt", array (
  'columns' => '7',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '8',
  'margin_bottom' => '0',
  'id' => 'module-1406196815834-1847',
  'options' =>
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<p class="">We will talk to you in a minute.</p>',
    'type' => 'PlainTxtModel',
    'element_id' => 'object-1406196815834-1028',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'row' => 9,
    'is_edited' => true,
    'border_style' => 'none',
    'border_width' => 1,
    'border_color' => 'rgba(0, 0, 0, 0)',
    'bg_color' => 'rgba(0, 0, 0, 0)',
    'anchor' => '',
    'breakpoint' =>
    (array)(array(
       'tablet' =>
      (array)(array(
         'theme_style' => 'u-paragraph-mobile',
      )),
       'mobile' =>
      (array)(array(
         'theme_style' => 'u-paragraph-mobile',
      )),
    )),
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1406196815834-1847',
  'wrapper_breakpoint' =>
  array (
    'tablet' =>
    array (
      'col' => 10,
      'order' => 5,
      'clear' => true,
      'edited' => true,
    ),
    'mobile' =>
    array (
      'col' => 7,
      'order' => 0,
    ),
    'custom-1410783666947' =>
    array (
      'col' => 8,
      'order' => 4,
      'clear' => true,
      'edited' => true,
    ),
  ),
  'breakpoint' =>
  array (
    'tablet' =>
    array (
      'edited' => true,
      'left' => 2,
      'col' => 8,
      'top' => 0,
      'order' => 5,
    ),
    'mobile' =>
    array (
      'edited' => false,
      'left' => 0,
      'col' => 7,
      'order' => 0,
    ),
    'custom-1410783666947' =>
    array (
      'edited' => true,
      'left' => 1,
      'col' => 7,
      'order' => 3,
      'top' => 0,
    ),
  ),
  'close_wrapper' => false,
));

$about->add_element("Uimage", array (
  'columns' => '5',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'id' => 'module-1412780079966-1514',
  'options' =>
  array (
    'src' => '' . get_stylesheet_directory_uri() . '/images/archive-home/signature-165x101-2110.png',
    'srcFull' => '' . get_stylesheet_directory_uri() . '/images/archive-home/signature.png',
    'srcOriginal' => '' . get_stylesheet_directory_uri() . '/images/archive-home/signature.png',
    'image_title' => '',
    'alternative_text' => '',
    'when_clicked' => false,
    'image_link' => '',
    'include_image_caption' => false,
    'image_caption' => 'My awesome image caption',
    'caption_position' => false,
    'caption_alignment' => false,
    'caption_trigger' => 'always_show',
    'image_status' => 'ok',
    'size' =>
    (array)(array(
       'width' => 165,
       'height' => 101,
    )),
    'fullSize' =>
    (array)(array(
       'width' => 165,
       'height' => 101,
    )),
    'position' =>
    (array)(array(
       'top' => 0.9619140625,
       'left' => 0,
    )),
    'marginTop' => -0.9619140625,
    'element_size' =>
    (array)(array(
       'width' => 195,
       'height' => 90,
    )),
    'rotation' => 0,
    'color' => '#ffffff',
    'background' => '#000000',
    'captionBackground' => '0',
    'image_id' => '42',
    'align' => 'left',
    'stretch' => false,
    'vstretch' => false,
    'quick_swap' => false,
    'gifImage' => 0,
    'placeholder_class' => '',
    'type' => 'UimageModel',
    'view_class' => 'UimageView',
    'has_settings' => 1,
    'class' => 'c24 upfront-image',
    'id_slug' => 'image',
    'element_id' => 'image-1412780079958-1027',
    'row' => 24,
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1406196815834-1847',
  'breakpoint' =>
  array (
    'tablet' =>
    array (
      'edited' => true,
      'left' => 3,
      'col' => 6,
      'order' => 6,
      'top' => 0,
    ),
    'mobile' =>
    array (
      'edited' => false,
      'left' => 1,
      'col' => 5,
      'order' => 0,
    ),
    'custom-1410783666947' =>
    array (
      'edited' => true,
      'left' => 1,
      'col' => 5,
      'order' => 5,
      'top' => 0,
    ),
  ),
  'close_wrapper' => false,
));

$about->add_element("PlainTxt", array (
  'columns' => '7',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'id' => 'module-1412780752234-1058',
  'options' =>
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<p class=""><strong data-redactor-tag="strong">James Woodlock<br>​</strong><span>Owner</span></p>',
    'type' => 'PlainTxtModel',
    'element_id' => 'object-1412780752235-1133',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'row' => 11,
    'is_edited' => true,
    'border_style' => 'none',
    'border_width' => 1,
    'border_color' => 'rgba(0, 0, 0, 0)',
    'bg_color' => 'rgba(0, 0, 0, 0)',
    'anchor' => '',
    'breakpoint' =>
    (array)(array(
       'custom-1410783666947' =>
      (array)(array(
         'row' => 15,
      )),
       'tablet' =>
      (array)(array(
         'theme_style' => 'u-paragraph-mobile',
      )),
       'mobile' =>
      (array)(array(
         'theme_style' => 'u-paragraph-mobile',
      )),
    )),
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1406196815834-1847',
  'breakpoint' =>
  array (
    'tablet' =>
    array (
      'edited' => true,
      'left' => 2,
      'col' => 8,
      'order' => 7,
      'top' => 1,
    ),
    'mobile' =>
    array (
      'edited' => false,
      'left' => 0,
      'col' => 7,
      'order' => 0,
    ),
    'custom-1410783666947' =>
    array (
      'edited' => true,
      'left' => 1,
      'col' => 7,
      'order' => 6,
      'top' => 0,
      'row' => 15,
    ),
  ),
));

$about->add_element("Uimage", array (
  'columns' => '24',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '7',
  'margin_bottom' => '0',
  'id' => 'module-1432891794813-1972',
  'options' =>
  array (
    'src' => '' . get_stylesheet_directory_uri() . '/images/archive-home/fixer-mrfixer-image-1050x569-7934.jpg',
    'srcFull' => '' . get_stylesheet_directory_uri() . '/images/archive-home/fixer-mrfixer-image.jpg',
    'srcOriginal' => '' . get_stylesheet_directory_uri() . '/images/archive-home/fixer-mrfixer-image.jpg',
    'image_title' => '',
    'alternative_text' => '',
    'when_clicked' => 'external',
    'image_link' => '" . get_home_url() . "',
    'include_image_caption' => false,
    'image_caption' => 'My awesome image caption',
    'caption_position' => false,
    'caption_alignment' => false,
    'caption_trigger' => 'always_show',
    'image_status' => 'ok',
    'size' =>
    (array)(array(
       'width' => 1050,
       'height' => 569,
    )),
    'fullSize' =>
    (array)(array(
       'width' => 1050,
       'height' => 569,
    )),
    'position' =>
    (array)(array(
       'top' => -0.5,
       'left' => 0,
    )),
    'marginTop' => 0.5,
    'element_size' =>
    (array)(array(
       'width' => 1050,
       'height' => 570,
    )),
    'rotation' => 0,
    'color' => '#ffffff',
    'background' => '#000000',
    'captionBackground' => '0',
    'image_id' => '1809',
    'align' => 'left',
    'stretch' => true,
    'vstretch' => false,
    'quick_swap' => false,
    'gifImage' => 0,
    'placeholder_class' => '',
    'type' => 'UimageModel',
    'view_class' => 'UimageView',
    'has_settings' => 1,
    'class' => 'c24 upfront-image',
    'id_slug' => 'image',
    'element_id' => 'image-1432891794809-1353',
    'row' => 40,
    'anchor' => '',
    'theme_style' => 'u-image-video-thumb',
    'link_target' => '_self',
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1432894009275-1355',
  'new_line' => 'true',
  'wrapper_breakpoint' =>
  array (
    'tablet' =>
    array (
      'edited' => false,
      'col' => 12,
      'order' => 0,
    ),
    'mobile' =>
    array (
      'edited' => false,
      'col' => 7,
      'order' => 0,
    ),
    'custom-1410783666947' =>
    array (
      'edited' => false,
      'col' => 18,
      'order' => 0,
    ),
  ),
  'breakpoint' =>
  array (
    'tablet' =>
    array (
      'edited' => false,
      'left' => 0,
      'col' => 12,
      'order' => 0,
    ),
    'mobile' =>
    array (
      'edited' => false,
      'left' => 0,
      'col' => 7,
      'order' => 0,
    ),
    'custom-1410783666947' =>
    array (
      'edited' => false,
      'left' => 0,
      'col' => 18,
      'order' => 0,
    ),
  ),
));

$about->add_element("PlainTxt", array (
  'columns' => '8',
  'margin_left' => '8',
  'margin_right' => '0',
  'margin_top' => '10',
  'margin_bottom' => '0',
  'id' => 'module-1419534285539-1212',
  'options' =>
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<p class="" style="text-align: center;font-size: 18px;font-weight: bold;font-family: tahoma;">
	_____</p>',
    'type' => 'PlainTxtModel',
    'element_id' => 'text-object-1419534285538-1065',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'is_edited' => true,
    'row' => 5,
    'border_style' => 'none',
    'border_width' => 1,
    'border_color' => '',
    'bg_color' => '',
    'anchor' => '',
    'theme_style' => 'big-dash',
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1419534513921-1553',
  'new_line' => 'true',
  'wrapper_breakpoint' =>
  array (
    'tablet' =>
    array (
      'edited' => true,
      'col' => 10,
      'clear' => true,
      'order' => 7,
    ),
    'mobile' =>
    array (
      'edited' => false,
      'col' => 7,
      'clear' => true,
      'order' => 0,
    ),
    'custom-1410783666947' =>
    array (
      'col' => 13,
      'order' => 6,
      'clear' => true,
      'edited' => true,
    ),
  ),
  'breakpoint' =>
  array (
    'tablet' =>
    array (
      'edited' => true,
      'left' => 2,
      'col' => 8,
      'order' => 2,
    ),
    'mobile' =>
    array (
      'edited' => false,
      'left' => 0,
      'col' => 7,
      'order' => 0,
    ),
    'custom-1410783666947' =>
    array (
      'edited' => true,
      'left' => 5,
      'col' => 8,
      'order' => 8,
    ),
  ),
));

$about->add_element("PlainTxt", array (
  'columns' => '18',
  'margin_left' => '3',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'id' => 'module-1419529925442-1585',
  'options' =>
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<blockquote>When arriving to live in Brisbane over four years ago, and not knowing any tradesmen in the area, when needing a Plumber, I phoned Fixer. Over that time, any job needed doing, has been carried out quickly and professionally. The workmanship is excellent and I have found the work to be very cost effective. Suggestions were made with a certain job and I am very thrilled with the outcome. I would recommend Fixer to anyone in the future.</blockquote><h6 class=""></h6>',
    'type' => 'PlainTxtModel',
    'element_id' => 'text-object-1419529925441-1374',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'row' => 38,
    'is_edited' => true,
    'border_style' => 'none',
    'border_width' => 1,
    'border_color' => 'rgba(0, 0, 0, 0)',
    'bg_color' => 'rgba(0, 0, 0, 0)',
    'anchor' => '',
    'theme_style' => '_default',
    'breakpoint' =>
    (array)(array(
       'tablet' =>
      (array)(array(
         'theme_style' => 'u-paragraph-mobile',
      )),
       'custom-1410783666947' =>
      (array)(array(
         'theme_style' => 'u-paragraph-mobile',
      )),
       'mobile' =>
      (array)(array(
         'theme_style' => 'u-paragraph-mobile',
      )),
    )),
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1419533894982-1674',
  'new_line' => 'true',
  'wrapper_breakpoint' =>
  array (
    'tablet' =>
    array (
      'edited' => true,
      'col' => 12,
      'clear' => true,
      'order' => 8,
    ),
    'mobile' =>
    array (
      'edited' => false,
      'col' => 7,
      'clear' => true,
      'order' => 0,
    ),
    'custom-1410783666947' =>
    array (
      'col' => 18,
      'order' => 7,
      'clear' => true,
      'edited' => true,
    ),
  ),
  'breakpoint' =>
  array (
    'tablet' =>
    array (
      'edited' => true,
      'left' => 0,
      'col' => 12,
      'order' => 1,
    ),
    'mobile' =>
    array (
      'edited' => false,
      'left' => 0,
      'col' => 7,
      'order' => 0,
    ),
    'custom-1410783666947' =>
    array (
      'edited' => true,
      'left' => 0,
      'col' => 18,
      'order' => 2,
    ),
  ),
));

$about->add_element("PlainTxt", array (
  'columns' => '11',
  'margin_left' => '3',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'id' => 'module-1419533895354-1818',
  'options' =>
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<h5>Mr Bob Woody</h5>',
    'type' => 'PlainTxtModel',
    'element_id' => 'text-object-1419533895354-1909',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'is_edited' => true,
    'border_style' => 'none',
    'border_width' => 1,
    'border_color' => 'rgba(0, 0, 0, 0)',
    'bg_color' => 'rgba(0, 0, 0, 0)',
    'anchor' => '',
    'breakpoint' =>
    (array)(array(
       'custom-1410783666947' =>
      (array)(array(
         'theme_style' => 'u-sub-heading-mobile',
      )),
       'tablet' =>
      (array)(array(
         'theme_style' => 'u-sub-heading-mobile',
      )),
       'mobile' =>
      (array)(array(
         'theme_style' => 'u-sub-heading-mobile',
      )),
    )),
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1419534285175-1008',
  'new_line' => 'true',
  'wrapper_breakpoint' =>
  array (
    'tablet' =>
    array (
      'edited' => true,
      'col' => 12,
      'clear' => true,
      'order' => 9,
    ),
    'mobile' =>
    array (
      'edited' => false,
      'col' => 7,
      'clear' => true,
      'order' => 0,
    ),
    'custom-1410783666947' =>
    array (
      'col' => 15,
      'order' => 8,
      'clear' => true,
      'edited' => true,
    ),
  ),
  'breakpoint' =>
  array (
    'tablet' =>
    array (
      'edited' => true,
      'left' => 0,
      'col' => 12,
      'order' => 8,
    ),
    'mobile' =>
    array (
      'edited' => false,
      'left' => 0,
      'col' => 7,
      'order' => 0,
    ),
    'custom-1410783666947' =>
    array (
      'edited' => true,
      'left' => 3,
      'col' => 12,
      'order' => 9,
    ),
  ),
));

$regions->add($about);

$coverage = upfront_create_region(
			array (
  'name' => 'coverage',
  'title' => 'Coverage',
  'type' => 'wide',
  'scope' => 'local',
  'container' => 'coverage',
  'position' => 1,
  'allow_sidebar' => true,
),
			array (
  'row' => 60,
  'background_type' => 'color',
  'nav_region' => '',
  'background_color' => '#ufc5',
  'breakpoint' =>
  (array)(array(
     'tablet' =>
    (array)(array(
       'edited' => false,
       'col' => 24,
    )),
     'mobile' =>
    (array)(array(
       'edited' => false,
       'col' => 24,
    )),
     'custom-1410783666947' =>
    (array)(array(
       'edited' => false,
       'col' => 24,
    )),
  )),
)
			);

$coverage->add_element("PlainTxt", array (
  'columns' => '24',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '13',
  'margin_bottom' => '0',
  'id' => 'module-1414410356937-1690',
  'options' =>
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '
<h2 class="" style="text-align: center;"><span class="upfront_theme_color_0" data-verified="redactor" data-redactor-tag="span" data-redactor-class="upfront_theme_color_0">Coverage Area</span></h2>',
    'type' => 'PlainTxtModel',
    'element_id' => 'text-object-1414410356935-1820',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'is_edited' => true,
    'border_style' => 'none',
    'border_width' => 1,
    'border_color' => 'rgba(0, 0, 0, 0)',
    'bg_color' => 'rgba(0, 0, 0, 0)',
    'anchor' => 'coverage',
    'row' => 11,
    'theme_style' => 'u-sub-heading',
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1414410437674-1593',
  'new_line' => 'true',
  'wrapper_breakpoint' =>
  array (
    'tablet' =>
    array (
      'col' => 12,
      'order' => 0,
    ),
    'mobile' =>
    array (
      'col' => 7,
      'order' => 0,
    ),
    'custom-1410783666947' =>
    array (
      'col' => 18,
      'order' => 0,
    ),
  ),
  'breakpoint' =>
  array (
    'tablet' =>
    array (
      'edited' => false,
      'left' => 0,
      'col' => 12,
      'order' => 0,
    ),
    'mobile' =>
    array (
      'edited' => false,
      'left' => 0,
      'col' => 7,
      'order' => 0,
    ),
    'custom-1410783666947' =>
    array (
      'edited' => false,
      'left' => 0,
      'col' => 18,
      'order' => 0,
    ),
  ),
));

$coverage->add_element("PlainTxt", array (
  'columns' => '24',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'id' => 'module-1406200069453-1687',
  'options' =>
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<h3 class="" style="text-align: center;"></h3><h1 style="text-align: center;" class=""><span class="upfront_theme_color_0">We Come to You</span></h1><h1 class="" style="text-align: center;"></h1><h1 class="" style="text-align: center;"></h1><h1 class="" style="text-align: center;"></h1><h1 class=""></h1><h1 class=""></h1>',
    'type' => 'PlainTxtModel',
    'element_id' => 'text-object-1406200069452-1923',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'row' => 32,
    'is_edited' => true,
    'border_style' => 'none',
    'border_width' => 1,
    'border_color' => 'rgba(0, 0, 0, 0)',
    'bg_color' => 'rgba(0, 0, 0, 0)',
    'theme_style' => '_default',
    'anchor' => '',
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1406200069453-1687',
  'new_line' => 'true',
  'wrapper_breakpoint' =>
  array (
    'tablet' =>
    array (
      'col' => 12,
      'order' => 0,
    ),
    'mobile' =>
    array (
      'col' => 7,
      'order' => 0,
    ),
    'custom-1410783666947' =>
    array (
      'col' => 18,
      'order' => 0,
    ),
  ),
  'breakpoint' =>
  array (
    'tablet' =>
    array (
      'edited' => false,
      'left' => 0,
      'col' => 12,
      'order' => 0,
    ),
    'mobile' =>
    array (
      'edited' => false,
      'left' => 0,
      'col' => 7,
      'order' => 0,
    ),
    'custom-1410783666947' =>
    array (
      'edited' => false,
      'left' => 0,
      'col' => 18,
      'order' => 0,
    ),
  ),
));

$regions->add($coverage);

$contact = upfront_create_region(
			array (
  'name' => 'contact',
  'title' => 'Contact',
  'type' => 'wide',
  'scope' => 'local',
  'container' => 'contact',
  'position' => 1,
  'allow_sidebar' => true,
),
			array (
  'row' => 110,
  'background_type' => 'image',
  'nav_region' => '',
  'background_color' => '#ufc5',
  'background_style' => 'fixed',
  'background_position_y' => '100',
  'background_position_x' => '100',
  'background_image' => '' . get_stylesheet_directory_uri() . '/images/archive-home/dome.png',
  'background_image_ratio' => 1.0500000000000000444089209850062616169452667236328125,
  'background_repeat' => 'no-repeat',
  'background_position' => '100% 100%',
  'breakpoint' =>
  (array)(array(
     'tablet' =>
    (array)(array(
       'edited' => true,
       'background_position_y' => '100',
       'background_style' => 'fixed',
       'background_repeat' => 'no-repeat',
       'background_position' => '100% 100%',
       'background_position_x' => '100',
       'background_type' => 'image',
       'row' => 107,
    )),
     'mobile' =>
    (array)(array(
       'edited' => true,
       'background_position_y' => '100',
       'background_style' => 'fixed',
       'background_repeat' => 'no-repeat',
       'background_position' => '100% 100%',
       'background_position_x' => '100',
       'background_type' => 'image',
       'row' => 103,
    )),
     'custom-1410783666947' =>
    (array)(array(
       'edited' => true,
       'row' => 107,
    )),
  )),
  'use_padding' => 0,
  'sub_regions' =>
  array (
    0 => '',
  ),
)
			);

$contact->add_element("PlainTxt", array (
  'columns' => '10',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '10',
  'margin_bottom' => '0',
  'id' => 'module-1412850227558-1156',
  'options' =>
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<h2 style="text-align: start;" class=""><span style="color:rgb(255, 255, 255)" rel="color:rgb(255, 255, 255)" data-verified="redactor" data-redactor-tag="span" data-redactor-style="color:rgb(255, 255, 255)">Ready to talk to our experts?</span></h2>',
    'type' => 'PlainTxtModel',
    'element_id' => 'text-object-1412850227556-1966',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'is_edited' => true,
    'border_style' => 'none',
    'border_width' => 1,
    'border_color' => 'rgba(0, 0, 0, 0)',
    'bg_color' => 'rgba(0, 0, 0, 0)',
    'anchor' => '',
    'row' => 11,
    'breakpoint' =>
    (array)(array(
       'mobile' =>
      (array)(array(
         'theme_style' => 'u-sub-heading-mobile',
      )),
       'tablet' =>
      (array)(array(
         'theme_style' => '_default',
      )),
    )),
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1413382904694-1241',
  'new_line' => 'true',
  'wrapper_breakpoint' =>
  array (
    'tablet' =>
    array (
      'col' => 11,
      'order' => 0,
    ),
    'mobile' =>
    array (
      'col' => 7,
      'order' => 0,
      'clear' => true,
      'edited' => true,
    ),
    'custom-1410783666947' =>
    array (
      'col' => 14,
      'order' => 0,
    ),
  ),
  'breakpoint' =>
  array (
    'tablet' =>
    array (
      'edited' => false,
      'left' => 1,
      'col' => 10,
      'order' => 0,
    ),
    'mobile' =>
    array (
      'edited' => true,
      'left' => 0,
      'col' => 7,
      'order' => 0,
      'top' => 0,
    ),
    'custom-1410783666947' =>
    array (
      'edited' => false,
      'left' => 4,
      'col' => 10,
      'order' => 0,
    ),
  ),
));

$contact->add_element("Ucontact", array (
  'columns' => '10',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'id' => 'module-1406205101532-1649',
  'options' =>
  array (
    'form_add_title' =>
    array (
    ),
    'form_title' => 'Contact form',
    'form_name_label' => 'Name ',
    'form_email_label' => 'Phone Number',
    'form_email_to' => '',
    'show_subject' =>
    array (
    ),
    'show_captcha' =>
    array (
    ),
    'form_subject_label' => 'Your subject:',
    'form_captcha_label' => 'CAPTCHA:',
    'form_default_subject' => 'Sent from the website',
    'form_message_label' => 'Type your enquiry here',
    'form_button_text' => 'Submit',
    'form_validate_when' => 'submit',
    'form_label_position' => 'over',
    'type' => 'UcontactModel',
    'view_class' => 'UcontactView',
    'class' => 'c24 upfront-contact-form',
    'has_settings' => 1,
    'id_slug' => 'ucontact',
    'element_id' => 'ucontact-object-1406205101531-1670',
    'theme_style' => 'ucontact-contact-style',
    'anchor' => '',
    'row' => '',
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1413382910819-1693',
  'new_line' => 'true',
  'wrapper_breakpoint' =>
  array (
    'tablet' =>
    array (
      'col' => 11,
      'order' => 0,
    ),
    'mobile' =>
    array (
      'col' => 7,
      'order' => 1,
      'clear' => true,
      'edited' => true,
    ),
    'custom-1410783666947' =>
    array (
      'col' => 14,
      'order' => 0,
    ),
  ),
  'breakpoint' =>
  array (
    'tablet' =>
    array (
      'edited' => false,
      'left' => 1,
      'col' => 10,
      'order' => 0,
    ),
    'mobile' =>
    array (
      'edited' => false,
      'left' => 0,
      'col' => 7,
      'order' => 0,
    ),
    'custom-1410783666947' =>
    array (
      'edited' => false,
      'left' => 4,
      'col' => 10,
      'order' => 0,
    ),
  ),
));

$regions->add($contact);

if (file_exists(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'prefooter.php')) include(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'prefooter.php');

if (file_exists(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'footer.php')) include(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'footer.php');