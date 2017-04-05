<?php
/**
 * Created by PhpStorm.
 * User: masatoshi_yamaguchi
 * Date: 2017/04/03
 * Time: 14:53
 */
require_once ("../require.php");
require_once (CLASS_EX_REALDIR . "page_extends/sample/LC_Page_Sample_Ex.php");

$objPage = new LC_Page_Sample_Ex();
register_shutdown_function(array($objPage,"destroy"));
$objPage->init();
$objPage->process();

?>