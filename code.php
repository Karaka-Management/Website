<h1>Quality & Inspections</h1>
<p>High code quality even for the 'develop' branch. External code quality tests are performed by <a href="https://scrutinizer-ci.com/dashboard/repositories">Scrutinizer</a> for key repositories.</p>
<div class="center"><img src="img/page/code_quality.jpg"></div>
<p>Additional code inspections are done with the following tools:</p>
<ul>
    <li>PhpLoc
    <li>PhpMetrics
    <li>Pdepend
    <li>PhpCS
    <li>PhpMD
    <li>PhpCPD
    <li>Custom bash scripts
</ul>

<h1>Deployment</h1>
<p>Easy dev deployment with a single bash script call and dummy data setup with unit tests. Checking out a small build repository, configuring the config file and running the bash script is all that is required in order to spin up a working demo of the application. Still too complicated? Go ahead and setup your Vagrant environment based on the application config file and you're set.</p>

<h1>Unit test</h1>
<p>Unit tests for key components are an important factor in order to ensure a high code quality. By providing multiple inspection configurations the codebase can be evaluated based on the specific needs. In combination with code coverage analysis it's possible to keep track of a high coverage of the critical code segments.</p>