# Using JS Modules

Two days ago I made the decision to rewrite large amounts of the javascript framework and modules by making use of JS modules. From now on the framework and the modules can be used through the JS module system (e.g. import/export). I'm certain that there are still some bugs left in the code where I didn't replace the old namespacing logic with the new import names.

The commits can be found here:

* Modules: https://github.com/Orange-Management/Modules/commit/ef66465114fe6f20228727315d65ea34d68c6e59
* jsOMS: https://github.com/Orange-Management/jsOMS/commit/89acb321f9e2d78a8b601f123c31b39c8554d122
* Application: https://github.com/Orange-Management/Orange-Management/commit/71fb36abdafd40269d39a17b7992a4ff1af48f5a

Please note that the unit tests are not yet fixed. Only the tests in the `cssOMS` framework should be fixed.

The unit tests will be fixed once a new testing sessions starts where many more unit tests are implemented. During this "sprint" the old unit tests will be fixed, new ones will be implemented and code coverage reports might be added as well.