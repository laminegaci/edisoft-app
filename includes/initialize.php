<?php 

define("INCLUDES_PATH", dirname(__FILE__));// path of include
define("PROJECT_PATH", dirname(INCLUDES_PATH));// our project path


$public_end = strpos($_SERVER['SCRIPT_NAME'], '/edisoft') + 8;// find folder EDISOFT

$doc_root = substr($_SERVER['SCRIPT_NAME'], 0, $public_end); // cut the part 

define("WWW_ROOT", $doc_root);// racine du l'application

require_once("functions.php");// load functions 

require_once('credantials.php');

require_once('db_functions.php');

// -> All classes in directory
foreach(glob('classes/*.class.php') as $file) {
    require_once($file);
  }

  // Autoload class definitions
  function my_autoload($class) {
    if(preg_match('/\A\w+\Z/', $class)) {
      include('classes/' . $class . '.class.php');
    }
  }
  spl_autoload_register('my_autoload');


$database = db_connect(); 
Client::set_database($database);
Conception::set_database($database);
Pack::set_database($database);
Hebergement::set_database($database);

?>