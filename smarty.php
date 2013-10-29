<?php
// Use the absolute path for Smarty.class.php
$base_path= basename(dirname(__FILE__));
require('Smarty/Smarty.class.php');
$smarty = new Smarty( );
$smarty->template_dir = 'templates';
$smarty->compile_dir = 'templates/compile';
$smarty->cache_dir = 'cache';
$smarty->config_dir = 'config';

$title = "Aukute Inn Hotel";
?>
