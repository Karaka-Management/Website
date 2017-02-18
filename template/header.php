<div class="grad grad-main"></div>
<div id="header-top" class="cont">
    <div id="logo">
        <img width="70px" src="img/theme/main.png">
    </div>
    <div id="logo-name">Orange Management</div>
    <nav>
        <ul>
            <li class="<?= $_GET['p'] === 'main' ? 'active' : ''; ?>"><a href="?p=main">MAIN</a><li class="<?= $_GET['p'] === 'code' ? 'active' : ''; ?>"><a href="http://git.orange-management.de/" target="_blank">GIT</a><li class="<?= $_GET['p'] === 'positions' ? 'active' : ''; ?>"><a href="?p=positions">POSITIONS</a><li class="<?= $_GET['p'] === 'live' ? 'active' : ''; ?>"><a href="http://docs.orange-management.de/" target="_blank">DOCS</a><li class="<?= $_GET['p'] === 'demo' ? 'active' : ''; ?>"><a href="http://oms.orange-management.de/en/backend" target="_blank">DEMO</a>
        </ul>
    </nav>
</div>
<header>
    <div class="cont">
        <div id="header-info">
            <h1><?= strtoupper($_GET['p']); ?></h1>
        </div>
    </div>
    <div style="clear: both;"></div>
</header>
<div class="grad grad-main"></div>