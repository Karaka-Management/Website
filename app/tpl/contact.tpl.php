<!DOCTYPE HTML>
<html lang="en">
    <head>
        <title>Orange-Management - Contact</title>
        <?php include __DIR__ . '/head.tpl.php'; ?>
        <link rel="stylesheet" href="app/css/contact.css">
    </head>
    <body>
        <header>
            <?php include __DIR__ . '/nav.tpl.php'; ?>
        </header>
        <main>
            <div id="contact">
                <div class="block">
                    <div class="floater">
                        <h1>Contact</h1>
                        <h2>Please feel free to contact us. We will try to respond as fast as possible. In the meantime check our documentation and support for additional help & information.</h2>

                        <form action="/contact" method="POST">
                            <label>Your Email</label>
                            <input type="email" required>
                            <label>Reason</label>
                            <select required>
                                <option disabled selected>Please select...</option>
                                <option value="1">Inquiry</option>
                                <option value="2">Support</option>
                                <option value="3">Career</option>
                                <option value="4">Other</option>
                            </selecT>
                            <label>Message</label>
                            <textarea required></textarea>
                            <input class="large" type="submit" value="Submit">
                        </form>
                    </div>
                </div>
            </div>
        </main>
        <?php include __DIR__ . '/footer.tpl.php'; ?>
    </body>
</html>