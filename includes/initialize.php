<?php 
require_once("functions.php");// load functions 

define("INCLUDES_PATH", dirname(__FILE__));// path of include
define("PROJECT_PATH", dirname(INCLUDES_PATH));// our project path


$public_end = strpos($_SERVER['SCRIPT_NAME'], '/edisoft') + 8;// find folder EDISOFT

$doc_root = substr($_SERVER['SCRIPT_NAME'], 0, $public_end); // cut the part 

define("WWW_ROOT", $doc_root);// racine du l'application

?>