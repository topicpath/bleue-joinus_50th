<?php
// タイトル・ディスクリプション
$page_title = ['ぺこぱ1日館長就任'];
$page_description = '';

// ページカテゴリ
$page_category = 'pekopa';

// ローカルcss・js設定
$local_css = ['css/pekopa.css'];
$local_js = ['js/pekopa.js'];

// canonical
$canonical_url = '/pekopa/';

// パンくず
$topicpath = [
	[
		'name' => 'ぺこぱ1日館長就任',
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

	<section class="pekopa_container">
		<h1><img src="images/title.png" alt="ジョイナス50周年記念イベント ぺこぱがジョイナス1日館長に就任！" width="907" height="490"></h1>

		<div class="pekopa_contents xw">
			<p class="main_ph"><picture>
				<source media="screen and (max-width: 767px)" srcset="images/main_ph_sp.png">
				<img src="images/main_ph.png" alt="" width="550" height="672" loading="lazy" decoding="async">
			</picture></p>

			<section class="section01 mov_show fadeup">
				<p class="fuki"><span>ぺこぱがジョイナスにやってくる</span></p>
				<h2><span>1</span>日館長就任式</h2>
				<div class="info">
					<dl>
						<dt>時間</dt>
						<dd>10時30分</dd>
					</dl>
					<dl>
						<dt>会場</dt>
						<dd>B2広場</dd>
					</dl>
				</div><!-- /.info -->
			</section><!-- /.section01 -->


			<section class="section02 mov_show fadeup">
				<p class="fuki">ジョイナス館内のさまざまなところに登場！</p>
				<h2>館内巡回</h2>
				<div class="info">
					<dl>
						<dt>時間</dt>
						<dd>①11:00～／②13:30～</dd>
					</dl>
					<dl>
						<dt>会場</dt>
						<dd>館内各所</dd>
					</dl>
					<ul class="notes point_li">
						<li><span>※</span>当日の状況等により時間が<br class="sp">変わる可能性があります。</li>
					</ul>
				</div><!-- /.info -->
			</section><!-- /.section02 -->


			<section class="section03 w920 mov_show fadeup">
				<p class="point"><img src="images/sec2_point.png" alt="ぺこぱから記念品がもらえる！" width="272" height="272" loading="lazy" decoding="async"></p>
				<h2><picture>
					<source media="screen and (max-width: 767px)" srcset="images/sec2_title_sp.png">
					<img src="images/sec2_title.png" alt="1日館長就任式 観覧者募集！" width="1448" height="206" loading="lazy" decoding="async">
				</picture></h2>
				<div class="info">
					<dl>
						<dt>応募締切</dt>
						<dd>3月17日(日)24時</dd>
					</dl>
					<dl>
						<dt>観覧人数</dt>
						<dd>15組30名様</dd>
					</dl>
				</div><!-- /.info -->
<?php
date_default_timezone_set('Asia/Tokyo');
$now = date('Y-m-d H:i:s');
if($now >= '2024-03-18 09:00:00') : ?>
				<p class="fin">募集は終了しました。</p>
<?php endif; ?>
				<p class="lead">ジョイナス1日館長就任式を<br class="sp">一緒に見よう！<br>事前応募に当選した<br class="sp">観覧者の方には<br>記念品をプレゼントします！</p>
				<section>
					<h3>応募方法</h3>
					<ol class="howto">
						<li><a href="https://www.instagram.com/joinus.official?igsh=MXB1NDg2YWN4YTA5Zw==" target="_blank" class="hv_op">
							<span class="num"><span>STEP</span>1</span>
							<span class="txt">ジョイナス公式<br>インスタグラムに<br class="pc">アクセス
								<span class="sp btn"><span>@joinus.official</span></span>
							</span>
							<span class="qr pc"><img src="images/qr.png" alt="ジョイナス公式インスタグラムQRコード" width="540" height="540" loading="lazy" decoding="async"></span>
						</a></li>
						<li><a>
							<span class="num"><span>STEP</span>2</span>
							<span class="txt">「観覧事前募集」の投稿に<br>フォロー＆いいね！<br>で応募</span>
						</a></li>
					</ol>
					<p class="howto_notes">以下のご注意をお読みいただいた上で<br class="sp">ご応募ください。</p>
				</section>
				<section>
					<h3>応募の注意</h3>
					<ul class="notes point_li">
						<li><span>●</span>3月24日（日）10時20分にジョイナスのB2広場にお越しいただける方</li>
						<li><span>●</span>当日はメディアによる取材が入りますので、映像や静止画像など、事後にジョイナスのホームページや他の媒体などで使用する場合があります。<br>その際の対価等はお支払いできませんのであらかじめご了承ください。</li>
						<li><span>●</span>ご提供いただいた個人情報は、この募集のみに使用します。（ご案内、ご連絡等）</li>
						<li><span>●</span>応募者多数の場合は抽選となります。</li>
						<li><span>●</span>当選の方にはDMにて招待状をお送りします。</li>
					</ul>
				</section>
			</section><!-- /.section03 -->


			<section class="section04 w920 mov_show fadeup">
				<p class="fuki">ぺこぱが直接手渡し</p>
				<h2><span class="s">ジョイナスオリジナル</span> エコバッグプレゼント！</h2>
				<p class="ph"><img src="images/sec4_ecobag.png" alt="ジョイナスオリジナルエコバッグ" width="506" height="740" loading="lazy" decoding="async"></p><!-- /.ph -->
				<div class="info">
					<dl>
						<dt>時間</dt>
						<dd>15:00～<span class="s">（受付開始：13:00～）</span></dd>
					</dl>
					<dl>
						<dt>会場</dt>
						<dd>B2広場</dd>
					</dl>
					<dl>
						<dt>人数</dt>
						<dd class="em">先着100名様</dd>
					</dl>
				</div><!-- /.info -->
				<p>ジョイナス館内にて当日ご利用の3,000円（税込）以上の<br class="pc">お買い上げレシート（合算不可）をご提示で、ぺこぱよりエコバッグをプレゼントします。</p>
				<ul class="notes point_li">
					<li class="em"><span>※</span>プレゼントは先着人数に達し次第終了となります。</li>
					<li><span>※</span>当日のお買い上げレシートに限ります。</li>
					<li><span>※</span>複数店舗のレシートの合算は不可です。</li>
					<li><span>※</span>お1人様1回限り</li>
				</ul>
			</section><!-- /.section04 -->
		</div><!-- /.pekopa_contents -->


		<p class="pekopa_notes w920 mov_show fadeup">本イベントは<br class="sp">予告なく変更・中止になる場合が<br class="sp">ございます。</p>



		<p class="back_btn mov_show fadeup"><a href="<?php echo $root; ?>" class="box_btn ff_en">Joinus 50th TOP</a></p>

		<div class="page_bg">
			<div class="bg1"></div>
			<div class="bg2"></div>
		</div><!-- /.page_bg -->
	</section><!-- /.pekopa_container -->

<?php include_once 'common-foot.php'; ?>

</body>
</html>
