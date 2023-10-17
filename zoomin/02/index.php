<?php
// タイトル・ディスクリプション
$page_title = ['しゃぶせん 阿部さん', 'Staff Interview Zoom in!'];
$page_description = '';

// ページカテゴリ
$page_category = 'zoomin';

// ローカルcss・js設定
$local_css = ['../css/zoomin.css'];
$local_js = ['../js/zoomin.js'];
$use_swiper = true;

// canonical
$canonical_url = '/zoomin/02/';

// パンくず
$topicpath = [
	[
		'name' => 'Staff Interview Zoom in!',
		'href' => '/zoomin/',
	],
	[
		'name' => '02. しゃぶせん 阿部さん',
		'href' => $canonical_url,
	],
];

// config読み込み
require_once __DIR__ . '/../../include/site-config.php';

// meta読み込み
include_once 'common-meta.php';
?>

<body class="page-<?php echo $page_category; ?>">
<?php include_once 'common-head.php'; ?>
<?php include_once 'parts-topicpath.php'; ?>

	<article class="zoomin_article zoomin02">
		<div class="xw">
			<header class="article_header mov_header mov_first">
				<picture class="ph">
					<source media="screen and (max-width: 767px)" srcset="images/main_sq.jpg">
					<img src="images/main.jpg" alt="しゃぶせん 阿部さん" width="1240" height="617">
				</picture>
				<p class="num"><img src="images/number.svg" alt="02" width="180" height="110" loading="lazy" decoding="async"></p>
				<div class="box">
					<h1><span class="shop">しゃぶせん</span> <span class="name">阿部</span>さん</h1>
					<p class="history">ジョイナス歴7年</p>
				</div><!-- /.box -->
			</header><!-- /.article_header -->


			<div class="article_lead mov_show fadeup">
				<p class="lead">「 ジョイナスでの<br class="sp">バイトが人生を変えた 」</p>
				<p>阿部さんは、ジョイナス店での<br class="sp">アルバイトが<br class="pc">きっかけで<br class="sp">飲食業界へ進んだといいます。</p>
			</div><!-- /.article_lead -->


			<section class="ontime">
				<h2 class="mov_show fadeup"><picture>
					<source media="screen and (max-width: 767px)" srcset="../images/ontime_sp.svg">
					<img src="../images/ontime.svg" alt="ZOOM IN! ON TIME" width="274" height="260" loading="lazy" decoding="async">
				</picture></h2>
				<dl class="qa_block mov_show fadeup">
					<dt>お仕事の中で嬉しかったことは？</dt>
					<dd><span class="strong">「戻ってきてくれてありがとう」</span><span class="strong">「前もお店にいましたよね」の声</span>
						学生時代にジョイナス店でアルバイトを始め、そのまま社員に。施設の改装とともに一度は閉店しましたが、2022年にカムバックしました！私の顔を覚えてくださっていたお客様もいらして、感無量です。
					</dd>
				</dl><!-- /.qa_block -->

				<p class="image mov_show fadeup"><img src="images/image01.png" alt="" width="500" height="960" loading="lazy" decoding="async"></p>
			</section><!-- /.ontime -->


			<section class="offtime w">
				<h2 class="mov_show fadeup"><picture>
					<source media="screen and (max-width: 767px)" srcset="../images/offtime_sp.svg">
					<img src="../images/offtime.svg" alt="ZOOM IN! OFF TIME" width="292" height="256" loading="lazy" decoding="async">
				</picture></h2>

				<div class="contents swiper">
					<div class="swiper-wrapper">
						<div class="item mov_show fadeup swiper-slide">
							<dl class="qa_block">
								<dt>リラックス法は？</dt>
								<dd><span class="strong">仕事の後の1杯</span>
									自宅では妻と娘の会話をツマミに1杯。お店の営業後にまかないを食べながらスタッフとグラスを交わすこともあります。何気ない雑談からお店づくりのヒントをもらうことも。
								</dd>
							</dl><!-- /.qa_block -->
							<p class="ph"><img src="images/offtime01.jpg" alt="" width="736" height="736" loading="lazy" decoding="async"></p>
						</div><!-- /.item -->
						<div class="item mov_show fadeup reverse swiper-slide">
							<dl class="qa_block">
								<dt>休日の過ごし方は？</dt>
								<dd><span class="strong">愛娘とデート</span>
									娘と遊んでいることが多いです！自転車の練習をしたり、人形で遊んだり。かわいくて仕方ないですね（笑）。家族との時間を少しでも多く作れるように心がけています。
								</dd>
							</dl><!-- /.qa_block -->
							<p class="ph"><img src="images/offtime02.jpg" alt="" width="736" height="736" loading="lazy" decoding="async"></p>
						</div><!-- /.item -->
					</div>
					<a class="arrow l"><img src="../images/arrow.svg" alt="" width="40" height="35" loading="lazy" decoding="async"></a>
					<a class="arrow r"><img src="../images/arrow.svg" alt="" width="40" height="35" loading="lazy" decoding="async"></a>
				</div><!-- /.contents -->
			</section><!-- /.offtime -->


			<section class="joinus w">
				<h2 class="ff_din mov_show fadeup"><span>JOINUS /</span> YOKOHAMA</h2>

				<div class="contents">
					<dl class="qa_block mov_show fadeup">
						<dt>横浜のおすすめスポットは？</dt>
						<dd>飲食店がひしめく野毛町は、ハシゴ酒が楽しい。結婚する前はひと晩に3、4軒を巡ることもありました。今は同じ桜木町界隈でも、家族でみなとみらいの海沿いを散歩することが多いです。</dd>
					</dl><!-- /.qa_block -->
					<p class="ph mov_show fadeup"><img src="images/joinus_ph.jpg" alt="" width="754" height="590" loading="lazy" decoding="async"></p>
				</div><!-- /.contents -->

				<p class="image mov_show fadeup"><img src="images/image02.png" alt="" width="480" height="840" loading="lazy" decoding="async"></p>
			</section><!-- /.joinus -->


			<section class="information w mov_show fadeup">
				<h2><span><img src="../images/information.svg" alt="SHOP INFORMATION" width="250" height="30" loading="lazy" decoding="async"></span></h2>

				<div class="contents">
					<p class="ph"><img src="images/shop_ph.jpg" alt="しゃぶせん" width="754" height="590" loading="lazy" decoding="async"></p>
					<div class="main">
						<p class="logo"><img src="images/shop_logo.svg" alt="しゃぶせん" width="400" height="80" loading="lazy" decoding="async"></p><!-- /.logo -->
						<p class="name">しゃぶせん / B2</p>
						<p>2022年8月再オープン。全席でひとりから鍋を楽しめるしゃぶしゃぶ専門店です。豚、国産牛、黒毛和牛が選べるお肉はもちろん、野菜もたっぷりセットに。スタッフがあく取りや出汁の追加をしますので、気軽にお声がけください。</p>
					</div><!-- /.main -->
				</div><!-- /.contents -->
			</section><!-- /.joinus -->

		</div><!-- /.xw -->

		<p class="back_btn"><a href="../" class="box_btn ff_en black">Staff Interview Zoom in! TOP</a></p>
	</article>

<?php include_once 'common-foot.php'; ?>

</body>
</html>
