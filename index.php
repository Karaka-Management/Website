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

        .grad {
            height: 5px;
            width: 100%;

            background: #ffbf00; /* Old browsers */
            background: -moz-linear-gradient(left,  #ffbf00 0%, #a06114 100%); /* FF3.6-15 */
            background: -webkit-linear-gradient(left,  #ffbf00 0%,#a06114 100%); /* Chrome10-25,Safari5.1-6 */
            background: linear-gradient(to right,  #ffbf00 0%,#a06114 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
            filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ffbf00', endColorstr='#a06114',GradientType=1 ); /* IE6-9 */
        }

        header {
            -webkit-box-shadow: inset 0 10px 10px -10px rgba(0,0,0,0.8);
            -moz-box-shadow: inset 0 10px 10px -10px rgba(0,0,0,0.8);
            box-shadow: inset 0 10px 10px -10px rgba(0,0,0,0.8);

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

        #header-top {
            width: 100%;
            height: 110px;
            display: table;
            box-sizing: border-box;
        }

        #logo {
            display: table-cell;
            vertical-align: middle;
            width: 70px;
        }

        #logo img {
            margin-right: 10px;
        }

        #logo-name {
            display: table-cell;
            vertical-align: middle;
            font-size: 1.5em;
            font-weight: bold;
            text-shadow: 2px 2px rgba(0,0,0,0.1);
        }

        nav {
            display: table-cell;
            vertical-align: middle;
        }

        nav ul {
            float: right;
            list-style-type: none;
        }

        nav li {
            display: inline;
            margin-left: 10px;
            padding-bottom: 5px;
        }

        nav li:hover {
            border-bottom: 3px solid #ffbf00;
        }

        nav a {
            color: #4D4D4D;
            font-weight: bold;
            font-size: 1em;
        }

        nav a:hover {
            color: #000;
        }

        .cont {
            max-width: 1000px;
            margin: 0 auto;
            padding: 0 20px 0 20px;
        }

        main {
            color: #4D4D4D;
            background: #fff;
            font-size: 1.3em;
            line-height: 1.7em;
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
    <?php include 'header.php'; ?>
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
    <?php include 'footer.php'; ?>
</div>
</body>
</html>
