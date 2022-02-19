# August Update Notes

It's been some time since the last update post for which reason This post contains a couple more changes than usual.

## User changes

### Improvements

* The table header is *sticky* which always shows the header even when scrolling down
* QA module draft extended
* Support module draft extended

### New features

* Implement visual indiecation for speech and microphone below the organization selector
* Allow media files for Comments, QA, Knowledgebase, Kanban, Editor
* Contract module draft created

## Developer changes

### Improvements

* The `demoSetup/setup.php` script from the [https://github.com/karaka-management/demoSetup](demoSetup) repository
* Missing/invalid localization identifiers no longer only output `ERROR` but `ERROR-identifier`. This makes it much easier to find the invalid localization.
* Removed many getters/setters with public member variables

### New features

* Language importer/exporter for the `Exchange` module. This allows developers to export/import all langauges from all modules as csv file for easier modifications.

### Fixes

* Fixed the web installer
* Codestyle fixes
* Unit/integration test fixes
* Template file fixes

### New ER diagrams

* Admin implemented
* Auditor implemented
* Billing implemented
* Calendar implemented
* ClientManagement implemented
* Comments implemented
* ContractManagement implemented
* Editor implemented
* Exchange implemented
* Helper implemented
* HumanResourceTimeRecording implemented
* TimeManagement implemented
* Kanban implemented
* Knowledgebase implemented
* Media implemented
* Navigation implemented
* News implemented
* Organization implemented
* Profile implemented
* QA implemented
* SupplierManagement implemented
* Support implemented
* Tag implemented
* WarehouseManagement implemented
