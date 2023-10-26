<?php
// タイトル・ディスクリプション
$page_title = ['ジョイナス50周年限定アイテム&サービス'];
$page_description = '';

// ページカテゴリ
$page_category = 'items-service';

// ローカルcss・js設定
$local_css = ['css/items-service.css'];
$local_js = ['js/items-service.js'];

// canonical
$canonical_url = '/items-service/';

// パンくず
$topicpath = [
	[
		'name' => 'ANNIVERSARY ITEMS & SERVICE',
		'href' => $canonical_url,
	],
];

// config読み込み
require_once __DIR__ . '/../include/site-config.php';

// meta読み込み
include_once 'common-meta.php';
?>

<body class="page-<?php echo $page_category; ?>">
<?php include_once 'common-head.php'; ?>
<?php include_once 'parts-topicpath.php'; ?>

	<section>
		<header class="items-service_header mov_header mov_first">
			<h1>ジョイナス50周年<br>限定アイテム&サービス</h1>
			<p class="bg_en"><img src="images/head_en.svg" alt="ANNIVERSARY ITEMS & SERVICE" width="440" height="160"></p>
			<p class="start"><img src="images/head_start.png" alt="11.1 WED スタート！" width="87" height="87"></p>
			<div class="hanabi hanabi1 pc"><img src="images/head_hanabi01.png" alt="" width="400" height="400"></div>
			<div class="hanabi hanabi2"><img src="images/head_hanabi02.png" alt="" width="540" height="540"></div>
		</header><!-- /.items-service_header -->

<?php
$datas = [];
$categories = [];
$lines = [
	'1' => 'category',
	'2' => 'floor',
	'3' => 'name',
	'4' => 'kana',
	'5' => 'img',
	'6' => 'arr_title',
	'7' => 'arr_title',
	'8' => 'arr_title',
	'9' => 'arr_title',
	'10' => 'arr_txt',
	'11' => 'arr_txt',
	'12' => 'arr_txt',
	'13' => 'arr_txt',
	'14' => 'arr_notes',
	'15' => 'arr_notes',
];

$file = new SplFileObject('data.csv');
$file->setFlags(SplFileObject::READ_CSV);
$order = 1;
foreach ($file as $i => $line) {
	if(isset($line[0]) && $line[0]){
		$my_data = [];
		foreach ($lines as $k => $l) {
			$a = trim(mb_convert_kana($line[$k], "KVa", 'UTF-8'));
			if(!$a) continue;
			if($l == 'kana') {
				if(!$a) {
					$a = $my_data['name'];
				}
				$a = mb_convert_kana($a,"HcV", 'UTF-8');
			}
			if($l == 'img') {
				$a = $line[$k];
			}
			if(strpos($l, 'arr_') === 0) {
				$l = str_replace('arr_', '', $l);
				if(!$my_data[$l]) $my_data[$l] = [];
				$my_data[$l][] = $a;
			} else {
				$my_data[$l] = $a;
			}
		}
		$my_data['order'] = $order;

		$datas[] = $my_data;
		$order ++;

//		$categories[] = $my_data['category'];
	}
}
$kanas = array_column($datas, 'kana');
array_multisort($kanas, SORT_ASC, SORT_LOCALE_STRING, $datas);
// $categories = array_unique($categories);
$categories = [
	'ファッション',
	'ファッショングッズ',
	'ライフスタイル&コスメ',
	'グルメ',
	'サービス',
];
?>

		<div class="category_nav base_nav mov_show fadeup mov_first">
			<ul>
				<li><a class="all active">すべて</a></li>
<?php foreach ($categories as $c) : ?>
				<li><a><?php echo $c; ?></a></li>
<?php endforeach; ?>
			</ul>
		</div><!-- /.category_nav -->

		<div class="category_nav fix_category_nav sp">
			<ul>
				<li><a class="all active">すべて</a></li>
<?php foreach ($categories as $c) : ?>
				<li><a><?php echo $c; ?></a></li>
<?php endforeach; ?>
			</ul>
		</div><!-- /.category_nav -->


		<div class="items all"><div class="xw">
<?php foreach ($datas as $item) : ?>
			<section data-category="<?php echo htmlspecialchars($item['category']); ?>" style="order:<?php echo $item['order']; ?>"><div>
<?php if($item['img']) : ?>
				<p class="img"><img src="item/<?php echo $item['img']; ?>" alt="<?php echo htmlspecialchars($item['name']); ?>" width="510" height="365" loading="lazy" decoding="async"></p>
<?php endif; ?>
				<div class="info">
<?php if($item['title'] && is_array($item['title'])) : ?>
					<h2><?php echo implode('<br>', $item['title']); ?></h2>
<?php endif; ?>
<?php if($item['txt'] && is_array($item['txt'])) : foreach ($item['txt'] as $t) : ?>
					<p><?php echo $t; ?></p>
<?php endforeach; endif; ?>
<?php if($item['notes'] && is_array($item['notes'])) : foreach ($item['notes'] as $t) : ?>
					<p class="notes"><?php echo $t; ?></p>
<?php endforeach; endif; ?>
				</div><!-- /.info -->
				<p class="shop"><?php echo $item['name']; ?> ｜ <?php echo $item['floor']; ?></p>
			</div></section>

<?php endforeach; ?>

		</div></div><!-- /.items -->


		<ul class="items_notes point_li xw">
			<li><span>※</span>限定商品・メニュー・プレゼント等はご提供できる数に限りがあるため、なくなり次第終了となります。</li>
			<li><span>※</span>商品は仕入状況や、在庫状況により、ご提供できない場合や、内容や量が変更になる場合がございます。</li>
			<li><span>※</span>写真はイメージです。</li>
			<li><span>※</span>掲載価格はすべて税込価格です。</li>
			<li><span>※</span>詳細は各店頭スタッフへお問合せください。</li>
		</ul>

		<p class="back_btn"><a href="<?php echo $root; ?>" class="box_btn ff_en">Joinus 50th TOP</a></p>
	</section>

<?php include_once 'common-foot.php'; ?>

<a href="#" id="pagedown" class="show"></a>

</body>
</html>
