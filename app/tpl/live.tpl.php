<html>
    <head>
        <title>Orange-Management - Services</title>
        <?php include __DIR__ . '/head.tpl.php'; ?>
        <script src="https://embed.twitch.tv/embed/v1.js"></script>
    </head>
    <body>
        <header>
            <?php include __DIR__ . '/nav.tpl.php'; ?>
        </header>
        <main>
            <div class="block">
                <div class="floater">
                    <h1>Live</h1>
                    <div id="twitch-embed"></div>
                </div>
            </div>

            <script type="text/javascript">
                new Twitch.Embed("twitch-embed", {
                    width: '100%',
                    height: 640,
                    channel: "spl1nes",
                    autoplay: false
                });
            </script>
        </main>
        <?php include __DIR__ . '/footer.tpl.php'; ?>
    </body>
</html>