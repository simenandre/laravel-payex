<?php

include(path('bundle')."laravel-payex/payex/payex.php");
if(file_exists(path('application')."/config/payex.php")){
	PayEx::setConfigFile(path('application')."/config/payex.php");
} else {
	PayEx::setConfigFile(path('bundles')."laravel-payex/config/payex.php");
}

?>