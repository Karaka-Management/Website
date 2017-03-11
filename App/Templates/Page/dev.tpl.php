<main>
	<section class="spacer content">
		<div class="row">
            <div class="col-xs-12">
                <h1>Developer information</h1>
                <p>
                    <a target="_blank" href="https://github.com/Orange-Management/phpOMS/issues"><img src="https://img.shields.io/github/issues/Orange-Management/phpOMS.svg"></a>
                    <a target="_blank" href="https://github.com/Orange-Management/jsOMS/issues"><img src="https://img.shields.io/github/issues/Orange-Management/jsOMS.svg"></a>
                    <a target="_blank" href="https://github.com/Orange-Management/Modules/issues"><img src="https://img.shields.io/github/issues/Orange-Management/Modules.svg"></a>
                </p>
                <p>The following links provide information about the code base. Some inspections use third party tools to analyze the code base and generate reports. Some reports are generated through shell scripts and linked here. Additionaly to code inspection reports you can also find links to the github dashboard and the automatically generated DocBlock documentation intended for developers. Links that direct to an empty output indicate that the inspection didn't return any critical code segments.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-6">
                <h2>Tests</h2>
                <p>For the php unit testing we are using PHPUnit. The goal is to reach a 90% covareage for the phpOMS framework and the modules. The most recent PHPUnit output can be found here:</p>
                <ul>
                    <li><a target="_blank" href="http://orange-management.de/Inspection/Test/Php/phpunit.log">Console output</a>
                    <li><a target="_blank" href="http://orange-management.de/Inspection/Test/Php/">Web output</a>
                    <li><a target="_blank" href="http://orange-management.de/Inspection/Test/Php/coverage/">Code Coverage</a>
                </ul>
            </div>
            <div class="col-xs-12 col-sm-6">
                <h2>Metrics</h2>
                <p></p>
                <ul>
                    <li><a target="_blank" href="http://orange-management.de/Inspection/Framework/metrics/metrics.html">Framework Metrics</a>
                    <li><a target="_blank" href="http://orange-management.de/Inspection/Modules/metrics/metrics.html">Modules Metrics</a>
                    <li><a target="_blank" href="http://orange-management.de/Inspection/Framework/phploc.log">Framework LOC</a>
                    <li><a target="_blank" href="http://orange-management.de/Inspection/Modules/phploc.log">Modules LOC</a>
                </ul>
            </div>
        </div>
        <h2>Framework Pdepend</h2>
        <div class="row">
            <div class="col-xs-12 col-sm-6">
                <img src="http://orange-management.de/Inspection/Framework/pdepend/chart.svg">
            </div>
            <div class="col-xs-12 col-sm-6">
                <img src="http://orange-management.de/Inspection/Framework/pdepend/pyramid.svg">
            </div>
        </div>
        <h2>Modules Pdepend</h2>
        <div class="row">
            <div class="col-xs-12 col-sm-6">
                <img src="http://orange-management.de/Inspection/Framework/pdepend/chart.svg">
            </div>
            <div class="col-xs-12 col-sm-6">
                <img src="http://orange-management.de/Inspection/Framework/pdepend/pyramid.svg">
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-6">
                <h2>Code Quality</h2>
                <ul>
                    <li><a target="_blank" href="http://orange-management.de/Inspection/Framework/phpcpd/phpcpd.log">Duplicated code</a>
                </ul>
            </div>
            <div class="col-xs-12 col-sm-6">
                <h2>Linting</h2>
                <ul>
                    <li><a target="_blank" href="http://orange-management.de/Inspection/Framework/linting/linting_php.log">Framework PHP Linting</a>
                    <li><a target="_blank" href="http://orange-management.de/Inspection/Modules/linting/linting_php.log">Modules PHP Linting</a>
                    <li><a target="_blank" href="http://orange-management.de/Inspection/Modules/linting/linting_json.log">Modules JSON Linting</a>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-6">
                <h2>Security</h2>
                <ul>
                    <li><a target="_blank" href="http://orange-management.de/Inspection/Framework/critical_php.log">Critical PHP Framework Functions</a>
                    <li><a target="_blank" href="http://orange-management.de/Inspection/Modules/critical_php.log">Critical PHP Modules Functions</a>
                    <li><a target="_blank" href="http://orange-management.de/Inspection/Framework/strict_missing.log">Non-strict Framework Components</a>
                </ul>
            </div>
            <div class="col-xs-12 col-sm-6">
                <h2>Html</h2>
                <ul>
                    <li><a target="_blank" href="http://orange-management.de/Inspection/Modules/html/attributes_empty.log">Empty HTML Attributes</a>
                    <li><a target="_blank" href="http://orange-management.de/Inspection/Modules/html/attributes_invalid.log">Invalid HTML Attributes</a>
                    <li><a target="_blank" href="http://orange-management.de/Inspection/Modules/html/tags.log">Depreciated tags</a>
                </ul>
            </div>
        </div>
    </section>
</main>