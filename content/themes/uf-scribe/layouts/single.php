<?php
if (file_exists(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'header.php')) include(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'header.php');

$main = upfront_create_region(
			array(
"name" => "main",
"title" => "Main Area",
"type" => "wide",
"scope" => "local",
"container" => "main",
"position" => 10,
"allow_sidebar" => true
),
			array(
"row" => 140,
"background_type" => "color",
"background_color" => "#c5d0db",
"breakpoint" => array(
	"tablet" => array(
		"edited" => false
		),
	"mobile" => array(
		"edited" => false
		)
	)
)
			);

$main->add_element("ThisPost", array(
"columns" => "24",
"margin_left" => "0",
"margin_right" => "0",
"margin_top" => "1",
"margin_bottom" => "0",
"id" => "default-post",
"rows" => 20,
"options" => array(
	"type" => "ThisPostModel",
	"view_class" => "ThisPostView",
	"class" => "c24 upfront-this_post",
	"has_settings" => 1,
	"id_slug" => "this_post",
	"row" => 10,
	"post_data" => array("date"),
	"disable_resize" => false,
	"disable_drag" => false,
	"layout" => array(array(
			"classes" => "c24 clr",
			"objects" => array(array(
					"slug" => "title",
					"classes" => "post-part c24"
					))
			), array(
			"classes" => "c24 clr",
			"objects" => array(array(
					"slug" => "date",
					"classes" => " post-part c24"
					))
			), array(
			"classes" => "c24 clr",
			"objects" => array(array(
					"slug" => "contents",
					"classes" => " post-part c24"
					))
			)),
	"element_id" => "default-post-object"
	),
"wrapper_id" => "default-post-wrapper",
"sticky" => false,
"wrapper_breakpoint" => array(
	"tablet" => array(
		"col" => 12
		),
	"mobile" => array(
		"col" => 7
		)
	),
"breakpoint" => array(
	"tablet" => array(
		"edited" => false,
		"left" => 0,
		"col" => 12
		),
	"mobile" => array(
		"edited" => false,
		"left" => 0,
		"col" => 7
		)
	)
));

$main->add_element("Ucomment", array(
"columns" => "24",
"margin_left" => "0",
"margin_right" => "0",
"margin_top" => "0",
"margin_bottom" => "0",
"id" => "default-comment",
"rows" => 10,
"options" => array(
	"id_slug" => "ucomment",
	"type" => "UcommentModel",
	"view_class" => "UcommentView",
	"class" => "c24 upfront-comment",
	"has_settings" => 0,
	"prepend_form" => false,
	"element_id" => "default-comment-object"
	),
"wrapper_id" => "default-comment-wrapper",
"sticky" => false,
"wrapper_breakpoint" => array(
	"tablet" => array(
		"col" => 12
		),
	"mobile" => array(
		"col" => 7
		)
	),
"breakpoint" => array(
	"tablet" => array(
		"edited" => false,
		"left" => 0,
		"col" => 12
		),
	"mobile" => array(
		"edited" => false,
		"left" => 0,
		"col" => 7
		)
	)
));

$regions->add($main);

if (file_exists(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'footer.php')) include(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'footer.php');