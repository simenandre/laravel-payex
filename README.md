# laravel-payex

A simple, go ahead module for [PayEx](http://payex.com/). It's based upon a the [PayEx PHP Class](https://github.com/cobraz/payex). The triggers are the same, it's only difference is that you can install it just like any other Laravel bundles. Easy.

## Configure

Copy the configuration file from config/payex.php to application/config/payex.php, and set your
details.

Do you need more information? Go the the [PayEx PHP Class](https://github.com/cobraz/payex) GitHub page.

## Installation
Install using Artisan CLI:

```shell
php artisan bundle:install laravel-payex
```

Add the following line to application/bundles.php

```php
'laravel-payex' => array('auto' => true),
```
