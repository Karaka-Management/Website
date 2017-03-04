<?php $modules = $this->getData('modules'); ?>
<main>
	<section class="spacer">
		<div class="row">
            <div class="col-xs-2">
                <nav id="main-nav">
                    <ul>
                        <?php foreach($modules as $category => $categoryList) : ?>
                            <li><h1><?= $category; ?></h1>
                            <?php foreach($categoryList as $module) : ?>
                                <li><a href="<?= \phpOMS\Uri\UriFactory::build('{/base}/module/'. $module->getDirectory()); ?>"><?= $module->getExternalName(); ?></a>
                            <?php endforeach; ?>
                        <?php endforeach; ?>
                    </ul>
                </nav>
            </div>
            <div class="col-xs-10" style="text-align: center">
                <div><i class="fa fa-cogs" style="font-size: 20rem; color: #ccc"></i></div>
                <div style="font-size: 4rem;">In development</div>
            </div>
        </div>
    </section>
</main>