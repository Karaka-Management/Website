<?php $_GET['p'] = realpath($path = __DIR__ . '/'. ($_GET['p'] ?? 'main') . '.php') !== false ? $_GET['p'] ?? 'main' : 'main'; ?>
<!DOCTYPE HTML>
<html>
<head>
    <title>Orange Management</title>
    <link rel="stylesheet" href="styles.css" type="text/css" />
</head>
<body>
<div id="out">
    <?php include 'template/header.php'; ?>
    <main>
        <div class="cont">
            <?php include realpath($path = __DIR__ . '/template/pages'. $_GET['p'] . '.php'); ?>
        </div>
    </main>
    <?php include 'template/footer.php'; ?>
</div>
</body>
</html>
