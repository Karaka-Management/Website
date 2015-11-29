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
            background: #fff;
            color: #000;
            line-height: 1.3em;
        }

        header {
            background: #2f2f2f;
            padding-top: 20px;
            padding-bottom: 20px;
            color: #fff;
        }

        header img {
            float: left;
        }

        #header-info {
            float: left;
            margin-left: 40px;
            width: 450px;
        }

        #header-info p {
            font-size: 0.9em;
        }

        header h1 {
            text-shadow: 2px 2px #000;
        }

        .cont {
            width: 800px;
            margin: 0 auto;
        }

        main {
            color: #2f2f2f;
            background: #fff;
            font-size: 0.9em;
        }

        footer {
            font-size: 0.9em;
            color: #fff;
            background: #2f2f2f;
            padding-top: 20px;
            padding-bottom: 20px;
        }

        a {
            text-decoration: none;
            color: #fff;
        }
    </style>
</head>
<body>
<div id="out">
    <header>
        <div class="cont">
            <img width="300px" src="logo.png">
            <div id="header-info">
                <h1>Orange Management</h1>
                <p>A modular combination of ERP, CRM, Intranet &amp; CRM written in PHP and JavaScript for small to mid-sized companies.</p>
                <p>The software is currently under development and can be found on GitHub with almost daily updates. New developers (front- &amp; backend) designers, server administrators and anyone interested in participating in the project is highly welcome.</p>
                <p><a href="http://orange-management.de/en/backend">Live Demo</a></p>
                <p>
                    <a href="http://orange-management.de/Build/stats/phpOMS.log">LOC1</a> -
                    <a href="http://orange-management.de/Build/stats/ModulesStats.log">LOC2</a> -
                    <a href="http://orange-management.de/Build/stats/ReportFramework.html">Metrics1</a> -
                    <a href="http://orange-management.de/Build/stats/ReportModules.html">Metrics2</a> -
                    <a href="http://orange-management.de/Build/logs/phpunit.log">PhpUnit</a>
                </p>
            </div>
        </div>
        <div style="clear: both;"></div>
    </header>
    <main>
        <div class="cont">
            <h1>Developer</h1>
            <h2>Frontend</h2>
            <p>As a frontend developer you would be taking care of HTML, CSS, JavaScript. You could either work on the core functionality or implement the frontend of modules. The project is not using any major JavaScript frameworks which is why talented JavaScript developers that know vanilla JS and have great ideas to implement universal solutions for many UI problems are highly welcome.</p>
            <p>The core frontend framework tries to universally handle forms and basic UI elements in a project specific way. There is still a lot of basic functionallity that needs to be implemented (e.g. request pooling, simple form intaraction, nicer form UI elements) but besides that there are also other interesting side projects such as a charting library implementation based on D3, a markdown parser for project specific custom elements, math evaluator, table UI, and much more.</p>
            <h2>Backend</h2>
            <p>The backend development is not based on one of the existing frameworks and only uses a rather limited set of libraries. As a backend developer you would be responsible for implementing and maintaining core functionalities. This would also include benchmarking and improving the performance of bottlenecks. Besides these there are still a view open core elements that need to be fully implemented such as a markdown parser that also supports project specific elements, math library for financial calculations, another very big bullet point would be the implementation of multiple caching mechanisms (Memcached &amp; Radis) and last but not least the query builder and data mapper which both need to be fully implemented.</p>
            <p>Another possibility would be to take over the backend development of a module which includes implementing all its functionality for the frontend and api including the database schema. Here you can make full use of your creativity and potentially implement features that you would like to have as a customer.</p>
            <p>One more future playground could be the implementation of a socket in order to handle concurrency, websockets, multi-threaded tasks etc.</p>
            <h1>Administrator</h1>
            <p>A sophisticated build system is very important to support the development process. Setting up a build system including jenkins, unit testing, code style checking, preprocessing etc. is highly required and could be your responsibility. Not only would you be responsible for the build process but also for the deployment to the testing environment.</p>
        </div>
    </main>
    <footer>
        <div class="cont">
            <div style="text-align: center">
                <a href="http://orange-management.de/en/backend">Live Demo</a> -
                <a href="https://github.com/spl1nes/Orange-Management/tree/develop">Github</a> - 
                <a href="https://waffle.io/spl1nes/Orange-Management">Waffle</a> - 
                <a href="https://scrutinizer-ci.com/g/spl1nes/oms/?branch=develop">Scrutinizer</a> - 
                <a href="https://codeclimate.com/github/spl1nes/oms">CodeClimate</a> - 
                spl1nes.com@gmail.com
            </div>
            <div style="text-align: center">
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
    </footer>
</div>
</body>
</html>
