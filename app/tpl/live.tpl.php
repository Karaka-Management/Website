<html>
    <head>
        <title>Orange-Management - Services</title>
        <?php include __DIR__ . '/head.tpl.php'; ?>
        <link rel="stylesheet" href="app/css/live.css">
        <script src="https://embed.twitch.tv/embed/v1.js"></script>
    </head>
    <body>
        <header>
            <?php include __DIR__ . '/nav.tpl.php'; ?>

            <div class="floater">
                <div class="slider-3">
                    <figure class="icon-cards">
                        <div class="icon-cards-content">
                            <div class="icon-cards-item">
                                <a href="<?= $this->getData('vlog')[0]['video']; ?>"><img src="<?= 'app/tpl/videos/img/' . $this->getData('vlog')[0]['splash']; ?>" alt=""></a>
                            </div>
                            <div class="icon-cards-item">
                                <a href="<?= $this->getData('tutorial')[0]['video']; ?>"><img src="<?= 'app/tpl/videos/img/' . $this->getData('tutorial')[0]['splash']; ?>" alt=""></a>
                            </div>
                            <div class="icon-cards-item">
                                <a href="<?= $this->getData('live')[0]['video']; ?>"><img src="<?= 'app/tpl/videos/img/' . $this->getData('live')[0]['splash']; ?>" alt=""></a>
                            </div>
                        </div>
                    </figure>
                </div>
            </div>
        </header>
        <main>
            <div id="live">
                <div class="block">
                    <div class="floater">
                        <h1>Tutorials</h1>
                        <div class="flex section">
                            <?php $tutorial = $this->getData('tutorial'); $c = 0; foreach ($tutorial as $video) : ++$c; if ($c > 5) break; ?>
                            <div class="box box2">
                                <h1><?= $video['title']; ?></h1>
                                <a href="<?= $video['video']; ?>"><img src="<?= 'app/tpl/videos/img/' . $video['splash']; ?>"></a>
                            </div>
                            <?php endforeach; ?>
                        </div>
                        <div class="tcenter"><button class="large">More</button></div>
                    </div>
                </div>

                <div class="block">
                    <div class="floater">
                        <h1>vLog</h1>
                        <div class="flex section">
                            <?php $vlog = $this->getData('vlog'); $c = 0; foreach ($vlog as $video) : ++$c; if ($c > 5) break; ?>
                            <div class="box box2">
                                <h1><?= $video['title']; ?></h1>
                                <a href="<?= $video['video']; ?>"><img src="<?= 'app/tpl/videos/img/' . $video['splash']; ?>"></a>
                            </div>
                            <?php endforeach; ?>
                        </div>
                        <div class="tcenter"><button class="large">More</button></div>
                    </div>
                </div>

                <div class="block">
                    <div class="floater">
                        <h1>Live</h1>
                        <div class="flex section">
                            <div class="box box2">
                                <h1>Twitch - Live Stream (spl1nes)</h1>
                                <div id="twitch-embed"></div>

                                <script type="text/javascript">
                                    new Twitch.Embed("twitch-embed", {
                                        width: '100%',
                                        height: 112,
                                        channel: "spl1nes",
                                        autoplay: false,
                                        layout: "video"
                                    });
                                </script>
                            </div>

                            <?php $live = $this->getData('live'); $c = 0; foreach ($live as $video) : ++$c; if ($c > 5) break; ?>
                            <div class="box box2">
                                <h1><?= $video['title']; ?></h1>
                                <a href="<?= $video['video']; ?>"><img src="<?= 'app/tpl/videos/img/' . $video['splash']; ?>"></a>
                            </div>
                            <?php endforeach; ?>
                        </div>
                        <div class="tcenter"><button class="large">More</button></div>
                    </div>
                </div>
            </div>
        </main>
        <?php include __DIR__ . '/footer.tpl.php'; ?>
    </body>
</html>