<?php
/*
  Plugin Name: sfa Ajaxer
  Plugin URI: 
  Description: Ajax Wihtout Page Refresh.
  Version: 0.01
  Author: Syed Faiz ALi
  Author URI: 
 */
include_once(dirname(__FILE__).'/sfa_functions.php');
if(!class_exists('sfaAjax')){
    include_once(dirname(__FILE__).'/class-sfaajx.php');
}



$sfaajx = new sfaAjax();

$sfaajx->is_preview = false;