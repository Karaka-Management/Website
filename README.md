# Karaka

<p align="center"><img src="https://raw.githubusercontent.com/Karaka-Management/Assets/master/art/logo.png" width="256" alt="Logo"></p>

The phpOMS framework is primarily developed for the Karaka application which is a modular web application for small to mid sized companies that need CRM, ERP, Intranet and/or CMS functionalities and much more. The framework is also used in some other tools and websites which compliment the Karaka web application and provides the necessary php functionality.

With Karaka you have one partner who can provide all the tools and software solutions you are used to at fair and reasonable prices even for small organizations and companies/startups. Our solutions can be used independently from each other or fully integrated with other solutions we provide. By choosing Karaka as your partner you'll be able to adjust your software based on the changes in your requirements without worrying about integration and workflow optimization.

## Table of content

- [Karaka](#karaka)
  - [Table of content](#table-of-content)
  - [Installation](#installation)
    - [Requirements](#requirements)
    - [Setup](#setup)
  - [Philosophy](#philosophy)
  - [Development Status](#development-status)
  - [Become a contributor](#become-a-contributor)
  - [Misc](#misc)

## Installation

### Requirements

Some of the following requirements are only necessary for developers and not for end-users:

* PHP 7.4
* PHP extension: php7.4-cli php7.4-common php7.4-mysql php7.4-pgsql php7.4-xdebug php7.4-json php7.4-opcache php7.4-pdo php7.4-sqlite php7.4-mbstring php7.4-curl php7.4-imap php7.4-bcmath php7.4-zip php7.4-dom php7.4-xml php7.4-phar php7.4-gd php7.4-dev php-pear
* apache2 (recommended) or nginx
* mysql-server or postgresql postgresql-contrib
* Make sure that url rewriting is active
* Download the Karaka project or clone the Karaka repository (incl. submodules).

Please note if you are only interested in using the framework without the web application you only have to configure your autoloading correctly for the **phpOMS** framework or use the autoloader provided by the framework in `phpOMS/Autoloader.php` and install the required php extensions mentioned above.

### Setup

After installing the requirements and configuring the webserver for the correct path navigate to https://your_url.com/Install and follow the installation process. Afterwards you will be redirected to the installed backend.

For more detailed information please checkout the [Installation Guide](https://karaka.app/dev/guide?page=setup/installation) for developers or the [Installation Guide](https://karaka.app/info?page=setup/server) for end-users.

## Philosophy

We believe software should support a business in it's daily tasks and growth in a very efficient way without frustration. In order to achieve this we constantly take feedback from our customers and expand and improve our software solutions.

Since we believe in our software and transparent business model you can live test parts of our application and it's modules in our demo application at https://karaka.app (user: admin, pass: orange) without any registration or inquiry. This can be done even during the development phase.

## Development Status

Currently Karaka is still developing the first Alpha version. As soon as we have a running Beta version we are allowing external testers to use our software and a selected amount of inhouse developed modules. The **phpOMS** framework is the component which is developed the furthest and already provides a large amount of functionality which is required by the whole project.

General updates can be found in our info section at https://karaka.app/info and developer updates can be found in our developer section at https://karaka.app/dev. In our developer section you can also check out the automatically generated reports such as code coverage, code style, static analysis etc. as well as our code style guide lines and developer documentation.

![Preview](https://raw.githubusercontent.com/Karaka-Management/Assets/master/art/preview.png)

## Become a contributor

Karaka has a very open culture and we always welcome new people who share our philosophy in providing create solutions which just work. Please contact us if you are interested in working together on our application.

* PHP Developer
* JS Developer
* Artist and/or Frontend
* DevOps

Check out https://karaka.app/career and our developer section https://karaka.app/dev for more information.

## Misc

* Languages: PHP, JS, HTML, CSS
* Website: [https://karaka.app](https://karaka.app)
* Demo: [https://karaka.app](https://karaka.app) (user: admin, pass: orange)
* Dev: [https://karaka.app/dev](https://karaka.app/dev)
* Contact: dennis@karaka.email
