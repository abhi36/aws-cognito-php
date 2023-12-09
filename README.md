# abhi36/aws-cognito-php

![Downloads](https://poser.pugx.org/abhi36/aws-cognito-php/downloads)
[![Build Status](https://travis-ci.com/abhi36/aws-cognito-php.svg?branch=master)](https://travis-ci.com/abhi36/aws-cognito-php)

## Introduction

This library contains a PHP client for AWS Cognito user pools.

## Requirements

This library package requires PHP 7.1 or later

## Installation

### Installing via Composer

The recommended way to install is through
[Composer](http://getcomposer.org).

```bash
# Install Composer
curl -sS https://getcomposer.org/installer | php
```

Next, run the Composer command to install the latest version:

```bash
php composer.phar require abhi36/aws-cognito
```

## Usage

There are example usage scripts in the `examples/` folder, copy `examples/config.example.php` to `examples/config.php`
before running them.

## Version History

0.2.11 (01/04/2020)

-   Added fresh repo with important changes from [abhi36](https://github.com/abhi36)

0.2.10 (21/10/2019)

-   Added tests - [franjid](https://github.com/franjid)

0.2.9 (17/10/2019)

-   Added method to all administrators to delete a user - [bjoernHeneka](https://github.com/bjoernHeneka)

0.2.8 (28/01/2019)

-   Added method to get user groups - [abelland](https://github.com/abelland)

0.2.7 (17/08/2018)

-   Added method to get user details - [brettmc](https://github.com/brettmc)

0.2.6 (27/06/2018)

-   Added method to update a user's custom variables - [bjoernHeneka](https://github.com/bjoernHeneka)

0.2.5 (26/06/2018)

-   Added method to add a user to a group - [bjoernHeneka](https://github.com/bjoernHeneka)

0.2.4 (22/04/2018)

-   Bugfix - Cognito::signUp requires string attributes

0.2.3 (27/01/2018)

-   Mapped additional error responses to exceptions

0.2.2 (27/01/2018)

-   Added handling for password reset required responses

0.2.1 (25/01/2018)

-   Added method to return full token payload

0.2.0 (25/01/2018)

-   Replaced spomky-labs/jose library with web-token/jwt-signature
-   Added handling for authentication challenges
-   Removed jwt key set caching code, replaced with getter/setter

0.1.3 (12/11/2017)

-   Returned generated cognito username when registering

0.1.2 (20/05/2017)

-   Added method to refresh authentication tokens

0.1.1 (30/04/2017)

-   Returned username when verifying access tokens

0.1.0 (28/04/2017)

-   First public release of aws-cognito

## Copyright

abhi36/aws-cognito-php
Copyright (c) 2023 Abhijeet (hello@abhijeetkarmakar.com)
All rights reserved.
