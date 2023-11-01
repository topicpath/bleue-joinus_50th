<?php
// タイトル・ディスクリプション
$page_title = ['#JOINUSの思い出教えてください'];
$page_description = '';

// ページカテゴリ
$page_category = 'memory';

// ローカルcss・js設定
$local_css = ['css/memory.css'];
$local_js = ['js/memory.js'];
$use_swiper = true;

// canonical
$canonical_url = '/memory/';

// パンくず
$topicpath = [
	[
		'name' => '#JOINUSの思い出教えてください',
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
		<div class="memory_wrapper">
			<header class="memory_header mov_header mov_first">
				<h1><span><img src="images/logo.svg" alt="#JOINUS" width="198" height="34">の思い出</span><span>教えてください</span></h1>
				<p>「相鉄 公式」X（旧Twitter）に寄せられた<br>皆様からの思い出を当時の写真とともに紹介します。</p>
				<p class="s">（「#JOINUSの思い出教えてください」2023年7月14日～23日実施 ※一部抜粋。）</p>
			</header><!-- /.memory_header -->

			<div class="memory_history_ph mov_show fadeup">
				<div class="slide swiper">
					<div class="swiper-wrapper">
						<figure class="swiper-slide">
							<p class="ph"><img src="images/slide_ph01.jpg" alt="ジョイナスオープン" width="570" height="470"></p>
							<figcaption><strong>1973年11月</strong> 相鉄ジョイナス開業</figcaption>
						</figure>
						<figure class="swiper-slide">
							<p class="ph"><img src="images/slide_ph02.jpg" alt="ジョイナスオープニングイベント" width="570" height="470"></p>
							<figcaption><strong>1973年11月</strong> 相鉄ジョイナス開業</figcaption>
						</figure>
						<figure class="swiper-slide">
							<p class="ph"><img src="images/slide_ph03.jpg" alt="ジョイナス1周年記念" width="570" height="470"></p>
							<figcaption><strong>1974年11月</strong> 相鉄ジョイナス1周年記念イベント<br>（4階にあった自然の広場）</figcaption>
						</figure>
						<figure class="swiper-slide">
							<p class="ph"><img src="images/slide_ph04.jpg" alt="ジョイナス1階24時間通路 秋のジョイナス" width="570" height="470"></p>
							<figcaption><strong>1977年</strong> ジョイナス1階大通り</figcaption>
						</figure>
						<figure class="swiper-slide">
							<p class="ph"><img src="images/slide_ph05.jpg" alt="ジョイナスの森" width="570" height="470"></p>
							<figcaption><strong>1978年11月</strong> 屋上・ジョイナスの森<br>（彫刻公園になる以前）</figcaption>
						</figure>
						<figure class="swiper-slide">
							<p class="ph"><img src="images/slide_ph06.jpg" alt="ジョイナス地下・噴水" width="570" height="470"></p>
							<figcaption><strong>1982年9月</strong> 地下2階にあった泉の広場</figcaption>
						</figure>
						<figure class="swiper-slide">
							<p class="ph"><img src="images/slide_ph07.jpg" alt="ジョイナスイレブン入口（正面）" width="570" height="470"></p>
							<figcaption><strong>1983年6月</strong> 地下1階にあった<br>「ジョイナスイレブン」</figcaption>
						</figure>
						<figure class="swiper-slide">
							<p class="ph"><img src="images/slide_ph08.jpg" alt="ジョイナスの森彫刻公園しゅん工" width="570" height="470"></p>
							<figcaption><strong>1983年11月</strong> 屋上・ジョイナスの森彫刻公園オープン</figcaption>
						</figure>
						<figure class="swiper-slide">
							<p class="ph"><img src="images/slide_ph09.jpg" alt="ジョイナス自然の広場" width="570" height="470"></p>
							<figcaption><strong>1987年7月</strong> 4階にあった自然の広場</figcaption>
						</figure>
						<figure class="swiper-slide">
							<p class="ph"><img src="images/slide_ph10.jpg" alt="ジョイナスグランドオープン" width="570" height="470"></p>
							<figcaption><strong>2015年12月</strong> 新生ジョイナスグランドオープン</figcaption>
						</figure>
					</div>
					<a class="arrow swiper-button-prev"></a>
					<a class="arrow swiper-button-next"></a>
				</div><!-- /.slide -->

			</div><!-- /.memory_history_ph -->


			<div class="memory_contents w">
<?php
$file = new SplFileObject('data.csv');
$file->setFlags(SplFileObject::READ_CSV);
foreach ($file as $i => $line) {
	if(isset($line[0]) && is_numeric($line[0])){
		$my_data = [
			'name' => $line[1],
			'txt' => $line[2],
		];
		$datas[] = $my_data;
	}
}
foreach ($datas as $item) : ?>
				<dl class="item mov_show fadeup">
					<dt><?php echo $item['name']; ?> 様</dt>
					<dd><?php echo $item['txt']; ?></dd>
				</dl><!-- /.item -->
<?php endforeach; ?>
			</div><!-- /.memory_contents -->

		</div><!-- /.memory_wrapper -->

		<p class="bottom_notes w sp_pd">※投稿いただいた思い出の一部を掲載しています。<br>※投稿内容については、一部加筆修正しています。<br>※順不同</p>


		<a class="fix_message_btn"><span><span class="en">JOINUS50</span>周年<br>メッセージを見る</span></a>
		<div class="modal_message">
			<p><img src="images/message.png" alt="JOINUS50周年メッセージ" width="1000" height="1415"><a class="close"></a></p>
		</div>


		<p class="back_btn"><a href="<?php echo $root; ?>" class="box_btn ff_en">Joinus 50th TOP</a></p>
	</section>

<?php include_once 'common-foot.php'; ?>

</body>
</html>
