<?php
// タイトル・ディスクリプション
$page_title = ['Staff Interview Zoom in!'];
$page_description = '';

// ページカテゴリ
$page_category = 'zoomin';

// ローカルcss・js設定
$local_css = ['css/zoomin.css'];
// $local_js = ['js/zoomin.js'];

// canonical
$canonical_url = '/zoomin/';

// パンくず
$topicpath = [
	[
		'name' => 'Staff Interview Zoom in!',
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
		<header class="zoomin_header mov_header mov_first">
			<h1>ジョイナスの<br class="sp">ショップスタッフに<br class="sp">ズームイン！</h1>
			<p>50周年の節目に、6名のショップスタッフへ<br class="sp">インタビューを行い<br class="pc">ジョイナス愛、仕事の喜び、<br class="sp">プライベートのお気に入りなどをご紹介。<br>親近感が湧いたら、<br class="sp">ぜひお店へ立ち寄ってみてください！</p>
			<p class="bg_en"><img src="images/head_en.svg" alt="Zoom in!" width="458" height="180"></p>
		</header><!-- /.zoomin_header -->


		<div class="zoomin_nav w">
			<article class="mov_show fadeup">
				<a href="01/">
					<p class="num"><img src="01/images/number.svg" alt="01" width="180" height="110" loading="lazy" decoding="async"></p>
					<p class="ph"><img src="01/images/main_sq.jpg" alt="鈴木さん" width="996" height="996" loading="lazy" decoding="async" class="hv_op"></p>
					<p class="shop ff_din">COCO DEAL <span class="floor">B1</span></p>
					<h2>鈴木<span>さん</span></h2>
					<p class="history">ジョイナス歴1年4ヵ月</p>
					<p class="copy">思い出の地<br>ジョイナス</p>
				</a>
			</article>

			<article class="mov_show fadeup">
				<a href="02/">
					<p class="num"><img src="02/images/number.svg" alt="02" width="180" height="110" loading="lazy" decoding="async"></p>
					<p class="ph"><img src="02/images/main_sq.jpg" alt="阿部さん" width="996" height="996" loading="lazy" decoding="async" class="hv_op"></p>
					<p class="shop ff_din">Shabusen <span class="floor">B2</span></p>
					<h2>阿部<span>さん</span></h2>
					<p class="history">ジョイナス歴7年</p>
					<p class="copy">愛娘に<br>メロメロ♡</p>
				</a>
			</article>

			<article class="mov_show fadeup">
				<a href="03/">
					<p class="num"><img src="03/images/number.svg" alt="03" width="180" height="110" loading="lazy" decoding="async"></p>
					<p class="ph"><img src="03/images/main_sq.jpg" alt="児平さん" width="996" height="996" loading="lazy" decoding="async" class="hv_op"></p>
					<p class="shop ff_din">ROOTOTE GALLERY <span class="floor">1F</span></p>
					<h2>児平<span>さん</span></h2>
					<p class="history">ジョイナス歴5年</p>
					<p class="copy">得意の刺繍<br>見て下さい</p>
				</a>
			</article>

			<article class="mov_show fadeup">
				<a href="04/">
					<p class="num"><img src="04/images/number.svg" alt="04" width="180" height="110" loading="lazy" decoding="async"></p>
					<p class="ph"><img src="04/images/main_sq.jpg" alt="新井さん" width="996" height="996" loading="lazy" decoding="async" class="hv_op"></p>
					<p class="shop ff_din">GODIVA <span class="floor">1F</span></p>
					<h2>新井<span>さん</span></h2>
					<p class="history">ジョイナス歴7年</p>
					<p class="copy">チョコは<br>ご褒美！</p>
				</a>
			</article>

			<article class="mov_show fadeup">
				<a href="05/">
					<p class="num"><img src="05/images/number.svg" alt="05" width="180" height="110" loading="lazy" decoding="async"></p>
					<p class="ph"><img src="05/images/main_sq.jpg" alt="三堀さん" width="996" height="996" loading="lazy" decoding="async" class="hv_op"></p>
					<p class="shop ff_din">HYSTERIC GLAMOUR <span class="floor">1F</span></p>
					<h2>三堀<span>さん</span></h2>
					<p class="history">ジョイナス歴5年</p>
					<p class="copy">カッコよく<br>生きたい</p>
				</a>
			</article>

			<article class="mov_show fadeup">
				<a href="06/">
					<p class="num"><img src="06/images/number.svg" alt="06" width="180" height="110" loading="lazy" decoding="async"></p>
					<p class="ph"><img src="06/images/main_sq.jpg" alt="倉野さん" width="996" height="996" loading="lazy" decoding="async" class="hv_op"></p>
					<p class="shop ff_din">THE COSMETIC TERRACE TASHIRO <span class="floor">B1</span></p>
					<h2>倉野<span>さん</span></h2>
					<p class="history">ジョイナス歴23年</p>
					<p class="copy">共に歩んで<br>23年です！</p>
				</a>
			</article>
		</div><!-- /.zoomin_nav -->

		<p class="back_btn"><a href="<?php echo $root; ?>" class="box_btn ff_en">Joinus 50th TOP</a></p>
	</section>

<?php include_once 'common-foot.php'; ?>

</body>
</html>
