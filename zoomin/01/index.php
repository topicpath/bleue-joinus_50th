<?php
// タイトル・ディスクリプション
$page_title = ['ココディール 鈴木さん', 'Staff Interview Zoom in!'];
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
		'name' => '01. ココディール 鈴木さん',
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

	<article class="zoomin_article zoomin01">
		<div class="xw">
			<header class="article_header mov_header mov_first">
				<picture class="ph">
					<source media="screen and (max-width: 767px)" srcset="images/main_sq.jpg">
					<img src="images/main.jpg" alt="ココディール 鈴木さん" width="1240" height="617">
				</picture>
				<p class="num"><img src="images/number.svg" alt="01" width="180" height="110" loading="lazy" decoding="async"></p>
				<div class="box">
					<h1><span class="shop">ココディール</span> <span class="name">鈴木</span>さん</h1>
					<p class="history">ジョイナス歴1年4ヵ月</p>
				</div><!-- /.box -->
			</header><!-- /.article_header -->


			<div class="article_lead mov_show fadeup">
				<p class="lead">私に会いたい！<br class="sp">と思われる接客を</p>
				<p>ブランドのファンになって<br class="sp">もらえるよう<br class="pc">お礼状を欠かさない、<br class="sp">マメさも魅力の鈴木さん。</p>
			</div><!-- /.article_lead -->


			<section class="ontime">
				<h2 class="mov_show fadeup"><picture>
					<source media="screen and (max-width: 767px)" srcset="../images/ontime_sp.svg">
					<img src="../images/ontime.svg" alt="ZOOM IN! ON TIME" width="274" height="260" loading="lazy" decoding="async">
				</picture></h2>
				<dl class="qa_block mov_show fadeup">
					<dt>あなたにとってジョイナスとは？</dt>
					<dd><span class="strong">子どもの頃から縁があり</span><span class="strong">たくさんの幸せをくれる場所</span>
						ジョイナスは昔家族でごはんを食べに来ていた、思い出の場所。ここで働くことになり、さらにたくさんの縁を感じています。「選んでもらったコーデが気に入って」と通ってくださる方もいて、毎日が充実しています！
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
								<dd><span class="strong">友人や家族とおしゃべり</span>
									同級生や家族とお茶や食事をしながら、ひたすらおしゃべりを楽しみます。内容は他愛ないことばかりですが、大切な人たちとの時間は何よりのエネルギーチャージになります。
								</dd>
							</dl><!-- /.qa_block -->
							<p class="ph"><img src="images/offtime01.jpg" alt="" width="736" height="736" loading="lazy" decoding="async"></p>
						</div><!-- /.item -->
						<div class="item mov_show fadeup reverse swiper-slide">
							<dl class="qa_block">
								<dt>最近のハマりものは？</dt>
								<dd><span class="strong">「セルライ子」</span>
									メディアで話題のエステローラーです。<br>お風呂あがり、脚や肩にコロコロしながらマッサージを。店頭では洋服にあわせてヒールを履く日が多いため、むくみ対策に欠かせません。
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
						<dt>横浜のお気に入りコースは？</dt>
						<dd>気分のおもむくままに「横浜ベイクォーター」から「みなとみらい」や「大さん橋」あたりまでお散歩。イヤホンでお気に入りのK-POPなどを聴きながら、ノープランでテクテクと歩きます。</dd>
					</dl><!-- /.qa_block -->
					<p class="ph mov_show fadeup"><img src="images/joinus_ph.jpg" alt="" width="754" height="590" loading="lazy" decoding="async"></p>
				</div><!-- /.contents -->

				<p class="image mov_show fadeup"><img src="images/image02.png" alt="" width="480" height="840" loading="lazy" decoding="async"></p>
			</section><!-- /.joinus -->


			<section class="information w mov_show fadeup">
				<h2><span><img src="../images/information.svg" alt="SHOP INFORMATION" width="250" height="30" loading="lazy" decoding="async"></span></h2>

				<div class="contents">
					<p class="ph"><img src="images/shop_ph.jpg" alt="ココディール" width="754" height="590" loading="lazy" decoding="async"></p>
					<div class="main">
						<p class="logo"><img src="images/shop_logo.svg" alt="ココディール" width="400" height="60" loading="lazy" decoding="async"></p><!-- /.logo -->
						<p class="name">ココディール / B1 <br class="sp"><a href="https://www.sotetsu-joinus.com/shop/shop_498#floorMap" target="_blank" class="map">MAP</a></p>
						<p>フェミニンとカジュアル、ベーシックとトレンドを程よくMIXしたレディースブランド。フリルやフラワープリントだけでなく、シンプルながら着用時にスタイルアップして見える洋服が自慢です。ぜひ試着で縫製やラインの違いを感じてください。</p>
					</div><!-- /.main -->
				</div><!-- /.contents -->
			</section><!-- /.joinus -->

		</div><!-- /.xw -->

		<p class="back_btn"><a href="../" class="box_btn ff_en black">Staff Interview Zoom in! TOP</a></p>
	</article>

<?php include_once 'common-foot.php'; ?>

</body>
</html>
