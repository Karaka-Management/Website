<!DOCTYPE HTML>
<html lang="en">
    <head>
        <title>Karaka - Dev Posts</title>
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
                    <div id="content">
                        <article>
                            <?= $this->getData('markdown'); ?>
                        </article>
                    </div>
                </div>
            </div>
        </main>

        <?php include __DIR__ . '/footer.tpl.php'; ?>
    </body>
</html>

