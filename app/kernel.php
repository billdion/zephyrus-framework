<?php

/**
 * !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
 * !!!!! BOOTSTRAP FILE AUTOMATICALLY LOADED                              !!!!!
 * !!!!! Make sure to properly link the framework.                        !!!!!
 * !!!!!                                                                  !!!!!
 * !!!!! SHOULD NOT BE MODIFIED                                           !!!!!
 * !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
 */
define('ROOT_DIR', __DIR__ . '/..');
require ROOT_DIR . '/vendor/autoload.php';

use Zephyrus\Application\Configuration;
use Zephyrus\Application\Bootstrap;

include(Bootstrap::getHelperFunctionsPath());
include((Configuration::getApplicationConfiguration('env') == 'dev') ? 'handlers_dev.php' : 'handlers_prod.php');
Bootstrap::start();

include('security.php');
