# Build Automation

For a long time automated build tools were a missing mosaic that's why I'm even more happy to announce that we finally have implemented some build automation. Hopefully, these will help us to further increase the code quality and make it easier for new developers to create pull requrests.

![CS and Static Analysis](app/tpl/posts/img/20191126_build_automation_github.png)

While we where using a lot of tools to ensure code quality (e.g. unit tests, code style, static code analyis, custom scripts, etc.) these where all only used locally and had to be setup and run on the local machine.

The local tools and scripts are still more comprehensive but the build automation in our code base on github now allows us to do automatic:

* Unit Tests
* Static Code Analysis
* Code Style Checks

The future goal is to add more automated steps like the deployment to our public test server, documentation generation and most importantly automatic generation of update packages for the users.

Build Automation: https://github.com/karaka-management/Karaka/actions
