<?php $pages = $yellow->pages->top() ?>
<?php $yellow->page->setLastModified($pages->getModified()) ?>
<div class="navigation">
	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container-fluid">
			<div class="navbar-header">
				<div class="sitename-logo"></div>
				<a class="navbar-brand" href="<?php echo $yellow->page->base."/" ?>"><?php echo $yellow->page->getHtml("sitename") ?></a>
			</div>
			<ul class="nav navbar-nav navbar-right">
	<?php foreach($pages as $page): ?>
				<li <?php echo $page->isActive() ? "class=\"active\"" : "" ?>><a href="<?php echo $page->getLocation(true) ?>"><?php echo $page->getHtml("titleNavigation") ?></a></li>
	<?php endforeach ?>
			</ul>
		</div>
	</nav>
</div>
<div class="navigation-banner"></div>
