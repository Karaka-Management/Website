<!DOCTYPE HTML>
<html lang="en">
    <head>
        <title>Karaka - Contact</title>
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
                            <label for="email" >Your Email</label>
                            <input id="email" name="email" type="email" required>
                            <label for="reason">Reason</label>
                            <select id="reason" name="reason" required>
                                <option disabled selected>Please select...</option>
                                <option value="1">Inquiry</option>
                                <option value="2">Support</option>
                                <option value="3">Career</option>
                                <option value="4">Other</option>
                            </select>
                            <label for="message">Message</label>
                            <textarea id="message" name="message" required></textarea>
                            <input class="large" type="submit" value="Submit">
                        </form>
                    </div>
                </div>
            </div>
        </main>
        <?php include __DIR__ . '/footer.tpl.php'; ?>
    </body>
</html>