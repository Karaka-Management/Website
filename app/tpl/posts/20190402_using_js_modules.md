# Using JS Modules

Two days ago I made the decision to rewrite large amounts of the javascript framework and modules by making use of JS modules. From now on the framework and the modules can be used through the JS module system (e.g. import/export). I'm certain that there are still some bugs left in the code where I didn't replace the old namespacing logic with the new import names but these will be fixed whenever they popup.

It goes without saying that these changes are obviously breaking changes which hover can be fixed in a very short amount of time, if any unimplemented aspects remain.

The commits can be found here:

* Application: https://github.com/Orange-Management/Orange-Management/commit/71fb36abdafd40269d39a17b7992a4ff1af48f5a
* jsOMS: https://github.com/Orange-Management/jsOMS/commit/89acb321f9e2d78a8b601f123c31b39c8554d122
* Modules: https://github.com/Orange-Management/Modules/commit/ef66465114fe6f20228727315d65ea34d68c6e59
* cssOMS: https://github.com/Orange-Management/cssOMS/commit/400bc04405ffad8d3ab7e68ff6d14a5bfd9ad03f

Please note that the unit tests are not yet fixed. Only the tests in the `cssOMS` framework should be fixed.

The biggest advantage of this change is that it's possible to autoload the different modules from other modules without defining the scripts in the html template. Additionally the modules are now non-render blocking by default and it should be much easier to merge the files with transpilers later on if required in order to reduce the http(s) lookup.

The unit tests will be fixed once a new testing sessions starts where many more unit tests are implemented. During this "sprint" the old unit tests will be fixed, new ones will be implemented and code coverage reports might be added as well.