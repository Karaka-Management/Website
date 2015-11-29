<?php
/**
 * Orange Management
 *
 * PHP Version 7.0
 *
 * @category   TBD
 * @package    TBD
 * @author     OMS Development Team <dev@oms.com>
 * @author     Dennis Eichhorn <d.eichhorn@oms.com>
 * @copyright  2013 Dennis Eichhorn
 * @license    OMS License 1.0
 * @version    1.0.0
 * @link       http://orange-management.com
 */
//$commits = file_get_contents('https://api.github.com/repos/spl1nes/orange-management/commits?sha=develop');
?>
<!DOCTYPE HTML>
<html>
<head>
    <title>Orange Management</title>
    <style type="text/css">
        html, body {
            height: 100%;
            padding: 0;
            margin: 0 auto;
            font-family: arial, serif;
            background: #2f2f2f;
            color: #fff;
        }

        html, body, div {
            margin: 0;
            padding: 0;
        }

        li {
            list-style-type: none;
        }

        input {
            margin-bottom: 5px;
        }

        .floater {
            float: left;
            height: 50%;
            width: 100%;
            margin-bottom: -310px;
        }

        #parent {
            display: table;
            position: static;
            clear: left;
            height: 600px;
            width: 600px;
            margin: 0 auto;
        }

        #child {
            display: table-cell;
            vertical-align: middle;
            width: 100%;
            position: relative;
            font-size: 1.0em;
        }

        #title {
            text-align: center;
            font-size: 3em;
            color: #fff;
            text-shadow: 2px 2px #000;
        }

        .reference {
            margin-top: 10px;
            text-align: center;
            font-size: 1em;
            color: #fff;
            text-shadow: 1px 1px #000;
        }

        a {
            text-decoration: none;
            color: #fff;
        }

        #content {
        }
    </style>
</head>
<body>
<div class="floater"></div>
<div id="parent">
    <div id="child">
        <div><a href="people.php"><img src="logo.png"></a></div>
        <div id="title"><a href="people.php">Orange Management</a></div>
        <div class="reference">
            <a href="http://orange-management.de/en/backend">Live Demo</a> -
            <a href="https://github.com/spl1nes/Orange-Management/tree/develop">Github</a> - 
            <a href="https://waffle.io/spl1nes/Orange-Management">Waffle</a> - 
            <a href="https://scrutinizer-ci.com/g/spl1nes/oms/?branch=develop">Scrutinizer</a> - 
            <a href="https://codeclimate.com/github/spl1nes/oms">CodeClimate</a>
        </div>
        <div class="reference">
            <a href="http://orange-management.de/Build/stats/phpOMS.log">LOC1</a> -
            <a href="http://orange-management.de/Build/stats/ModulesStats.log">LOC2</a> -
            <a href="http://orange-management.de/Build/stats/ReportFramework.html">Metrics1</a> -
            <a href="http://orange-management.de/Build/stats/ReportModules.html">Metrics2</a> -
            <a href="http://orange-management.de/Build/logs/phpunit.log">PhpUnit</a> -
            <a href="http://orange-management.de/Build/logs/phpcsFramework.log">PhpCS1</a> -
            <a href="http://orange-management.de/Build/logs/phpcsModules.log">PhpCS2</a> -
            <a href="http://orange-management.de/Build/logs/phpcpdFramework.log">PhpCPD1</a> -
            <a href="http://orange-management.de/Build/logs/phpcpdModules.log">PhpCPD2</a> -
            <a href="http://orange-management.de/Build/logs/phpLintFramework.log">Lint1</a> -
            <a href="http://orange-management.de/Build/logs/phpLintModules.log">Lint2</a>
        </div>
    </div>
</div>
</body>
</html>
