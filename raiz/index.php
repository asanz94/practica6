<?php

//first phase
ini_set('display_errors','on');
define('DS',DIRECTORY_SEPARATOR);
define('ROOT',realpath(dirname(__FILE__)).DS);
//to acces filesystem
define('APP',ROOT.'app'.DS);
define('APP_W',basename($_SERVER['SCRIPT_NAME']));
// it could be another file
/*echo DS.'</br>';
echo ROOT.'</br>';
echo APP.'</br>';
echo APP_W.'</br>';
echo $_SERVER['REQUEST_URI'];*/
/*spl_autoload_register('raizautoloader::SysLoader');
spl_autoload_register('raizautoloader::AppLoader');
class raizautoloader{


	static function SysLoader($class){
		$filename = strtolower($class).'.php';
		$file = ROOT.'sys/'.$filename;
		if (!file_exists($file)){


			return false;
		}
		include $file;


	}

	static function AppLoader($class){

	}


	class Coder{



	}


}

*/

require 'sys\core.php';
Core::init();
