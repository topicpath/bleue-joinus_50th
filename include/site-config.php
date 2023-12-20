<?php
$site_domain = 'https://campaign.sotetsu-joinus.com';	// ドメイン（末尾 '/' なし）
$site_root = '/50th_anniversary/';	// サイトルート（'/'から）

$test_dir = ['test', 'campaign.sotetsu-joinus.com'];	// テストアップする場合のディレクトリ（配列）
$include_dir = ['/'];	// インクルードファイルのディレクトリ（このファイルからのパス）


// =============================================================================================================================================================
// タイトル・ディスクリプション・キーワード・パンくず

// 共通ページタイトル
define('BASE_TITLE', 'ジョイナス50周年');

// ページタイトル区切り文字
define('PAGE_TITLE_DELIMITER', ' | ');

// ページタイトルの連結を逆にする
define('PAGE_TITLE_RTL', false);

// 共通ページディスクリプション
define('BASE_DESCRIPTION', '');

// 共通ページキーワード
// define('BASE_KEYWORDS', '');


// =============================================================================================================================================================
define('INSTAGRAM', 'https://www.instagram.com/joinus.official/');

// =============================================================================================================================================================

// デバイス判定
if(!defined('DEVICE')) {
	if(!isset($ua)) {
		require_once __DIR__ . '/ua.class.php';
		$ua = new UserAgent();
	}
	define('DEVICE', $ua->set());
}


// =============================================================================================================================================================
global $root;
$root = $site_root;

$path = $_SERVER['REQUEST_URI'];
$dir = array_merge(array_filter(explode("/", $path)));


if(count($dir)) {
/*
	$root_dirs = array_merge(array_filter(explode("/", $root)));
	if(count($root_dirs)) {
		$root = [];
		foreach($root_dirs as $d) {
			if($d == $dir[0]) {
				$root[] = $d;
				array_shift($dir);
			}
		}
		$root = count($root) ? '/' . implode("/", $root) . '/' : '/';
	}
*/

	if(isset($test_dir)) {
		if(in_array($dir[0], $test_dir)) {
			$root = '/' . $dir[0] . $root;
//			$root .= $dir[0] . '/';
			array_shift($dir);
		}
//		elseif(in_array($dir[1], $test_dir)) {
//			$root .= $dir[1] . '/';
//			array_shift($dir);
//		}
	}
}

$abs_root = $site_domain . $root;

// =============================================================================================================================================================

set_include_path(__DIR__ . implode(PATH_SEPARATOR . __DIR__, $include_dir) . PATH_SEPARATOR . get_include_path());
if(isset($page_include_dir) && is_array($page_include_dir) && count($page_include_dir)) set_include_path(get_include_path() . PATH_SEPARATOR . implode(PATH_SEPARATOR, $page_include_dir));


// =============================================================================================================================================================
// wordpress
if(isset($use_wordpress) && !defined('ABSPATH')) {
	$wp_file = __DIR__ . '/../cms-admin/wp-blog-header.php';
	if(!file_exists($wp_file)) $wp_file = __DIR__ . '/../../cms-admin/wp-blog-header.php';
	require($wp_file);
	header("HTTP/1.1 200 OK");
}


// =============================================================================================================================================================
// css / js
function css_js_file_set($f) {
	global $root;
	if(preg_match("|^/[^/]|i", $f)) {
		$file = __DIR__ . '/..' . $f;
		if(file_exists($file)) {
			$filetime = filemtime($file);
			$f .= '?' . $filetime;
		}
		$f = $root . ltrim($f, '/');
	} elseif(!preg_match('/(http|https):\/\//', $f)) {
		$file = $f;
		if(file_exists($file)) {
			$filetime = filemtime($file);
			$f .= '?' . $filetime;
		}
	}
	return $f;
}

if(!isset($local_css) || !is_array($local_css)) $local_css = [];
if(!isset($local_js) || !is_array($local_js)) $local_js = [];

array_unshift($local_css, '/css/template.css');
array_unshift($local_js, '/js/site.js');

if(isset($use_slick)) {
	array_unshift($local_js, 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js');
}
if(isset($use_swiper)) {
	array_unshift($local_css, 'https://unpkg.com/swiper@8/swiper-bundle.min.css');
	array_unshift($local_js, 'https://unpkg.com/swiper@8/swiper-bundle.min.js');
}
if(isset($use_magnific)) {
	array_unshift($local_css, '/js/magnific/magnific-popup.css');
	array_unshift($local_js, '/js/magnific/jquery.magnific-popup.min.js', '/js/magnific.js');
}

$local_css = array_map('css_js_file_set', $local_css);
$local_js = array_map('css_js_file_set', $local_js);


// =============================================================================================================================================================

// canonical
if(isset($canonical_url)) {
	$view_canonical_url = (preg_match("|^/|i", $canonical_url)) ? $abs_root . ltrim($canonical_url, '/') : $canonical_url;
	$view_canonical_url = htmlentities($view_canonical_url, ENT_COMPAT, 'UTF-8');
} else {
//	$view_canonical_url = $site_domain . str_replace('index.php', '', $_SERVER['REQUEST_URI']);
}
if(isset($prev_page_url)) {
	$prev_page_url = (preg_match("|^/|i", $prev_page_url)) ? $abs_root . ltrim($prev_page_url, '/') : $prev_page_url;
	$prev_page_url = htmlentities($prev_page_url, ENT_COMPAT, 'UTF-8');
}
if(isset($next_page_url)) {
	$next_page_url = (preg_match("|^/|i", $next_page_url)) ? $abs_root . ltrim($next_page_url, '/') : $next_page_url;
	$next_page_url = htmlentities($next_page_url, ENT_COMPAT, 'UTF-8');
}
if(isset($page_base_url)) {
	$page_base_url = (preg_match("|^/|i", $page_base_url)) ? $abs_root . ltrim($page_base_url, '/') : $page_base_url;
	$page_base_url = htmlentities($page_base_url, ENT_COMPAT, 'UTF-8');
}



// =============================================================================================================================================================

// ページタイトル設定
if(!isset($view_page_title)) {
	if(isset($page_title)) {
		$my_title = [BASE_TITLE];
		if(is_array($page_title)) {
			$my_title = array_merge($page_title, $my_title);
		} elseif (is_string($page_title)) {
			if($page_title != '') array_unshift($my_title, $page_title);
		}
		if(PAGE_TITLE_RTL) $my_title = array_reverse($my_title);
		$view_page_title = implode(PAGE_TITLE_DELIMITER, $my_title);
	} else {
		$view_page_title = BASE_TITLE;
	}
}

// ページディスクリプション設定
if(!isset($page_description) || !$page_description) $page_description = BASE_DESCRIPTION;


// ページキーワード設定
if(defined('BASE_KEYWORDS')) {
	if(isset($page_keywords) && $page_keywords) $view_page_keywords = $page_keywords . ',' . BASE_KEYWORDS;
	elseif(!isset($view_page_keywords)) $view_page_keywords = BASE_KEYWORDS;
}

