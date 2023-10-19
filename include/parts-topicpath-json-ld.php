<?php
$BreadcrumbList = [
	'@context' => 'http://schema.org',
	'@type' => 'BreadcrumbList',
	'itemListElement' => [
		[
			'@type' => 'ListItem',
			'position' => '1',
			'name' => 'JOINUS 50th TOP',
			'item' => $abs_root
		]
	]
];
if(isset($topicpath) && is_array($topicpath) && count($topicpath)) : ?>
<script type="application/ld+json">
<?php
foreach($topicpath as $i => $tp) {
	$BreadcrumbList['itemListElement'][] = [
		'@type' => 'ListItem',
		'position' => ($i + 2),
		'name' => $tp['name'],
		'item' => preg_match("|^/|i", $tp['href']) ? $abs_root . ltrim($tp['href'], '/') : $tp['href'],
	];
	if(!$tp['href']) {
		unset($BreadcrumbList['itemListElement'][count($BreadcrumbList['itemListElement'])-1]['item']);
	}
}
echo json_encode($BreadcrumbList, JSON_UNESCAPED_UNICODE);
?>

</script>
<?php endif; ?>
