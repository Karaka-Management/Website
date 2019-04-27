<html>
    <head>
        <title>Orange-Management - Info</title>
        <?php include __DIR__ . '/head.tpl.php'; ?>
        <link rel="stylesheet" href="app/css/info.css">
    </head>
    <body>
        <header>
            <?php include __DIR__ . '/nav.tpl.php'; ?>
        </header>
        <main>
            <div class="floater">
                <div class="flex">
                    <div id="nav-side">
                        <a id="news-button" href="/info">News</a>
                        <?= $this->getData('nav'); ?>
                    </div>
                    <div id="content">
                        <?php $dispatch = $this->getData('dispatch') ?? [];
                        foreach ($dispatch as $view) {
                            if ($view instanceof \phpOMS\Contract\RenderableInterface) {
                                echo $view->render();
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </main>

        <?php include __DIR__ . '/footer.tpl.php'; ?>
    </body>
</html>

