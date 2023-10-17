<?php
// タイトル・ディスクリプション
$page_title = ['ルートート ギャラリー 児平さん', 'Staff Interview Zoom in!'];
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
		'name' => '03. ルートート ギャラリー 児平さん',
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
					<img src="images/main.jpg" alt="ルートート ギャラリー 児平さん" width="1240" height="617">
				</picture>
				<p class="num"><img src="images/number.svg" alt="03" width="180" height="110" loading="lazy" decoding="async"></p>
				<div class="box">
					<h1><span class="shop">ルートート ギャラリー</span> <span class="name">児平</span>さん</h1>
					<p class="history">ジョイナス歴5年</p>
				</div><!-- /.box -->
			</header><!-- /.article_header -->


			<div class="article_lead mov_show fadeup">
				<p class="lead">「 気配りを忘れない 」</p>
				<p>元気な笑顔がトレードマークの<br class="sp">児平さん。<br class="pc">親近感ある接客の<br class="sp">中にも、心がけていることが。</p>
			</div><!-- /.article_lead -->


			<section class="ontime">
				<h2 class="mov_show fadeup"><picture>
					<source media="screen and (max-width: 767px)" srcset="../images/ontime_sp.svg">
					<img src="../images/ontime.svg" alt="ZOOM IN! ON TIME" width="274" height="260" loading="lazy" decoding="async">
				</picture></h2>
				<dl class="qa_block mov_show fadeup">
					<dt>仕事でやりがいを感じるのはどんな時？</dt>
					<dd><span class="strong">「あなたに接客してもらえて</span><span class="strong">よかった」と言われたこと。</span>
						「接客をされるのが苦手」な方っていますよね。実は私もなんです。おひとりで色々と見ていらっしゃる時は、不要にお声がけをしないのも配慮。でも、ちょっとした気配りで打ち解けてくださる瞬間がうれしいです。
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
								<dt>最近ハマっていることは？</dt>
								<dd><span class="strong">推しキャラの刺繍</span>
									大好きなスヌーピー（PEANUTS）。<br>グッズ収集では飽き足らず、オリジナル作品をつくっています！こちらは「ルートート ギャラリー」のエコ素材バッグに自ら刺繍をしました！
								</dd>
							</dl><!-- /.qa_block -->
							<p class="ph"><img src="images/offtime01.jpg" alt="" width="736" height="736" loading="lazy" decoding="async"></p>
						</div><!-- /.item -->
						<div class="item mov_show fadeup reverse swiper-slide">
							<dl class="qa_block">
								<dt>休日の過ごし方は？</dt>
								<dd><span class="strong">子どもと野毛山動物園へ</span>
									子どもと遊びに行く場所がネタ切れしたら、ここへ！入場無料なのにライオンやレッサーパンダ、は虫類など見どころがたくさん。お散歩できる公園も併設しているのがGoodですね。
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
						<dt>横浜のおすすめ情報は？</dt>
						<dd>夏休みは子どもと一緒に「金沢動物園」のナイトズーへ出かけるのが毎年恒例。日が暮れて涼しくなると、ゾウやキリンも動きが活発になって、いつもと違う表情が見られますよ。</dd>
					</dl><!-- /.qa_block -->
					<p class="ph mov_show fadeup"><img src="images/joinus_ph.jpg" alt="" width="754" height="590" loading="lazy" decoding="async"></p>
				</div><!-- /.contents -->

				<p class="image mov_show fadeup"><img src="images/image02.png" alt="" width="480" height="840" loading="lazy" decoding="async"></p>
			</section><!-- /.joinus -->


			<section class="information w mov_show fadeup">
				<h2><span><img src="../images/information.svg" alt="SHOP INFORMATION" width="250" height="30" loading="lazy" decoding="async"></span></h2>

				<div class="contents">
					<p class="ph"><img src="images/shop_ph.jpg" alt="ルートート ギャラリー" width="754" height="590" loading="lazy" decoding="async"></p>
					<div class="main">
						<p class="logo"><img src="images/shop_logo.png" alt="ルートート ギャラリー" width="400" height="60" loading="lazy" decoding="async"></p><!-- /.logo -->
						<p class="name">ルートート ギャラリー / 1F</p>
						<p>JRと相鉄線を結ぶ通路の路面に、2023年8月リニューアルオープン。お出かけが楽しくなる、デザイン豊富なトートバッグの専門店です。機能性、サイズやカラーのバリエーションはお気軽にお尋ねください。バックからストックをお持ちします。</p>
					</div><!-- /.main -->
				</div><!-- /.contents -->
			</section><!-- /.joinus -->

		</div><!-- /.xw -->

		<p class="back_btn"><a href="../" class="box_btn ff_en black">Staff Interview Zoom in! TOP</a></p>
	</article>

<?php include_once 'common-foot.php'; ?>

</body>
</html>
