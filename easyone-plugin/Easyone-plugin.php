<?php

// Define Main plugin file
!defined('SGI_SRLAT_FILE') && define('SGI_SRLAT_FILE', __FILE__);

//Define Basename
!defined('SGI_SRLAT_BASENAME') && define('SGI_SRLAT_BASENAME', plugin_basename(SGI_SRLAT_FILE));

//Define internal path
!defined('SGI_SRLAT_PATH') && define('SGI_SRLAT_PATH', plugin_dir_path( SGI_SRLAT_FILE ));

require_once (SGI_SRLAT_PATH . 'lib/Init.php');//connection with Init.php file and his class

/**
* @package EasyonePlugin
*/
/*
Plugin Name: Easyone Plugin
Description: This is my first Plugin
Author: Vasilije Tomovic
*/

$init = new Init();//creating an init class object

