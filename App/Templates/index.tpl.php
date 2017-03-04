<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="/App/styles/styles.css">
	<link rel="stylesheet" type="text/css" href="/App/styles/front.css">
	<link rel="stylesheet" type="text/css" href="/App/styles/main.css">
	<link rel="stylesheet" type="text/css" href="/libs/fontawesome/css/font-awesome.min.css">
</head>
<body>
<nav>
	<div class="spacer row middle-xs">
		<span id="nav-logo" class="center-xs"><img src="/App/img/logo.png"></span>
		<ul id="main-nav" class="center-xs">
			<li><a href="<?= \phpOMS\Uri\UriFactory::build('{/base}'); ?>">Orange Management</a>
		</ul>
		<div class="col-xs"></div>
		<ul id="secondary-nav" class="center-xs">
			<li><a href="<?= \phpOMS\Uri\UriFactory::build('{/base}/module'); ?>">Modules</a>
			<li><a href="<?= \phpOMS\Uri\UriFactory::build('{/base}/docs'); ?>">Docs</a>
			<li><a href="<?= \phpOMS\Uri\UriFactory::build('{/base}/blog'); ?>">Blog</a>
			<li><a target="_blank" href="http://oms.orange-management.de/en/backend">Demo</a>
			<li><a href="<?= \phpOMS\Uri\UriFactory::build('{/base}/dev'); ?>">Dev</a>
		</ul>
	</div>
</nav>
<?php
$dispatch = $this->getData('dispatch') ?? [];

foreach ($dispatch as $view) {
	if ($view instanceOf \Serializable) {
		echo $view->render();
	}
}
?>
<footer>
	<div class="spacer row middle-xs">
		<div class="col-xs-4">© Orange Management</div>
		<div class="col-xs-8 end-xs">
			<ul>
				<li><a href="<?= \phpOMS\Uri\UriFactory::build('{/base}/terms'); ?>">Terms</a>
				<li><a href="<?= \phpOMS\Uri\UriFactory::build('{/base}/privacy'); ?>">Privacy</a>
				<li><a href="<?= \phpOMS\Uri\UriFactory::build('{/base}/contact'); ?>">Contact</a>
				<li><a href="<?= \phpOMS\Uri\UriFactory::build('{/base}/about'); ?>">About</a>
		</div>
	</div>
</footer>