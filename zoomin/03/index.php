<?php
// タイトル・ディスクリプション
$page_title = ['ヒステリックグラマー 三堀さん', 'Staff Interview Zoom in!'];
$page_description = '';

// ページカテゴリ
$page_category = 'zoomin';

// ローカルcss・js設定
$local_css = ['../css/zoomin.css'];
$local_js = ['../js/zoomin.js'];
$use_swiper = true;

// canonical
$canonical_url = '/zoomin/03/';

// パンくず
$topicpath = [
	[
		'name' => 'Staff Interview Zoom in!',
		'href' => '/zoomin/',
	],
	[
		'name' => '03. ヒステリックグラマー 三堀さん',
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

	<article class="zoomin_article zoomin03">
		<div class="xw">
			<header class="article_header mov_header mov_first">
				<picture class="ph">
					<source media="screen and (max-width: 767px)" srcset="images/main_sq.jpg">
					<img src="images/main.jpg" alt="ヒステリックグラマー 三堀さん" width="1240" height="617">
				</picture>
				<p class="num"><img src="images/number.svg" alt="03" width="180" height="110" loading="lazy" decoding="async"></p>
				<div class="box">
					<h1><span class="shop">ヒステリックグラマー</span> <span class="name">三堀</span>さん</h1>
					<p class="history">ジョイナス歴5年</p>
					<p class="insta hv_op"><a href="https://www.instagram.com/mitu1218/?hl=ja" target="_blank"><img src="../../images/ico-insta.png" alt="instagram" width="72" height="72"></a></p>
				</div><!-- /.box -->
			</header><!-- /.article_header -->


			<div class="article_lead mov_show fadeup">
				<p class="lead">SNSで<br class="sp">スタイルを発信！</p>
				<p>ブランドと自分の世界観を<br class="sp">SNSで表現する三堀さん。<br>フォロワーの反応が<br class="sp">モチベーションになるそう。</p>
			</div><!-- /.article_lead -->


			<section class="ontime">
				<h2 class="mov_show fadeup"><picture>
					<source media="screen and (max-width: 767px)" srcset="../images/ontime_sp.svg">
					<img src="../images/ontime.svg" alt="ZOOM IN! ON TIME" width="274" height="260" loading="lazy" decoding="async">
				</picture></h2>
				<dl class="qa_block mov_show fadeup">
					<dt>仕事の面白さは？</dt>
					<dd><span class="strong">お客様と一緒にファッションや</span><span class="strong">カルチャーを楽しむこと</span>
						僕自身、ロックの文化が背景にある洋服が好き。「ヒステリックグラマー」のかっこよさを体現し、共感してもらえたらうれしいです。「インスタグラムを見ました」「同じアイテムが欲しいです」と、来店につながった時はやはりテンションが上がります。
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
								<dt>最近ハマっているものは？</dt>
								<dd><span class="strong">ヴィンテージデニム</span>
									これは1960年代の「リーバイス BIG E」です。ファッションについて色々と調べていくと、デニムに辿り着くんです。4年前ぐらいからハマりだし、知識は仕事にも役立っています。
								</dd>
							</dl><!-- /.qa_block -->
							<p class="ph"><img src="images/offtime01.jpg" alt="" width="736" height="736" loading="lazy" decoding="async"></p>
						</div><!-- /.item -->
						<div class="item mov_show fadeup reverse swiper-slide">
							<dl class="qa_block">
								<dt>休日の過ごし方は？</dt>
								<dd><span class="strong">ギター演奏と古着屋巡り</span>
									以前バンドをやっていたこともあり、部屋でギターを触ることが多いです。好きなジャンルはラウドロック系！あとは古着屋巡りで、デニムやロックTを掘りに古着屋をハシゴする日もあります。
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
				<h2 class="ff_din mov_show fadeup">YOKOHAMA</h2>

				<div class="contents">
					<dl class="qa_block mov_show fadeup">
						<dt>横浜でよく行く場所は？</dt>
						<dd>横浜駅西口すぐにある町中華「中華一 龍王」！ボリューム満点で安いので、ランチに通う頻度は高め。炒め物全般、みそラーメンがおすすめです。こういう町中華や居酒屋が多いのも横浜のいいところ。</dd>
					</dl><!-- /.qa_block -->
					<p class="ph mov_show fadeup"><img src="images/joinus_ph.jpg" alt="" width="754" height="590" loading="lazy" decoding="async"></p>
				</div><!-- /.contents -->

				<p class="image mov_show fadeup"><img src="images/image02.png" alt="" width="480" height="840" loading="lazy" decoding="async"></p>
			</section><!-- /.joinus -->


			<section class="information w mov_show fadeup">
				<h2><span><img src="../images/information.svg" alt="SHOP INFORMATION" width="250" height="30" loading="lazy" decoding="async"></span></h2>

				<div class="contents">
					<p class="ph"><img src="images/shop_ph.jpg" alt="ヒステリック グラマー" width="754" height="590" loading="lazy" decoding="async"></p>
					<div class="main">
						<p class="logo"><img src="images/shop_logo.svg" alt="ヒステリック グラマー" width="400" height="40" loading="lazy" decoding="async"></p><!-- /.logo -->
						<p class="name">ヒステリック グラマー / 1F <br class="sp"><a href="https://www.sotetsu-joinus.com/shop/shop_519#floorMap" target="_blank" class="map">MAP</a></p>
						<p>デニムやミリタリーテイストを中心としたアメカジをお探しなら。ロックやヒッピー、グランジなど、カルチャーのエッセンスも遊び心をくすぐります。店舗は駅直結でアクセスがよく、アットホームな雰囲気です。ぜひ遊びに来てください。</p>
						<p class="more_btn"><a href="https://www.instagram.com/mitu1218/?hl=ja" target="_blank"><span>三堀さんのInstagramをCHECK！</span></a></p>
					</div><!-- /.main -->
				</div><!-- /.contents -->
			</section><!-- /.joinus -->

		</div><!-- /.xw -->

		<p class="back_btn"><a href="../" class="box_btn ff_en black">Staff Interview Zoom in! TOP</a></p>
	</article>

<?php include_once 'common-foot.php'; ?>

</body>
</html>
