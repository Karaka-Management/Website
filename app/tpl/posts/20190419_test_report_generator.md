# Test Report Generator

With a new tool we created we are now able to automatically generate test reports which can be used by customers, partners and auditors to check our software tests. The tool supports custom templates and different languages. The tool is released under MIT on github at: https://github.com/karaka-management/TestReportGenerator


## What is the TestReportGenerator

This TestReportGenerator creates a html report for php unit tests which can be used to create test reports for software audits. The generated output is html, css and and can be styled with custom themes as desired. The report is ideal to ship with software as proof for customers that the software (i.e. updates) have been tested and perform as expected. Such evidences sometimes are required by companies and organizations for internal or external audits.

The advantage compared to other alternatives like `@testdox` from PHPUnit are:

* Support of multiple languages
* Customize which test results should be included in the report
* Customizable report template

## Requirements

* PHP Version >= 7.0

## Demo

http://karaka.app/Inspection/Test/ReportExternal/index.htm

## Usage

A list of arguments can be found with:

```
php TestReportGenerator/src/index.php -h
```

The default usage would be:

```
php TestReportGenerator/src/index.php -d <DESTINATION_PATH> -t <TEMPLATE> -u <JUNIT_UNIT_TEST_LOG> -c <CODE_COVERAGE_REPORT> -l <LANGUAGE_FILE>
```

### Arguments

* `-h` Show help
* `-d` Destination directory (*optional* no theme definition will use the default theme)
* `-t` Template of the test report (has to be a directory containing a `index.tpl.php` which is rendered as `html` file during the generation process)
* `-u` Unit test log (`junit` style)
* `-c` Code coverage source (`coverage-clover`) (*optional*)
* `-l` Language file (`php array`)

Note: Paths need to be absolute.

### Custom Arguments

If you need custom arguments which is used by the template you can use `--<definition> <value>` in order to pass these values.

The default template for example allows to pass a version number via `--version 1.0.0` which is then accessed in the template by using `$this->cmdData['version]`.

## Language file structure

The language file is an array of the following form:

```php
return [
    // keys which start with `:` are considered localized strings used in the template not for the report.
    ':yourLanguageId1' => '<localized text here>',
    ':yourLanguageId2' => '<localized text here>',
    ...
    // additional key-value pairs similar to the description key can be added optionally and then used in the customized template if required (e.g. author, purpose, associated risk etc.)
    'namespace\of\unittest\class:testFunctionName' => ['description' => '<text to display>' /* optional parameters go here */],
    'namespace\of\unittest\class:testFunctionName' => ['description' => '<text to display>'],
    ...
];
```

### Localization

By prefixing a key with `:` the generator will consider these values as localization elements only used by the template. In the template you can access them via:

```php
$this->getText(':yourLanguageId');
```

### Report Parameters for Tests

If you want to show additional information in your test report per test you can provide these information as additional key-value pairs. In the template you can access them via:

```php
$result['info']['key_name'];
```

Check out the default template for an example `$result['info']['description'];`

## Preview

![sample](https://raw.githubusercontent.com/Karaka-Management/TestReportGenerator/master/img/sample.jpg)
