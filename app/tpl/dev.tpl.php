<!DOCTYPE HTML>
<html lang="en">
    <head>
        <title>Orange-Management - Dev</title>
        <?php include __DIR__ . '/head.tpl.php'; ?>
        <link rel="stylesheet" href="app/css/dev.css">
    </head>
    <body>
        <header>
            <?php include __DIR__ . '/nav.tpl.php'; ?>
        </header>
        <main>
            <div class="block block1">
                <div class="floater">
                    <h1>Developer-Guide</h1>
                    <div class="box1 box">
                        <div class="flex">
                            <?php $guides = $this->getData('guides');
                            foreach ($guides as $guide) : ?>
                            <div class="box">
                                <?= $guide; ?>
                            </div>
                            <?php endforeach; ?>
                            <div class="box"></div>
                            <div class="box"></div>
                            <div class="box"></div>
                            <div class="box"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="block block2" id="content">
                <div class="floater">
                    <h1>Posts</h1>
                    <?php $posts = $this->getData('posts');
                    foreach ($posts as $post) : ?>
                        <article>
                            <h1><a href="/dev/post/<?= \urlencode($post['name'] ?? '') ?>"><?= $post['headline'] ?? '' ?></a></h1>
                            <p><?= \substr($post['summary'] ?? '', 0, 250) ?> ... (<a href="/dev/post/<?= \urlencode($post['name'] ?? '') ?>">more</a>)</p>
                        </article>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="block block3">
                <div class="floater">
                    <h1>Latest Builds</h1>
                    <div class="flex">
                        <div class="box1 box">
                            <div class="tcenter"><img src="app/img/undraw_creative_process_q6aw.svg" width="43%"></div>
                            <h1>phpOMS</h1>
                            <h2>Tests</h2>
                            <ul>
                                <li><a href="Inspection/Test/Php/phpunit.log">PhpUnit</a>
                                <li><a href="Inspection/Test/Php/index.html">PhpUnit Report Html</a>
                                <li><a href="Inspection/Test/Php/coverage/phpOMS/index.html">Php Coverage</a>
                                <li><a href="Inspection/Framework/linting/linting_php.log">Php Linting</a>
                            </ul>
                            <h2>Style</h2>
                            <ul>
                                <li><a href="Inspection/Framework/strict_missing_php.log">PhpStrictTypes</a>
                                <li><a href="Inspection/Framework/phpcs.log">PhpCS</a>
                                <li><a href="Inspection/Framework/phpstan.log">PhpStan</a>
                            </ul>
                            <h2>Other</h2>
                            <ul>
                                <li><a href="Inspection/Test/Php/DocBlock/">Documentation</a>
                                <li><a href="Inspection/Framework/phploc.log">LOC</a>
                                <li><a href="https://github.com/Orange-Management/phpOMS/issues">Issues</a>
                            </ul>
                        </div>
                        <div class="box1 box">
                            <div class="tcenter"><img src="app/img/undraw_design_feedback_dexe.svg" width="70%"></div>
                            <h1>jsOMS</h1>
                            <p>Not yet implemented</p>
                            <ul>
                                <li><a href="https://github.com/Orange-Management/jsOMS/issues">Issues</a>
                            </ul>
                        </div>
                        <div class="box1 box">
                            <div class="tcenter"><img src="app/img/undraw_wireframing_nxyi.svg" width="53%"></div>
                            <h1>Application</h1>
                            <h2>Tests</h2>
                            <ul>
                                <li><a href="Inspection/Test/Php/phpunit.log">PhpUnit</a>
                                <li><a href="Inspection/Test/Php/index.html">PhpUnit Report Html</a>
                                <li><a href="Inspection/Test/Php/coverage/Web/index.html">Php Coverage</a>
                                <li><a href="Inspection/Web/linting/linting_php.log">Php Linting</a>
                                <li><a href="Inspection/Test/ReportExternal/">Test Report</a>
                            </ul>
                            <h2>Style</h2>
                            <ul>
                                <li><a href="Inspection/Web/strict_missing_php.log">PhpStrictTypes</a>
                                <li><a href="Inspection/Web/phpcs.log">PhpCS</a>
                                <li><a href="Inspection/Web/phpstan.log">PhpStan</a>
                            </ul>
                            <h2>Other</h2>
                            <ul>
                                <li><a href="Inspection/Web/phploc.log">LOC</a>
                                <li><a href="https://github.com/Orange-Management/Orange-Management/issues">Issues</a>
                            </ul>
                        </div>
                        <div class="box1 box">
                            <div class="tcenter"><img src="app/img/undraw_product_teardown_elol.svg" width="43%"></div>
                            <h1>Modules</h1>
                            <h2>Tests</h2>
                            <ul>
                                <li><a href="Inspection/Test/Php/phpunit.log">PhpUnit</a>
                                <li><a href="Inspection/Test/Php/index.html">PhpUnit Report Html</a>
                                <li><a href="Inspection/Test/Php/coverage/Modules/index.html">Php Coverage</a>
                                <li><a href="Inspection/Modules/linting/linting_php.log">Php Linting</a>
                            </ul>
                            <h2>Style</h2>
                            <ul>
                                <li><a href="Inspection/Modules/strict_missing_php.log">PhpStrictTypes</a>
                                <li><a href="Inspection/Modules/phpcs.log">PhpCS</a>
                                <li><a href="Inspection/Modules/phpstan.log">PhpStan</a>
                            </ul>
                            <h2>Other</h2>
                            <ul>
                                <li><a href="Inspection/Modules/phploc.log">LOC</a>
                                <li><a href="https://github.com/Orange-Management/Modules/issues">Issues</a>
                            </ul>
                        </div>
                        <div class="box1 box">
                            <div class="tcenter"><img src="app/img/undraw_innovative_b409.svg" width="50%"></div>
                            <h1>cssOMS</h1>
                            <p>Not yet implemented</p>
                            <h2>Other</h2>
                            <ul>
                                <li><a href="https://github.com/Orange-Management/cssOMS/issues">Issues</a>
                            </ul>
                        </div>
                        <div class="box1 box">
                            <div class="tcenter"><img src="app/img/undraw_folder_39kl.svg" width="43%"></div>
                            <h1>Documentation</h1>
                            <p>Not yet implemented</p>
                            <h2>Other</h2>
                            <ul>
                                <li><a href="https://github.com/Orange-Management/Documentation/issues">Issues</a>
                            </ul>
                        </div>
                        <div class="box1 box">
                            <div class="tcenter"><img src="app/img/undraw_code_review_l1q9.svg" width="48%"></div>
                            <h1>Developer-Guide</h1>
                            <p>Not yet implemented</p>
                            <h2>Other</h2>
                            <ul>
                                <li><a href="https://github.com/Orange-Management/Developer-Guide/issues">Issues</a>
                            </ul>
                        </div>
                        <div class="box1 box">
                            <div class="tcenter"><img src="app/img/undraw_version_control_9bpv.svg" width="55%"></div>
                            <h1>Build</h1>
                            <p>Not yet implemented</p>
                            <h2>Other</h2>
                            <ul>
                                <li><a href="https://github.com/Orange-Management/Build/issues">Issues</a>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <?php include __DIR__ . '/footer.tpl.php'; ?>
    </body>
</html>