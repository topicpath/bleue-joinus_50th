<?php
// タイトル・ディスクリプション
$page_title = ['Let\'s Celebration SMILES'];
$page_description = '';

// ページカテゴリ
$page_category = 'smiles';

// ローカルcss・js設定
$local_css = ['css/smiles.css'];
// $local_js = ['js/smiles.js'];

// canonical
$canonical_url = '/smiles/';

// パンくず
$topicpath = [
	[
		'name' => 'Let\'s Celebration SMILES',
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
		<header class="smiles_header mov_header mov_first">
			<h1>アニバーサリーを祝して<br class="sp">いつもの笑顔を未来へ</h1>
			<p>「<span class="num">50</span>周年おめでとう！」の声を寄せに<br>集まったスタッフたち。<br><span class="num">50</span>名のはじける笑顔をお届けします。</p>
			<p class="bg_en"><img src="images/head_en.svg" alt="SMILES" width="524" height="134"></p>
			<div class="hanabi hanabi1 pc"><img src="images/head_hanabi01.png" alt="" width="400" height="400"></div>
			<div class="hanabi hanabi2 pc"><img src="images/head_hanabi02.png" alt="" width="540" height="540"></div>
		</header><!-- /.smiles_header -->


		<div class="items"><div class="w">
			<ul>
<?php
$datas = [
	[
		'img' => '002.jpg',
		'shop' => 'アインズ＆トルペ',
		'floor' => '3F',
	],
	[
		'img' => '001.jpg',
		'shop' => 'アインズ＆トルペ',
		'floor' => '3F',
	],
	[
		'img' => '003.jpg',
		'shop' => 'アモスタイル バイ トリンプ',
		'floor' => '4F',
		'name' => ['きせみう', '松田'],
	],
	[
		'img' => '005.jpg',
		'shop' => 'ウサギ オンライン ストア',
		'floor' => '3F',
		'name' => ['村山'],
	],
	[
		'img' => '006.jpg',
		'shop' => 'ウサギ オンライン ストア',
		'floor' => '3F',
	],
	[
		'img' => '007.jpg',
		'shop' => 'ウサギ オンライン ストア',
		'floor' => '3F',
	],
	[
		'img' => '009.jpg',
		'shop' => 'エーユー スタイル ヨコハマ',
		'floor' => '4F',
	],
	[
		'img' => '008.jpg',
		'shop' => 'エーユー スタイル ヨコハマ',
		'floor' => '4F',
		'name' => ['嶋口'],
	],
	[
		'img' => '011.jpg',
		'shop' => 'エシカルシー',
		'floor' => '2F',
	],
	[
		'img' => '012.jpg',
		'shop' => 'エシカルシー',
		'floor' => '2F',
		'name' => ['田中'],
	],
	[
		'img' => '013.jpg',
		'shop' => 'オステリア ウーヴァ・ラーラ',
		'floor' => 'B2',
	],
	[
		'img' => '014.jpg',
		'shop' => '銀座ライオン',
		'floor' => 'B2',
		'name' => ['谷本'],
	],
	[
		'img' => '015.jpg',
		'shop' => '神戸レタス',
		'floor' => '4F',
		'name' => ['みい'],
	],
	[
		'img' => '017.jpg',
		'shop' => '神戸レタス',
		'floor' => '4F',
	],
	[
		'img' => '016.jpg',
		'shop' => '神戸レタス',
		'floor' => '4F',
	],
	[
		'img' => '018.jpg',
		'shop' => 'ココディール',
		'floor' => 'B1',
	],
	[
		'img' => '020.jpg',
		'shop' => 'ココディール',
		'floor' => 'B1',
		'name' => ['二野', '鈴木'],
	],
	[
		'img' => '022.jpg',
		'shop' => 'さが美',
		'floor' => '3F',
		'name' => ['杉山'],
	],
	[
		'img' => '023.jpg',
		'shop' => 'さが美',
		'floor' => '3F',
	],
	[
		'img' => '024.jpg',
		'shop' => 'ザボディショップ',
		'floor' => 'B1',
		'name' => ['きくち', '宮本'],
	],
	[
		'img' => '026.jpg',
		'shop' => 'ザボディショップ',
		'floor' => 'B1',
	],
	[
		'img' => '028.jpg',
		'shop' => 'ダブルネーム',
		'floor' => '4F',
		'name' => ['谷津倉'],
	],
	[
		'img' => '029.jpg',
		'shop' => 'チコ',
		'floor' => '4F',
		'name' => ['ノサキ'],
	],
	[
		'img' => '030.jpg',
		'shop' => 'チコ',
		'floor' => '4F',
		'name' => ['陽菜乃'],
	],
	[
		'img' => '031.jpg',
		'shop' => 'チュチュアンナ',
		'floor' => '4F',
	],
	[
		'img' => '032.jpg',
		'shop' => 'チュチュアンナ',
		'floor' => '4F',
	],
	[
		'img' => '033.jpg',
		'shop' => 'トランテアン ソン ドゥ モード',
		'floor' => 'B1',
	],
	[
		'img' => '034.jpg',
		'shop' => 'ノーリーズ',
		'floor' => 'B1',
		'name' => ['正賀', '池尾'],
	],
	[
		'img' => '036.jpg',
		'shop' => 'ノーリーズ',
		'floor' => 'B1',
	],
	[
		'img' => '038.jpg',
		'shop' => 'パークイースト',
		'floor' => '4F',
		'name' => ['川口'],
	],
	[
		'img' => '039.jpg',
		'shop' => 'ビーセカンド',
		'floor' => '2F',
		'name' => ['千田'],
	],
	[
		'img' => '040.jpg',
		'shop' => 'フランフラン',
		'floor' => '3F',
		'name' => ['栃村'],
	],
	[
		'img' => '041.jpg',
		'shop' => 'フランフラン',
		'floor' => '3F',
		'name' => ['寺島'],
	],
	[
		'img' => '042.jpg',
		'shop' => 'フランフラン',
		'floor' => '3F',
		'name' => ['朝倉', '横井', '宮下'],
	],
	[
		'img' => '045.jpg',
		'shop' => 'ポートランド',
		'floor' => '4F',
	],
	[
		'img' => '046.jpg',
		'shop' => 'マジェスティックレゴン',
		'floor' => '4F',
		'name' => ['まみ'],
	],
	[
		'img' => '047.jpg',
		'shop' => 'ラコレ',
		'floor' => '3F',
	],
	[
		'img' => '049.jpg',
		'shop' => 'ラリン',
		'floor' => '1F',
	],
	[
		'img' => '051.jpg',
		'shop' => 'ラワレ生活の木',
		'floor' => 'B1',
	],
	[
		'img' => '052.jpg',
		'shop' => 'ルートート ギャラリー',
		'floor' => '1F',
	],
	[
		'img' => '054.jpg',
		'shop' => 'レ・トワール・デュ・ソレイユ',
		'floor' => '1F',
	],
	[
		'img' => '055.jpg',
		'shop' => 'ロペピクニック',
		'floor' => 'B1',
		'name' => ['境野'],
	],
	[
		'img' => '056.jpg',
		'shop' => 'ロペピクニック',
		'floor' => 'B1',
	],
];
foreach ($datas as $item) : ?>
				<li class="mov_show fadeup">
<?php
$my_name = [];
if(isset($item['name'])) {
	foreach ($item['name'] as $n) {
		$my_name[] = $n . '<span>さん</span>';
	}
}
?>
					<p class="ph"><img src="item/<?php echo $item['img']; ?>" alt="<?php echo htmlspecialchars($item['shop'] . ($my_name ? ' ' . implode(' ', $my_name) : '')); ?>" width="680" height="680" loading="lazy" decoding="async"></p>
					<p class="shop"><?php echo $item['shop']; ?> <span class="floor"><?php echo $item['floor']; ?></span></p>
<?php if($my_name) : ?>
					<p class="name"><?php echo implode(' ', $my_name); ?></p>
<?php endif; ?>
				</li>
<?php endforeach; ?>
			</ul>
		</div></div><!-- /.items -->

		<p class="back_btn"><a href="<?php echo $root; ?>" class="box_btn ff_en">Joinus 50th TOP</a></p>
	</section>

<?php include_once 'common-foot.php'; ?>

</body>
</html>
