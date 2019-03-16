<?php 

define("DB_SERVER", "localhost");
define("DB_USER", "root");

if(PHP_OS == 'WINNT'){
    define("DB_PASS", "");
}else{
    define("DB_PASS", "LinuxMate2019:D");

}
define("DB_NAME", "edisoft");

//echo PHP_OS;
?>