<div class="grad grad-main"></div>
<div id="header-top" class="cont">
    <div id="logo">
        <img width="70px" src="main.png">
    </div>
    <div id="logo-name">Orange Management</div>
    <nav>
        <ul>
            <li class="<?= $_GET['p'] === 'main' ? 'active' : ''; ?>"><a href="?p=main">MAIN</a><li class="<?= $_GET['p'] === 'people' ? 'active' : ''; ?>"><a href="?p=people">PEOPLE</a><li class="<?= $_GET['p'] === 'code' ? 'active' : ''; ?>"><a href="?p=code">CODE</a><li class="<?= $_GET['p'] === 'docs' ? 'active' : ''; ?>"><a href="?p=docs">DOCS</a><li class="<?= $_GET['p'] === 'positions' ? 'active' : ''; ?>"><a href="?p=positions">POSITIONS</a>
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