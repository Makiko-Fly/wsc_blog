<?php
//
// error_reporting(E_ALL);
//
// use Phalcon\Mvc\Application;
// use Phalcon\Config\Adapter\Ini as ConfigIni;
//
// try {
//     define('APP_PATH', realpath('..') . '/');
//
//     /**
//      * Read the configuration
//      */
//     $config = new ConfigIni(APP_PATH . 'app/config/config.ini');
//     if (is_readable(APP_PATH . 'app/config/config.ini.dev')) {
//         $override = new ConfigIni(APP_PATH . 'app/config/config.ini.dev');
//         $config->merge($override);
//     }
//
//     /**
//      * Auto-loader configuration
//      */
//     require APP_PATH . 'app/config/loader.php';
//
//     /**
//      * Load application services
//      */
//     require APP_PATH . 'app/config/services.php';
//
//     $application = new Application($di);
//
//     echo $application->handle()->getContent();
// } catch (Exception $e){
//     echo $e->getMessage() . '<br>';
//     echo '<pre>' . $e->getTraceAsString() . '</pre>';
// }

require __DIR__ . '/../init_autoloader.php';

use Eva\EvaEngine\Engine;

// TODO...Temp method for printing debug log, remove me in the future
function mdl_echo($str)
{
	$handle = fopen("../tmp/debug.log", 'a');
	if (!$handle) {
		echo ("============== Custom log not created ===============");
	}
	fwrite($handle, "MDL====> " . $str . "\n");
	fclose($handle);
}


$engine = new Engine(__DIR__ . '/..', 'wsc_blog');

$engine
    ->loadModules(include __DIR__ . '/../config/modules.' . $engine->getAppName() . '.php')
    ->bootstrap()
    ->run();
