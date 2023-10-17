<?php
// タイトル・ディスクリプション
$page_title = ['ザ・コスメティックテラスタシロ 倉野さん', 'Staff Interview Zoom in!'];
$page_description = '';

// ページカテゴリ
$page_category = 'zoomin';

// ローカルcss・js設定
$local_css = ['../css/zoomin.css'];
$local_js = ['../js/zoomin.js'];
$use_swiper = true;

// canonical
$canonical_url = '/zoomin/01/';

// パンくず
$topicpath = [
	[
		'name' => 'Staff Interview Zoom in!',
		'href' => '/zoomin/',
	],
	[
		'name' => '06. ザ・コスメティックテラスタシロ 倉野さん',
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

	<article class="zoomin_article zoomin06">
		<div class="xw">
			<header class="article_header mov_header mov_first">
				<picture class="ph">
					<source media="screen and (max-width: 767px)" srcset="images/main_sq.jpg">
					<img src="images/main.jpg" alt="ザ・コスメティックテラスタシロ 倉野さん" width="1240" height="617">
				</picture>
				<p class="num"><img src="images/number.svg" alt="06" width="180" height="110" loading="lazy" decoding="async"></p>
				<div class="box">
					<h1><span class="shop">ザ・コスメティックテラスタシロ</span> <span class="name">倉野</span>さん</h1>
					<p class="history">ジョイナス歴23年</p>
				</div><!-- /.box -->
			</header><!-- /.article_header -->


			<div class="article_lead mov_show fadeup">
				<p class="lead">「 お客様とともに<br class="sp">楽しむ 」</p>
				<p>若い方、年配の方、<br class="sp">幅広い客層と交流できる<br>ジョイナスでの接客を<br class="sp">楽しむ姿が印象的！</p>
			</div><!-- /.article_lead -->


			<section class="ontime">
				<h2 class="mov_show fadeup"><picture>
					<source media="screen and (max-width: 767px)" srcset="../images/ontime_sp.svg">
					<img src="../images/ontime.svg" alt="ZOOM IN! ON TIME" width="274" height="260" loading="lazy" decoding="async">
				</picture></h2>
				<dl class="qa_block mov_show fadeup">
					<dt>お仕事でのこだわりは？</dt>
					<dd><span class="strong">フレンドリーな会話の中で</span><span class="strong">お客様と一緒に発見し、学ぶことも。</span>
						勤続23年。「倉野さんの顔を見ると安心する」と、長く通ってくださる方もいます。多彩なメーカーのコスメを実際に使い比べ、納得して購入いただけるようフレンドリーな接客を心がけています。
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
								<dt>ストレス解消法は？</dt>
								<dd><span class="strong">ワインとキャンドルで</span>
									休日は家事で終わることも多いけど、時にはのんびり。「クイーンズ伊勢丹」でワインを買っておいて、夕方からキャンドルを灯してゆっくりと過ごします。黄昏時、というのがポイント。
								</dd>
							</dl><!-- /.qa_block -->
							<p class="ph"><img src="images/offtime01.jpg" alt="" width="736" height="736" loading="lazy" decoding="async"></p>
						</div><!-- /.item -->
						<div class="item mov_show fadeup reverse swiper-slide">
							<dl class="qa_block">
								<dt>最近ハマっていることは？</dt>
								<dd><span class="strong">夫婦でラジオ体操！</span>
									夫の退職をキッカケに、毎朝ふたりでラジオ体操をするようになりました。出勤の前に体を動かすと、仕事中も調子がいいんです。すっかり出勤前のルーティンになっています。
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
						<dt>ジョイナスでよく行くのは？</dt>
						<dd>無印良品の食品コーナー。出退勤時に入りやすい立地なので、よく立ち寄ります。カーレーやミートソースのようなレトルト食品も重宝するし、小腹用にいつも買うのはバウムクーヘン。お気に入りはバナナ味です！</dd>
					</dl><!-- /.qa_block -->
					<p class="ph mov_show fadeup"><img src="images/joinus_ph.jpg" alt="" width="754" height="590" loading="lazy" decoding="async"></p>
				</div><!-- /.contents -->

				<p class="image mov_show fadeup"><img src="images/image02.png" alt="" width="480" height="840" loading="lazy" decoding="async"></p>
			</section><!-- /.joinus -->


			<section class="information w mov_show fadeup">
				<h2><span><img src="../images/information.svg" alt="SHOP INFORMATION" width="250" height="30" loading="lazy" decoding="async"></span></h2>

				<div class="contents">
					<p class="ph"><img src="images/shop_ph.jpg" alt="ザ・コスメティックテラス タシロ" width="754" height="590" loading="lazy" decoding="async"></p>
					<div class="main">
						<p class="logo"><img src="images/shop_logo.svg" alt="ザ・コスメティックテラス タシロ" width="400" height="56" loading="lazy" decoding="async"></p><!-- /.logo -->
						<p class="name">ザ・コスメティックテラス タシロ / B1</p>
						<p>国内ブランドを中心に、デパコスからプチプラまでを一堂に扱うコスメセレクトショップです。幅広い層の人が入りやすい雰囲気を心がけ、さまざまなアイテム自由にお試しいただけます。カウンセリングや肌診断も気軽にお声がけください。</p>
					</div><!-- /.main -->
				</div><!-- /.contents -->
			</section><!-- /.joinus -->

		</div><!-- /.xw -->

		<p class="back_btn"><a href="../" class="box_btn ff_en black">Staff Interview Zoom in! TOP</a></p>
	</article>

<?php include_once 'common-foot.php'; ?>

</body>
</html>
