
<?php include_once 'tag-body_start.php'; ?>

<a id="top" tabindex="-1"></a>

<header id="header" class="mw">
	<div class="xw">
		<p class="logo"><a href="<?php echo $root; ?>"><img src="<?php echo $root; ?>images/logo.svg" alt="JOINUS 50th" width="80" height="62"></a></p>
		<p class="nav_btn sp"><a href="#">MENU</a></p>

		<nav>
			<ul class="gnav ff_en">
<?php if(isset($item_service_close_flg)) : ?>
<?php else : ?>
				<li><a href="<?php echo $root; ?>items-service/"<?php if($page_category == 'items-service') : ?> class="current"<?php endif; ?>>ANNIVERSARY<br> ITEM＆SERVICE</a></li>
<?php endif; ?>
				<li><a href="<?php echo $root; ?>zoomin/"<?php if($page_category == 'zoomin') : ?> class="current"<?php endif; ?>>Staff Interview<br> Zoom in!</a></li>
				<li><a href="<?php echo $root; ?>smiles/"<?php if($page_category == 'smiles') : ?> class="current"<?php endif; ?>>Let's Celebration<br> SMILES</a></li>
				<li><a href="<?php echo $root; ?>memory/"<?php if($page_category == 'memory') : ?> class="current"<?php endif; ?>>#JOINUS<span>の<br>思い出教えてください</span></a></li>
			</ul><!-- /.gnav -->
		</nav>
	</div><!-- /.mw -->
</header><!-- /#header -->

<main role="main" id="container" class="mw<?php if(isset($container_class)) : ?> <?php echo $container_class; ?><?php endif; ?>">



