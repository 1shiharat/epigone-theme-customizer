<?php

/**
 * URLを取得
 */
function epigone_theme_customizer_url(){
	$dirname = dirname(__FILE__);
	$repo_dir = basename(dirname(__FILE__));
	$base_dir = basename(dirname(__DIR__));
	return get_template_directory_uri() . '/vendor/' . $base_dir . '/' . $repo_dir . '/';

}

