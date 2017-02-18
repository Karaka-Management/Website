<?php 
$modules = $this->getData('modules'); 
$module = $this->getData('module'); 
$doc = $this->getData('doc'); 
?>
<main>
	<section class="spacer">
		<div class="row">
            <div class="col-xs-2">
                <nav id="main-nav">
                    <ul>
                        <?php foreach($modules as $category => $categoryList) : ?>
                            <li><h1><?= $category; ?></h1>
                            <?php foreach($categoryList as $module) : ?>
                                <li><a href="<?= \phpOMS\Uri\UriFactory::build('{/base}/product/'. $module->getDirectory()); ?>"><?= $module->getExternalName(); ?></a>
                            <?php endforeach; ?>
                        <?php endforeach; ?>
                    </ul>
                </nav>
            </div>
            <div class="col-xs-10 content">
                <?= $doc; ?>
            </div>
        </div>
    </section>
</main>