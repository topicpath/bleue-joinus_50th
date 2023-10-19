<?php
if(!isset($page_og_type)) {
	$page_og_type = $page_category == 'index' ? 'website' : 'article';
}
$page_prefix_type = $page_og_type == 'website' ? 'website' : 'article';
?>
<!DOCTYPE html>
<html lang="ja">
<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# <?php echo $page_prefix_type; ?>: http://ogp.me/ns/<?php echo $page_prefix_type; ?>#">
<meta charset="UTF-8">
<?php include_once('tag-head_start.php'); ?>
<title><?php echo $view_page_title; ?></title>
<meta name="description" content="<?php echo htmlentities($page_description, ENT_COMPAT, 'UTF-8'); ?>">
<?php if(defined('BASE_KEYWORDS')) : ?>
<meta name="keywords" content="<?php echo htmlentities($view_page_keywords, ENT_COMPAT, 'UTF-8'); ?>">
<?php endif; ?>
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<script>
var ua = navigator.userAgent.toLowerCase();
if ((ua.indexOf('iphone') != -1) || ua.indexOf('ipod') != -1 || (ua.indexOf("android") != -1 && ua.indexOf("mobile") != -1) || (ua.indexOf("firefox") != -1 && ua.indexOf("mobile") != -1) || (ua.indexOf("windows") != -1 && ua.indexOf("phone") != -1)) {
}else if(ua.indexOf('ipad') > -1 || (ua.indexOf('macintosh') > -1 && 'ontouchend' in document) || ua.indexOf('android') > -1){
	document.write('<meta name="viewport" content="width=1200">');
}
</script>
<?php if(isset($noindex)) : ?>
<meta name="robots" content="noindex,nofollow">
<?php endif; ?>
<meta name="format-detection" content="telephone=no">

<!-- font -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Arvo:wght@700&family=Zen+Kaku+Gothic+New:wght@500;700;900&display=swap" rel="stylesheet">
<!-- /font -->

<!-- css -->
<?php if(isset($local_css) && count($local_css)) : foreach($local_css as $css) : if(!$css) continue; ?>
<link href="<?php echo $css; ?>" rel="stylesheet">
<?php endforeach; endif; ?>
<!-- / css -->

<!-- script -->
<script src="<?php echo $root; ?>js/jquery-3.7.1.min.js" defer></script>
<?php if(isset($local_js) && count($local_js)) : foreach($local_js as $js) : if(!$js) continue; ?>
<script src="<?php echo $js; ?>" defer></script>
<?php endforeach; endif; ?>
<!-- / script -->

<?php if(isset($local_inline_meta)) : ?>
<?php echo $local_inline_meta; ?>

<?php endif; ?>
<!-- ogp -->
<meta property="og:title" content="<?php echo htmlentities($view_page_title, ENT_COMPAT, 'UTF-8'); ?>">
<meta property="og:type" content="<?php echo $page_og_type; ?>">
<meta property="og:url" content="<?php echo $view_canonical_url; ?>">
<?php if(isset($page_ogimage)) : ?>
<?php if(is_array($page_ogimage)) : ?>
<meta property="og:image" content="<?php echo $page_ogimage[0]; ?>">
<meta property="og:image:width" content="<?php echo $page_ogimage[1]; ?>">
<meta property="og:image:height" content="<?php echo $page_ogimage[2]; ?>">
<?php else : ?>
<meta property="og:image" content="<?php echo $page_ogimage; ?>">
<?php if(isset($page_ogimage_w)) : ?>
<meta property="og:image:width" content="<?php echo $page_ogimage_w; ?>">
<?php endif; ?>
<?php if(isset($page_ogimage_h)) : ?>
<meta property="og:image:height" content="<?php echo $page_ogimage_h; ?>">
<?php endif; ?>
<?php endif; ?>
<?php else : ?>
<meta property="og:image" content="<?php echo $abs_root; ?>ogp.jpg">
<meta property="og:image:width" content="1200">
<meta property="og:image:height" content="630">
<?php endif; ?>
<meta property="og:site_name" content="JOINUS | ジョイナス">
<meta property="og:description" content="<?php echo htmlentities(isset($page_og_description) ? $page_og_description : $page_description, ENT_COMPAT, 'UTF-8'); ?>">
<meta name="twitter:card" content="summary_large_image">
<!-- / ogp -->

<?php if(isset($view_canonical_url) && $view_canonical_url): ?>
<link href="<?php echo $view_canonical_url; ?>" rel="canonical">
<?php endif; ?>
<?php if(isset($prev_page_url) && $prev_page_url): ?>
<link href="<?php echo $prev_page_url;?>" rel="prev">
<?php endif;?>
<?php if(isset($next_page_url) && $next_page_url): ?>
<link href="<?php echo $next_page_url;?>" rel="next">
<?php endif;?>

<link rel="icon" href="https://www.sotetsu-joinus.com/sites/default/files/cropped-favicon-192x192.png" type="image/png">

<?php if($page_category != '404') include_once('parts-topicpath-json-ld.php'); ?>

<?php if(isset($image_json) && is_array($image_json)) : if(count($image_json) == 1) $image_json = $image_json[0]; ?>
<script type="application/ld+json"><?php echo json_encode($image_json); ?></script>
<?php endif;?>

<?php include_once('tag-head_end.php'); ?>
<?php if(isset($local_tag_head_end_file) && file_exists($local_tag_head_end_file)) include_once($local_tag_head_end_file); ?>

</head>

