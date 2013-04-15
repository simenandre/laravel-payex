# laravel-payex

A simple, go ahead module for [PayEx](http://payex.com/). It's based upon a the [PayEx PHP Class](https://github.com/cobraz/payex). The triggers are the same, it's only difference is that you can install it just like any other Laravel bundles. Easy.

## Configure

To avoid confusion, please note that the [PayEx PHP Class](https://github.com/cobraz/payex) has a configuration file included aswell, you don't need to use that, perferably not. We've added a more Larvel-like configuration inside the bundle directory, so use that.

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
