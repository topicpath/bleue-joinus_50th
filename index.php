<?php
// タイトル・ディスクリプション
$page_title = ['JOINUS 50th'];
$page_description = 'いつもと、未来へ。おかげさまで、JOINUSは今年50周年を迎えます。つぎの50年も、みなさんのいつもの存在であり続けるために。みなさんのキモチに応えていくために。いつもを積み重ね、より良い未来へともに進んでいく。あたらしいチャレンジを続けていく。これからもJOINUSにどうぞご期待ください。';

// ページカテゴリ
$page_category = 'index';

// ローカルcss・js設定
$local_css = ['css/index.css'];
$local_js = ['js/index.js'];
$use_swiper = true;

// canonical
$canonical_url = '/';

// config読み込み
require_once __DIR__ . '/include/site-config.php';

// meta読み込み
include_once 'common-meta.php';
?>

<body class="page-<?php echo $page_category; ?>">
<?php include_once 'common-head.php'; ?>

	<div class="index_main">
		<p class="logo"><img src="<?php echo $root; ?>images/logo.svg" alt="JOINUS 50th" width="80" height="62"></p>
		<p class="lead"><picture>
			<source media="screen and (max-width: 767px)" srcset="images/index/main_lead_sp.svg">
			<img src="images/index/main_lead.svg" alt="いつもと、未来へ。" width="510" height="55">
		</picture></p>
		<p class="txt"><picture>
			<source media="screen and (max-width: 767px)" srcset="images/index/main_txt_sp.svg">
			<img src="images/index/main_txt.svg" alt="おかげさまで、JOINUSは今年50周年" width="464" height="100">
		</picture></p>

		<p class="scroll"><a href="#contents" class="ff_din">SCROLL DOWN</a></p>

		<div class="j_images" id="main_j"></div>
	</div><!-- /.index_main -->

	<div class="hidden" id="hide_main_j"></div>


	<a id="contents" class="target" tabindex="-1"></a>
	<section class="index_topics mov_show fadeup">
		<header class="ff_en">
			<h2>TOPICS</h2>
			<p class="more"><a href="#" class="box_btn">View More</a></p>
		</header>
		<div>
			<ul class="topics def_topics">
				<li><a>
					<span class="time ff_en">2023.11.3</span>
					<span class="title">「プレミアムお買物券」事前予約は数量に達した為、終了いたしました。 </span>
				</li></a>
				<li><a href="premium-okaimono/">
					<span class="time ff_en">2023.11.2</span>
					<span class="title">「プレミアムお買物券」事前予約受付を開始。</span>
				</li></a>
				<li><a href="https://www.sotetsu-joinus.com/news/4329" target="_blank">
					<span class="time ff_en">2023.11.1</span>
					<span class="title">ジョイナス50周年特別企画！ジョイナスポイント5倍!!11月22日（水）～11月26日（日）実施決定！</span>
				</li></a>
			</ul>
			<div class="more_topics">
				<ul class="topics">
					<li><a href="premium-okaimono/">
						<span class="time ff_en">2023.11.1</span>
						<span class="title">ジョイナスポイント会員限定！「プレミアムお買物券」販売の事前予約が11月2日（木）朝10時スタート！</span>
					</li></a>
					<li><a href="https://www.sotetsu-joinus.com/news/4328" target="_blank">
						<span class="time ff_en">2023.11.1</span>
						<span class="title">Anniversary ワークショップ「廃材を使って作ろう！世界にひとつだけのJちゃん」を11月3日（金）4日（土）開催。</span>
					</li></a>
					<li><a href="https://www.sotetsu-joinus.com/news/4330" target="_blank">
						<span class="time ff_en">2023.11.1</span>
						<span class="title">11月19日（日）に開催するSDGsワークショップ「さつまいも掘りと植樹体験」の参加者募集開始。</span>
					</li></a>
					<li><a>
						<span class="time ff_en">2023.11.1</span>
						<span class="title">「懐かしのジョイナス」など歴史写真展を開催。B2広場にて12月31日（日）まで展示いたします。</span>
					</li></a>
					<li><a href="https://www.sotetsu-joinus.com/news/4283" target="_blank">
						<span class="time ff_en">2023.11.1</span>
						<span class="title">ジョイナス50周年特別企画！～おかいもの電車が帰ってきた！～「JOINUS×相模鉄道 スタンプラリー」を年11月3日（金）～11月19日（日）開催。</span>
					</li></a>
					<li><a>
						<span class="time ff_en">2023.10.28</span>
						<span class="title">「コート下取り2DAYS」を10月28日（土）29日（日）開催。</span>
					</li></a>
				</ul>
			</div><!-- /.more -->
		</div>
	</section><!-- /.index_topics -->

	<template id="add_topics">
		<ul>
			<li data-publish="2023-11-05 09:00"><a>
				<span class="time ff_en">2023.11.5</span>
				<span class="title">Anniversary ワークショップ「廃材を使って作ろう！世界にひとつだけのJちゃん」にご参加いただいた皆さまのオリジナル作品を、B1ホテル前広場にて12月31日（日）まで展示いたします。</span>
			</li></a>
			<li data-publish="2023-11-22 09:00"><a href="https://www.sotetsu-joinus.com/news/4329" target="_blank">
				<span class="time ff_en">2023.11.22</span>
				<span class="title">おトクな5日間！ジョイナスポイント5倍、本日より開始。</span>
			</li></a>
		</ul>
	</template>

<?php
$svg_arrow = '<svg xmlns="http://www.w3.org/2000/svg" width="40" height="35" viewBox="0 0 40 35"><path d="m40,17.5c0,9.665-8.954,17.5-20,17.5S0,27.165,0,17.5,8.954,0,20,0s20,7.835,20,17.5" stroke-width="0"/><line x1="28.255" y1="17.5" x2="9.374" y2="17.5" fill="none" stroke="#fff" stroke-linejoin="bevel" stroke-width="3"/><path d="m20.192,26.898c0-8.1,10.431-9.4,10.431-9.4,0,0-10.431-1.3-10.431-9.4" fill="none" stroke="#fff" stroke-linejoin="bevel" stroke-width="3"/></svg>';
?>

	<div class="hanabi_area">
		<section class="index_items">
			<a href="items-service/">
				<header class="mov_show">
					<p class="title_en wide ff_en mov_show fadeup">Anniversary Limited</p>
					<h2 class="mov_show fadeup"><img src="images/index/items_en.svg" alt="ANNIVERSARY ITEMS & SERVICE" width="406" height="148" loading="lazy" decoding="async"></h2>
				</header>
				<p class="lead mov_show fadeup">限定アイテムをはじめ、<br>特別メニューや特典が<br class="sp">盛りだくさん！</p>
				<p class="check mov_show fadeup">170のショップが参加！<strong>今すぐCheck！</strong></p>
			</a>

			<div class="items swiper mov_show fadeup">
				<ul class="swiper-wrapper">
					<li class="swiper-slide">
						<a href="items-service/#item015">
							<span class="ph"><img src="images/index/items_ph01.jpg" alt="" width="440" height="500" loading="lazy" decoding="async"></span>
							<span class="tag">限定カラー</span>
							<span class="shop">
								<span>エヌ ナチュラル<br> ビューティーベーシック</span>
								<span class="floor ff_din">3F</span>
							</span>
						</a>
					</li>
					<li class="swiper-slide">
						<a href="items-service/#item129">
							<span class="ph"><img src="images/index/items_ph02.jpg" alt="" width="440" height="500" loading="lazy" decoding="async"></span>
							<span class="tag">限定バッグ</span>
							<span class="shop">
								<span>アフタヌーンティー・<br>ティールーム</span>
								<span class="floor ff_din">B1</span>
							</span>
						</a>
					</li>
					<li class="swiper-slide">
						<a href="items-service/#item124">
							<span class="ph"><img src="images/index/items_ph03.jpg" alt="" width="440" height="500" loading="lazy" decoding="async"></span>
							<span class="tag">限定商品</span>
							<span class="shop">
								<span>ラブラリー バイ フェイラー</span>
								<span class="floor ff_din">3F</span>
							</span>
						</a>
					</li>
					<li class="swiper-slide">
						<a href="items-service/#item030">
							<span class="ph"><img src="images/index/items_ph04.jpg" alt="" width="440" height="500" loading="lazy" decoding="async"></span>
							<span class="tag">お買物でプレゼント</span>
							<span class="shop">
								<span>サルート バイ ワコール</span>
								<span class="floor ff_din">B1</span>
							</span>
						</a>
					</li>
					<li class="swiper-slide">
						<a href="items-service/#item145">
							<span class="ph"><img src="images/index/items_ph05.jpg" alt="" width="440" height="500" loading="lazy" decoding="async"></span>
							<span class="tag">特別セット</span>
							<span class="shop">
								<span>バケット</span>
								<span class="floor ff_din">B2</span>
							</span>
						</a>
					</li>
					<li class="swiper-slide">
						<a href="items-service/#item073">
							<span class="ph"><img src="images/index/items_ph06.jpg" alt="" width="440" height="500" loading="lazy" decoding="async"></span>
							<span class="tag">お買物でプレゼント</span>
							<span class="shop">
								<span>ア ドゥ ヴィーヴル</span>
								<span class="floor ff_din">3F</span>
							</span>
						</a>
					</li>
					<li class="swiper-slide">
						<a href="items-service/#item047">
							<span class="ph"><img src="images/index/items_ph07.jpg" alt="" width="440" height="500" loading="lazy" decoding="async"></span>
							<span class="tag">限定カラー</span>
							<span class="shop">
								<span>ノーリーズ</span>
								<span class="floor ff_din">B1</span>
							</span>
						</a>
					</li>
					<li class="swiper-slide">
						<a href="items-service/#item001">
							<span class="ph"><img src="images/index/items_ph08.jpg" alt="" width="440" height="500" loading="lazy" decoding="async"></span>
							<span class="tag">お買物でプレゼント</span>
							<span class="shop">
								<span>トプカピ</span>
								<span class="floor ff_din">1F</span>
							</span>
						</a>
					</li>
					<li class="swiper-slide">
						<a href="items-service/#item067">
							<span class="ph"><img src="images/index/items_ph09.jpg" alt="" width="440" height="500" loading="lazy" decoding="async"></span>
							<span class="tag">限定商品</span>
							<span class="shop">
								<span>ル・クール ブラン</span>
								<span class="floor ff_din">B1</span>
							</span>
						</a>
					</li>
				</ul>
			</div><!-- /.items -->

			<a href="items-service/">
				<p class="all_btn ff_en"><span>View All 170 Shops  <?php echo $svg_arrow; ?></span></p>
			</a>
		</section><!-- /.index_items -->


		<section class="index_zoomin">
			<a href="zoomin/">
				<header>
					<p class="title_en ff_en mov_show fadeup">Staff Interview</p>
					<h2 class="mov_show zoomin"><img src="images/index/zoomin_en.png" alt="Zoom in!" width="365" height="144" loading="lazy" decoding="async"></h2>
				</header>
				<p class="lead mov_show fadeup">ジョイナスのショップ<br>スタッフにズームイン！</p>
				<p class="mov_show fadeup">ジョイナスの各店舗で活躍する<br>6名のスタッフにインタビュー！<br>仕事への思いから趣味まで、<br class="sp">素顔に迫ります。</p>
				<p class="all_btn ff_en"><span>View All <?php echo $svg_arrow; ?></span></p>

				<div class="ph01 mov_show"><img src="images/index/zoomin_ph01.jpg" alt="" width="230" height="310" class="m" loading="lazy" decoding="async"><img src="images/index/zoomin_ph01_sub.png" alt="" width="100" height="200" class="sub" loading="lazy" decoding="async"></div>
				<div class="ph02 mov_show"><img src="images/index/zoomin_ph02.jpg" alt="" width="230" height="310" class="m" loading="lazy" decoding="async"><img src="images/index/zoomin_ph02_sub.png" alt="" width="100" height="150" class="sub" loading="lazy" decoding="async"></div>
			</a>
		</section><!-- /.index_zoomin -->

	</div><!-- /.hanabi_area -->


	<section class="index_smiles mov_show">
		<a href="smiles/">
			<div class="ph_loop mov_show fadeup"></div>
			<header>
				<p class="title_en ff_en mov_show fadeup">Let's Celebration</p>
				<h2 class="mov_show fadeup"><img src="smiles/images/head_en.svg" alt="SMILES" width="524" height="134" loading="lazy" decoding="async"></h2>
			</header>
			<p class="lead mov_show fadeup">アニバーサリーを祝して<br>いつもの笑顔を未来へ</p>
			<div class="ph_loop mov_show fadeup"></div>
			<p class="mov_show fadeup">「<span class="num">50</span>周年おめでとう！」の声を寄せに<br>集まったスタッフたち。<br><span class="num">50</span>名のはじける笑顔をお届けします。</p>
			<p class="all_btn ff_en"><span>View All <?php echo $svg_arrow; ?></span></p>

			<div class="ph_bg ph01"></div>
			<div class="ph_bg ph02"></div>
		</a>
	</section><!-- /.index_smiles -->


	<template id="smiles_phs"><?php
$phs = glob('images/index/smiles/*.webp');
foreach ($phs as $ph) {
	if (is_file($ph)) {
		echo '<img src="' . $ph . '" alt="" width="300" height="300" loading="lazy" decoding="async">';
	}
}
?></template>


	<section class="index_memory">
		<a href="memory/" class="mov_show fadeup">
			<h2><span><img src="memory/images/logo.svg" alt="#JOINUS" width="198" height="34" loading="lazy" decoding="async">の思い出</span><span>教えてください</span></h2>
			<p>「相鉄 公式」X（旧Twitter）に寄せられた<br>皆様からの思い出を<br class="sp">当時の写真とともに紹介します。<br>
				（「#JOINUSの思い出教えてください」<br class="sp">2023年7月14日～23日実施）</p>
			<p class="more box_btn ff_en">View More</p>
			<div class="ph1"><img src="images/index/memory_ph01.jpg" alt="" width="444" height="346" loading="lazy" decoding="async"></div>
			<div class="ph2"><img src="images/index/memory_ph02.jpg" alt="" width="444" height="346" loading="lazy" decoding="async"></div>
			<div class="j"><img src="images/j/j-21.webp" alt="" width="260" height="320" loading="lazy" decoding="async"></div>
		</a>
	</section><!-- /.index_memory -->



	<div class="index_bnr hv_op">
		<ul class="large">
			<li class="mov_show fadeup" data-limit="2023-11-26 23:00"><a href="https://www.sotetsu-joinus.com/news/4329" target="_blank"><img src="images/index/bnr_point.png" alt="JOINUSポイント5倍！" width="700" height="960" loading="lazy" decoding="async"></a></li>
			<li class="mov_show fadeup" data-limit="2023-11-11 21:00"><a href="premium-okaimono/"><img src="images/index/bnr_premium_fin.png" alt="プレミアムお買物券 5,000円が6,000円分のお買物券・お食事券に！" width="700" height="960" loading="lazy" decoding="async"></a></li>
		</ul>
		<ul class="small">
			<li class="mov_show fadeup" data-limit="2023-11-05 09:00"><a href="https://www.sotetsu-joinus.com/news/4328" target="_blank">
				<picture>
					<source media="screen and (max-width: 767px)" srcset="images/index/bnr_onlyone_sp.png">
					<img src="images/index/bnr_onlyone.png" alt="廃材を使って作ろう！世界にひとつだけのJちゃん" width="440" height="540" loading="lazy" decoding="async">
				</picture>
			</a></li>
			<li class="mov_show fadeup" data-limit="2023-11-20 09:00"><a href="https://www.sotetsu-joinus.com/news/4330" target="_blank">
				<picture>
					<source media="screen and (max-width: 767px)" srcset="images/index/bnr_shokuju_sp.png">
					<img src="images/index/bnr_shokuju.png" alt="50周年記念植樹＆さつまいも掘り" width="440" height="540" loading="lazy" decoding="async">
				</picture>
			</a></li>
			<li class="mov_show fadeup" data-limit="2023-11-20 09:00"><a href="https://www.sotetsu-joinus.com/news/4283" target="_blank">
				<picture>
					<source media="screen and (max-width: 767px)" srcset="images/index/bnr_densya_sp.jpg">
					<img src="images/index/bnr_densya.jpg" alt="JOINUS 50th Anniversary おかいもの電車が帰ってきた！" width="440" height="540" loading="lazy" decoding="async">
				</picture>
			</a></li>
		</ul>
		<div class="j_images" id="bnr_j"></div>
	</div><!-- /.index_bnr -->

	<div class="hidden" id="hide_bnr_j"></div>

<?php include_once 'common-foot.php'; ?>

<div class="fix_btn hv_op" data-limit="2023-11-26 23:00">
	<a href="https://www.sotetsu-joinus.com/news/4329" target="_blank"><img src="images/index/fix_btn_point5bai.png" alt="JOINUSポイント5倍!" width="450" height="450"></a>
</div><!-- /.fix_bnr -->

</body>
</html>
