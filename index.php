<?php declare(strict_types=1);
\ob_start();
require_once __DIR__ . '/phpOMS/Autoloader.php';

$App = new \app\Application();

\ob_end_flush();
