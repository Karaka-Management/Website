# General

The Orange Management software is a modular web application for small to mid sized companies that need CRM, ERP, Intranet and/or CMS features. The Orange Management modules can be split into the following different categories:

* General
* Business
* Education
* Health Care

There is no limitation on how to combine modules. The modules are structured in a way that there is a minimum amount of dependencies between modules. Often modules provide additional functionality for other modules or modules request features from existing modules. Only in a few cases modules require another module for it's functionality, this is usually only the case for core modules or modules that have a strong relation to an other module.

Thanks to the modular structure it's easy to have full control over the costs and keep the functionality to the exact amount that is needed. There is no fear of having too many functions that reduce the usability if they are not needed. This also results in a fast environment not just because only the necessary parts get installed but also because the core is built for a good experience in terms of performance.

# Setup

* Clone the `phpOMS` repository
* Clone the `Website` repository
* Clone the `Modules` repository to the same directory
* Clone the `Developer-Guide` repository to the same directory
* Clone the `Documentation` repository to the same directory
* Setup the `Build` system and run it (`./inspection.sh`). (Inspection path should be located in the website parent directory)

The directory should look like this:

* phpOMS (required by the website for functionality)
* Website (apache/nginx web path)
* Modules (used for live module information)
* Developer-Guide (raw developer documentation)
* Documentation (raw end user documentation)
* Inspection (contains dev info created by the build system)
* Orange-Management (created by the build system)

## Development Status

Currently Orange Management is still fully developing the first Alpha version. As soon as we have a running Beta version we are allowing external testers to use our software and a selected amount of inhouse developed modules.

## Developers

We are always looking for people that are interested in joining this project. We are looking for:

* PHP developer
* JavaScript developer
* Frontend developer
* Designer

Are you interested in joining us? Feel free to contact us at spl1nes.com@gmail.com.

## Overview

* Project: Orange Management
* Group: Orange Management
* Developers: 1
* Languages: PHP, JS, Java, HTML, CSS
* Dependencies: d3.js, THREE.js, tcpdf, PhpExcel
* Website: [http://orange-management.de/Website](http://orange-management.de/Website)