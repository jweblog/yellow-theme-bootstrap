<?php list($name, $pages, $level) = $yellow->getSnippetArgs() ?>
<?php if(!$pages) $pages = $yellow->pages->top() ?>
<?php $yellow->page->setLastModified($pages->getModified()) ?>
<?php echo $level ?>
<?php if(!$level): ?>
<nav class="navbar navbar-default navbar-fixed-top">
<div class="container-fluid">
<div class="navbar-header">
<div class="sitename-logo"></div>
<a class="navbar-brand" href="<?php echo $yellow->page->base."/" ?>"><?php echo $yellow->page->getHtml("sitename") ?></a>
</div>
<ul class="nav navbar-nav navbar-right">
<?php endif ?>

<?php foreach($pages as $page): ?>
<?php $children = $page->getChildren() ?>
<?php if($children->count()) { ?>
<li class="dropdown dropdown-submenu">
<a href="<?php echo $page->getLocation(true) ?>" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><?php echo $page->getHtml("titleNavigation") ?> <span class="caret"></span></a>
<ul class="dropdown-menu" role="menu">
<?php // The dropdown-submenu has been removed in Bootstrap 3 RC. ?>
<?php $children = $page->getChildren() ?>
<?php foreach($children as $page): ?>
<li <?php echo $page->isActive() ? "class=\"active\"" : "" ?>><a href="<?php echo $page->getLocation(true) ?>"><?php echo $page->getHtml("titleNavigation") ?></a></li>
<?php endforeach ?>
</ul>
</li>
<?php } else { ?>
<li <?php echo $page->isActive() ? "class=\"active\"" : "" ?>><a href="<?php echo $page->getLocation(true) ?>"><?php echo $page->getHtml("titleNavigation") ?></a></li>
<?php } ?>
<?php endforeach ?>

<?php if(!$level): ?>
</ul>
</div>
</nav>
<div class="navigation-banner"></div>
<?php endif ?>
