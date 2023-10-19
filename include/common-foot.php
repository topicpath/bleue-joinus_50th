
</main><!-- /#container -->

<footer id="footer" class="mw">
	<a href="#top" id="pagetop">ページの先頭へ</a>

	<p class="logo"><a href="https://www.sotetsu-joinus.com/" target="_blank"><img src="<?php echo $root; ?>images/logo-joinus.svg" alt="JOINUS YOKOHAMA" width="130" height="56" loading="lazy" decoding="async"></a></p>
	<p class="address">〒220-0005 神奈川県横浜市西区南幸1-5-1<br>TEL：<a href="tel:045-316-3200">045-316-3200</a></p>

	<dl class="instagram">
		<dt>この冬おすすめ最旬情報は<br class="sp">ジョイナス公式インスタグラムで配信中！</dt>
		<dd><a href="<?php echo INSTAGRAM; ?>" target="_blank"><span>@joinus.official</span></a></dd>
	</dl><!-- /.instagram -->

	<small>Copyright©2023 JOINUS All Rights Reserved.</small>
</footer><!-- /#footer -->


<?php if(isset($local_inline_body_end)) : ?>
<?php echo $local_inline_body_end; ?>
<?php endif; ?>

<?php include_once 'tag-body_end.php'; ?>
