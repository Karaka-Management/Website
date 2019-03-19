<html>
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
                            <div class="tcenter"><img src="app/img/calendar.svg" width="30%"></div>
                            <h1>phpOMS</h1>
                            <h2>Tests</h2>
                            <ul>
                                <li><a href="Inspection/Test/Php/phpunit.log">PhpUnit</a>
                                <li><a href="">Php Coverage</a>
                                <li><a href="">Php Linting</a>
                            </ul>
                            <h2>Style</h2>
                            <ul>
                                <li><a href="">PhpStrictTypes</a>
                                <li><a href="">PhpCS</a>
                                <li><a href="">PhpStan</a>
                                <li><a href="">Phan</a>
                            </ul>
                            <h2>Other</h2>
                            <ul>
                                <li><a href="">LOC</a>
                                <li><a href="">Issues</a>
                            </ul>
                        </div>
                        <div class="box1 box">
                            <div class="tcenter"><img src="app/img/calendar.svg" width="30%"></div>
                            <h1>jsOMS</h1>
                            <h2>Tests</h2>
                            <ul>
                                <li><a href="">PhpUnit</a>
                                <li><a href="">Php Coverage</a>
                                <li><a href="">Php Linting</a>
                            </ul>
                            <h2>Style</h2>
                            <ul>
                                <li><a href="">PhpStrictTypes</a>
                                <li><a href="">PhpCS</a>
                                <li><a href="">PhpStan</a>
                                <li><a href="">Phan</a>
                            </ul>
                            <h2>Other</h2>
                            <ul>
                                <li><a href="">LOC</a>
                                <li><a href="">Issues</a>
                            </ul>
                        </div>
                        <div class="box1 box">
                            <div class="tcenter"><img src="app/img/calendar.svg" width="30%"></div>
                            <h1>Application</h1>
                            <h2>Tests</h2>
                            <ul>
                                <li><a href="">PhpUnit</a>
                                <li><a href="">Php Coverage</a>
                                <li><a href="">Php Linting</a>
                            </ul>
                            <h2>Style</h2>
                            <ul>
                                <li><a href="">PhpStrictTypes</a>
                                <li><a href="">PhpCS</a>
                                <li><a href="">PhpStan</a>
                                <li><a href="">Phan</a>
                            </ul>
                            <h2>Other</h2>
                            <ul>
                                <li><a href="">LOC</a>
                                <li><a href="">Issues</a>
                            </ul>
                        </div>
                        <div class="box1 box">
                            <div class="tcenter"><img src="app/img/calendar.svg" width="30%"></div>
                            <h1>Modules</h1>
                            <h2>Tests</h2>
                            <ul>
                                <li><a href="">PhpUnit</a>
                                <li><a href="">Php Coverage</a>
                                <li><a href="">Php Linting</a>
                            </ul>
                            <h2>Style</h2>
                            <ul>
                                <li><a href="">PhpStrictTypes</a>
                                <li><a href="">PhpCS</a>
                                <li><a href="">PhpStan</a>
                                <li><a href="">Phan</a>
                            </ul>
                            <h2>Other</h2>
                            <ul>
                                <li><a href="">LOC</a>
                                <li><a href="">Issues</a>
                            </ul>
                        </div>
                        <div class="box1 box">
                            <div class="tcenter"><img src="app/img/calendar.svg" width="30%"></div>
                            <h1>cssOMS</h1>
                            <h2>Tests</h2>
                            <ul>
                                <li><a href="Inspection/Test/Php/phpunit.log">PhpUnit</a>
                                <li><a href="">Php Coverage</a>
                                <li><a href="">Php Linting</a>
                            </ul>
                            <h2>Style</h2>
                            <ul>
                                <li><a href="">PhpStrictTypes</a>
                                <li><a href="">PhpCS</a>
                                <li><a href="">PhpStan</a>
                                <li><a href="">Phan</a>
                            </ul>
                            <h2>Other</h2>
                            <ul>
                                <li><a href="">LOC</a>
                                <li><a href="">Issues</a>
                            </ul>
                        </div>
                        <div class="box1 box">
                            <div class="tcenter"><img src="app/img/calendar.svg" width="30%"></div>
                            <h1>Documentation</h1>
                            <h2>Tests</h2>
                            <ul>
                                <li><a href="">PhpUnit</a>
                                <li><a href="">Php Coverage</a>
                                <li><a href="">Php Linting</a>
                            </ul>
                            <h2>Style</h2>
                            <ul>
                                <li><a href="">PhpStrictTypes</a>
                                <li><a href="">PhpCS</a>
                                <li><a href="">PhpStan</a>
                                <li><a href="">Phan</a>
                            </ul>
                            <h2>Other</h2>
                            <ul>
                                <li><a href="">LOC</a>
                                <li><a href="">Issues</a>
                            </ul>
                        </div>
                        <div class="box1 box">
                            <div class="tcenter"><img src="app/img/calendar.svg" width="30%"></div>
                            <h1>Developer-Guide</h1>
                            <h2>Tests</h2>
                            <ul>
                                <li><a href="">PhpUnit</a>
                                <li><a href="">Php Coverage</a>
                                <li><a href="">Php Linting</a>
                            </ul>
                            <h2>Style</h2>
                            <ul>
                                <li><a href="">PhpStrictTypes</a>
                                <li><a href="">PhpCS</a>
                                <li><a href="">PhpStan</a>
                                <li><a href="">Phan</a>
                            </ul>
                            <h2>Other</h2>
                            <ul>
                                <li><a href="">LOC</a>
                                <li><a href="">Issues</a>
                            </ul>
                        </div>
                        <div class="box1 box">
                            <div class="tcenter"><img src="app/img/calendar.svg" width="30%"></div>
                            <h1>Build</h1>
                            <h2>Tests</h2>
                            <ul>
                                <li><a href="">PhpUnit</a>
                                <li><a href="">Php Coverage</a>
                                <li><a href="">Php Linting</a>
                            </ul>
                            <h2>Style</h2>
                            <ul>
                                <li><a href="">PhpStrictTypes</a>
                                <li><a href="">PhpCS</a>
                                <li><a href="">PhpStan</a>
                                <li><a href="">Phan</a>
                            </ul>
                            <h2>Other</h2>
                            <ul>
                                <li><a href="">LOC</a>
                                <li><a href="">Issues</a>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <?php include __DIR__ . '/footer.tpl.php'; ?>
    </body>
</html>