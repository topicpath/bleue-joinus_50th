<?php
// タイトル・ディスクリプション
$page_title = ['プレミアムお買物券（販売について）'];
$page_description = '';

// ページカテゴリ
$page_category = 'premium-okaimono';

// ローカルcss・js設定
$local_css = ['../css/premium-okaimono.css'];
// $local_js = ['../js/premium-okaimono.js'];

// canonical
$canonical_url = '/premium-okaimono/sale/';

// パンくず
$topicpath = [
	[
		'name' => 'プレミアムお買物券（販売について）',
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

	<section class="bg_blue base_pb">
		<header class="premium-okaimono_header mov_header mov_first">
			<h1><picture>
				<source media="screen and (max-width: 767px)" srcset="../images/page_title_sp.png">
				<img src="../images/page_title.png" alt="ジョイナスポイント会員限定 プレミアムお買物券 5,000円が6,000円分のお買物券・お食事券に！" width="1120" height="496">
			</picture></h1>
		</header><!-- /.premium-okaimono_header -->



		<div class="premium-okaimono_contents w sp_mg">
			<section class="outline_section">
				<h2 class="mov_show fadeup">販売について</h2>
				<p class="outline_lead_notes mov_show fadeup">ご購入は事前予約された方が対象となります。<br>予約をされていない方のご購入はできません。</p>
				<table class="mov_show fadeup">
					<tr>
						<th>販売日</th>
						<td>2023年11月10日（金）、11日（土）10:00～20:00<br>予約した日時をお確かめの上、お越しください。</td>
					</tr>
					<tr>
						<th>販売場所</th>
						<td>ジョイナス　B1　四角広場
							<div class="map"><img src="../images/map.png" alt="ジョイナス　B1　四角広場" width="337" height="350"></div>
						</td>
					</tr>
					<tr>
						<th>プレミアム<br class="pc">お買物券<br>セット内容</th>
						<td>6,000円分のお買物・お食事券を5,000円で販売します。<br>プレミアムお買物・お食事券500円×12枚<br>お買物・お食事券有効期限：2024年1月31日（水）</td>
					</tr>
					<tr>
						<th>購入方法</th>
						<td>
							<ul class="circle_li">
								<li>予約をした日時に販売会場にお越しください。</li>
								<li>予約完了時に送られた「予約完了メール」と「ジョイナスポイント会員証（アプリまたはカード）をご提示いただきます。</li>
								<li>ご購入は現金のみとなります。</li>
								<li>ジョイナスポイント、駐車場サービスは対象がとなります。（プレミアムお買物券ご利用の際にジョイナスポイントを進呈いたします。）</li>
							</ul>
						</td>
					</tr>
					<tr>
						<th>お買物・お食事券<br>について</th>
						<td>
							<ul class="circle_li">
								<li>プレミアムお買物・お食事券は、ジョイナス（横浜）にて、500円分の金券としてご利用いただけます。（たばこ・宝くじ・チケット・郵券類・乗車券類・金券類にはご利用出来ません。）</li>
								<li>ジョイナス（横浜）内の店舗のみ使用できます。（一部対象外店舗あり）</li>
								<li>お会計時に店頭スタッフにお渡しください。</li>
								<li>このお買物・お食事券は現金とお引換いたしません。なお、お釣銭はお渡しできません。</li>
								<li>お買物・お食事券を盗難・紛失・滅失等された場合、当方ではその責任を負いません。</li>
								<li>お買物・お食事券にてお買い上げいただいた商品につきましては、原則として返品をお断りいたします。不良品等の場合には、他商品と交換させていただきます。</li>
								<li>利用対象外店舗は以下となります。<br>クーパー・フットボールパーク／ザ・バーベキューガーデン in　横浜ジョイナス／J・マーケット／相鉄不動産販売くらそラウンジ／宝くじコーナー1・2／宝くじロトショップ／ほけんの窓口／横浜みなみ眼科／リンカン／フード＆タイム イセタン ヨコハマ／横浜髙島屋／駐車場／期間限定催事店舗／ジョイナステラス二俣川／港南台バーズ／星天qlay／相鉄ライフ各店</li>
							</ul>
						</td>
					</tr>
				</table>
			</section><!-- /.outline_section -->

			<p class="outline_back_btn mov_show fadeup"><a href="../" class="box_btn large arrow">JOINUSプレミアムお買い物券<br class="sp">事前予約ページへ</a></p>
		</div><!-- /.premium-okaimono_contents -->
	</section>

<?php include_once 'common-foot.php'; ?>

</body>
</html>
