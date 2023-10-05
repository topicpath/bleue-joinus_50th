
<?php if(isset($topicpath) && is_array($topicpath) && count($topicpath)) : ?>
	<div class="breadcrumbs">
		<ol class="xw sp_pd a_reverse">
			<li>
				<a href="<?php echo $root; ?>">JOINUS 50th TOP</a>
			</li>
<?php foreach($topicpath as $i => $tp) : ?>
			<li>
				<a <?php if(isset($tp['href']) && $i < count($topicpath) - 1) : ?>href="<?php if(preg_match("|^/|i", $tp['href'])) echo $root . ltrim($tp['href'], '/'); else echo $tp['href']; ?>"<?php endif; ?>><?php echo $tp['name']; ?></a>
			</li>
<?php endforeach; ?>
		</ol>
	<!-- /.breadcrumbs --></div>
<?php endif; ?>
