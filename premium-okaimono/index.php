<?php
// タイトル・ディスクリプション
$page_title = ['プレミアムお買物券（事前予約について）'];
$page_description = '';

// ページカテゴリ
$page_category = 'premium-okaimono';

// ローカルcss・js設定
$local_css = ['css/premium-okaimono.css'];
// $local_js = ['js/premium-okaimono.js'];

// canonical
$canonical_url = '/premium-okaimono/';

// パンくず
$topicpath = [
	[
		'name' => 'プレミアムお買物券（事前予約について）',
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

	<section class="bg_blue base_pb">
		<header class="premium-okaimono_header mov_header mov_first">
			<h1><picture>
				<source media="screen and (max-width: 767px)" srcset="images/page_title_sp.png">
				<img src="images/page_title.png" alt="ジョイナスポイント会員限定 プレミアムお買物券 5,000円が6,000円分のお買物券・お食事券に！" width="1120" height="496">
			</picture></h1>
		</header><!-- /.premium-okaimono_header -->



		<div class="premium-okaimono_contents w sp_mg">
			<p class="lead mov_show fadeup">購入にはこちらのサイトからの<span class="strong"><strong><span>事</span><span>前</span><span>予</span><span>約</span></strong>が<br class="sp"><span class="em">必要</span>です。</span></p>

			<div class="coming_box mov_show fadeup">
				<p>ジョイナスポイント会員限定</p>
				<p class="fuki">限定<br class="sp"><span class="num ff_en">5,000</span>セット！<span class="note">お1人様1回2セット<br class="sp">まで</span></p>
				<p class="start"><picture>
					<source media="screen and (max-width: 767px)" srcset="images/coming_txt_sp.svg">
					<img src="images/coming_txt.svg" alt="11.2 THU 朝10時予約スタート！" width="770" height="70">
				</picture></p>
				<p class="notes">購入日・購入時間を指定した予約となります。<br>予約にはジョイナスポイント会員番号の入力が必要になります。<br>※ご購入は現金のみとなります。</p>
			</div><!-- /.coming_box -->

			<div class="period_box mov_show fadeup">
				<p><picture>
					<source media="screen and (max-width: 767px)" srcset="images/period_sp.svg">
					<img src="images/period.svg" alt="[販売期間]11.10 FRI 11 SAT 10時～20時（日時予約制）" width="800" height="76">
				</picture></p>
				<p class="btn"><a href="sale/" class="box_btn outline large arrow">販売についてはこちら</a></p>
			</div><!-- /.period_box -->


			<section class="outline_section">
				<p class="outline_lead mov_show fadeup">以下の内容をご確認の上、<br class="sp">ご予約をお願いします。</p>

				<h2 class="mov_show fadeup">事前予約について</h2>
				<table class="mov_show fadeup">
					<tr>
						<th>予約開始日時</th>
						<td>2023年11月2日（木）10：00より
							<span class="s">※予約が数量に達し次第、終了となります。</span></td>
					</tr>
					<tr>
						<th>予約数量</th>
						<td>5,000セット
							<span class="s">※1回のご予約で2セットまで。お一人様1回までのご予約でお願いします。</span></td>
					</tr>
					<tr>
						<th>予約設定</th>
						<td>11月10日（金）、11日（土）　<br class="sp">10:00～20:00　時間は1時間ごとに区切られます。</td>
					</tr>
					<tr>
						<th>予約方法</th>
						<td>
							<ol class="num_li">
								<li>以下の注意事項確認し、同意をチェック</li>
								<li>予約ページへ遷移</li>
								<li>メールアドレスの登録
									<span class="s">プライバシーポリシーをご確認いただき、個人情報の取扱いの同意にチェックの上、表示された画面にメールアドレスを入力します。<br>メールの受信に制限をかけている場合は、「JOINUS_PREMIUM@jmb-expo.com」からのメールが受信できるように設定をお願いします。</span>
								</li>
								<li>メールに届いたURLをクリックして予約サイトへ
									<span class="s">ジョイナスポイント会員証をお手元に用意して進みます。<br>URLは登録から30分のみ有効です。</span>
								</li>
								<li>予約内容の入力
									<span class="s">日ごと・時間別にチェックボックスが表示されます。<br>自分が希望する日時を選んでクリック。「購入セット数」を選び、「ジョイナスポイント会員番号」を入力し、「確認画面」へと進みます。</span>
								</li>
								<li>予約内容を確認
									<span class="s">予約内容が表示されますので、間違いがないか確認します。</span>
								</li>
								<li>予約を確定
									<span class="s">予約内容を確認したら、画面下の「予約を確定する」ボタンをクリックします。</span>
								</li>
								<li>メールに予約確定メールが届いていることを確認
									<span class="s">届いていれば予約は無事に完了です。<br>予約が埋まっているときは、再選択のメッセージが表示されます。<br>※メールが届かない場合は、迷惑メールに入っているか、予約手続きが完了していないことが考えられます。</span>
								</li>
							</ol>
						</td>
					</tr>
				</table>

				<section class="outline_notes mov_show fadeup">
					<h3>事前予約に関する<br class="sp">注意事項</h3>
					<ul class="circle_li">
						<li>ジョイナスポイント会員限定となります。予約の際にはジョイナスポイント会員番号の入力が必須となりますので、予めご用意の上予約をお願いします。</li>
						<li>事前予約ではメールアドレスの登録が必要となります。</li>
						<li>購入日・購入時間を確認の上、ご予約をお願いします。予約完了後の変更・キャンセルは出来ませんので、予めご了承ください。</li>
						<li>予約のタイミングによっては、ご希望の日時に予約が取れない場合がありますので、ご了承ください。</li>
						<li>予約完了メールは購入時に必ず必要になりますので、販売日当日まで確認できるようにしてください。</li>
						<li>受信フォルダにメールが届かない場合は、迷惑メールフォルダに振り分けられている可能性がございます。迷惑メールフォルダにも届いていない場合は、メールアドレスやメールサーバーの容量をご確認の上、再度予約操作をお願いします。</li>
					</ul>
				</section><!-- /.outline_notes -->
			</section><!-- /.outline_section -->

		</div><!-- /.premium-okaimono_contents -->
	</section>

<?php include_once 'common-foot.php'; ?>

</body>
</html>
