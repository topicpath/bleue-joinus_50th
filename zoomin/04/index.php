<?php
// タイトル・ディスクリプション
$page_title = ['ゴディバ 新井さん', 'Staff Interview Zoom in!'];
$page_description = '';

// ページカテゴリ
$page_category = 'zoomin';

// ローカルcss・js設定
$local_css = ['../css/zoomin.css'];
$local_js = ['../js/zoomin.js'];
$use_swiper = true;

// canonical
$canonical_url = '/zoomin/04/';

// パンくず
$topicpath = [
	[
		'name' => 'Staff Interview Zoom in!',
		'href' => '/zoomin/',
	],
	[
		'name' => '04. ゴディバ 新井さん',
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

	<article class="zoomin_article zoomin04">
		<div class="xw">
			<header class="article_header mov_header mov_first">
				<picture class="ph">
					<source media="screen and (max-width: 767px)" srcset="images/main_sq.jpg">
					<img src="images/main.jpg" alt="ゴディバ 新井さん" width="1240" height="617">
				</picture>
				<p class="num"><img src="images/number.svg" alt="04" width="180" height="110" loading="lazy" decoding="async"></p>
				<div class="box">
					<h1><span class="shop">ゴディバ</span> <span class="name">新井</span>さん</h1>
					<p class="history">ジョイナス歴7年</p>
				</div><!-- /.box -->
			</header><!-- /.article_header -->


			<div class="article_lead mov_show fadeup">
				<p class="lead">接客から生まれる<br class="sp">つながり</p>
				<p>「ご自宅用ですか？<br class="sp">贈り物ですか？」に始まり<br>広がっていく会話の楽しさを<br class="sp">語ってくれました。</p>
			</div><!-- /.article_lead -->


			<section class="ontime">
				<h2 class="mov_show fadeup"><picture>
					<source media="screen and (max-width: 767px)" srcset="../images/ontime_sp.svg">
					<img src="../images/ontime.svg" alt="ZOOM IN! ON TIME" width="274" height="260" loading="lazy" decoding="async">
				</picture></h2>
				<dl class="qa_block mov_show fadeup">
					<dt>職場の好きなところは？</dt>
					<dd><span class="strong">お客様も仲間も温かいところ</span>
						「GODIVA」に入社してからジョイナスの店舗ひと筋です！ジョイナスらしく、幅広い層のお客様との出会いに恵まれ、世間話を交わすような方も多くいらっしゃいます。スタッフも温かく、2度の育休の際も笑顔でサポートしてもらえて感謝しかありません。
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
								<dt>休日の過ごし方は？</dt>
								<dd><span class="strong">息子たちとの時間に</span>
									1歳と3歳になる息子たちと遊んでいます。お兄ちゃんはブロックやパズル、ミニカーに夢中！まだまだ目が離せませんが、少しずつ兄弟で遊んでくれるようになってきました。
								</dd>
							</dl><!-- /.qa_block -->
							<p class="ph"><img src="images/offtime01.jpg" alt="" width="736" height="736" loading="lazy" decoding="async"></p>
						</div><!-- /.item -->
						<div class="item mov_show fadeup reverse swiper-slide">
							<dl class="qa_block">
								<dt>自分なりの息抜き法は？</dt>
								<dd><span class="strong">やっぱりチョコがご褒美</span>
									学生時代から大のスイーツ好きは変わらず。家にはコンビニ菓子から「GODIVA」まで、何かしら常備しています。息子に気づかれないよう、素早く口に運ぶのがポイントです（笑）
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
				<h2 class="ff_din mov_show fadeup">JOINUS</h2>

				<div class="contents">
					<dl class="qa_block mov_show fadeup">
						<dt>ジョイナスでよく行く場所は？</dt>
						<dd>ジョイナスの森彫刻公園。ジョイナスに、緑豊かな屋上庭園があるって知っていましたか？ベンチやちょっとした遊歩道があり、横浜駅の上とは信じられないほど閑静です。休憩時間に訪れることが多いですね。</dd>
					</dl><!-- /.qa_block -->
					<p class="ph mov_show fadeup"><img src="images/joinus_ph.jpg" alt="" width="754" height="590" loading="lazy" decoding="async"></p>
				</div><!-- /.contents -->

				<p class="image mov_show fadeup"><img src="images/image02.png" alt="" width="480" height="840" loading="lazy" decoding="async"></p>
			</section><!-- /.joinus -->


			<section class="information w mov_show fadeup">
				<h2><span><img src="../images/information.svg" alt="SHOP INFORMATION" width="250" height="30" loading="lazy" decoding="async"></span></h2>

				<div class="contents">
					<p class="ph"><img src="images/shop_ph.jpg" alt="ゴディバ" width="754" height="590" loading="lazy" decoding="async"></p>
					<div class="main">
						<p class="logo"><img src="images/shop_logo.svg" alt="ゴディバ" width="400" height="104" loading="lazy" decoding="async"></p><!-- /.logo -->
						<p class="name">ゴディバ / 1F <br class="sp"><a href="https://www.sotetsu-joinus.com/shop/shop_280#floorMap" target="_blank" class="map">MAP</a></p>
						<p>チョコや焼き菓子はもちろん、オーダーを受けてからつくるチョコレートドリンク「ショコリキサー」もご用意。また、次々と登場する期間限定の「マンスリー シェフズ セレクション」もお見逃しなく。他ブランドとのコラボ商品もお目見えします。</p>
					</div><!-- /.main -->
				</div><!-- /.contents -->
			</section><!-- /.joinus -->

		</div><!-- /.xw -->

		<p class="back_btn"><a href="../" class="box_btn ff_en black">Staff Interview Zoom in! TOP</a></p>
	</article>

<?php include_once 'common-foot.php'; ?>

</body>
</html>
