<?php
/**
 * Orange Management
 *
 * PHP Version 7.1
 *
 * @copyright  Dennis Eichhorn
 * @license    OMS License 1.0
 * @version    1.0.0
 * @link       http://orange-management.com
 */
ob_start();

//<editor-fold desc="Require/Include">
require_once __DIR__ . '/../phpOMS/Autoloader.php';
//</editor-fold>

$config = require_once __DIR__ . '/config.php';
$App = new \Website\App\Application($config);

ob_end_flush();
