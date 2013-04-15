<?php

include(path('bundle')."laravel-payex/payex/payex.php");
if(file_exists(path('app')."/config/payex.php")){
	PayEx::setConfigFile(path('app')."/config/payex.php");
} else {
	PayEx::setConfigFile(path('bundles')."laravel-payex/config/payex.php");
}

?>