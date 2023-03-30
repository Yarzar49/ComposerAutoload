<?php

declare(strict_types = 1);
error_reporting(E_ALL);
ini_set("display_errors","1");

define("Path",realpath("."));

require Path."/vendor/autoload.php";

// use Monolog\Level;
// use Monolog\Logger;
// use Monolog\Handler\StreamHandler;

// // create a log channel
// $log = new Logger('Yarzar');
// $log->pushHandler(new StreamHandler('your.log', Level::Warning));

// // add records to the log
// $log->warning('Foo');
// $log->error('Bar');


use yarzar\src\App\Application as YarzarApp;
use yarzar\src\Foo\Application as YarzarFoo;
use yarzar\src\Moo\Application as YarzarMoo;
use yarzar\src\Boo\Application as YarzarBoo;
use yarzar\src\App\Test;

$app = new YarzarApp;
$foo = new YarzarFoo;
$moo = new YarzarMoo;
$boo = new YarzarBoo;
$test = new Test;
dump($app);
dump($foo);
dump($moo);
$viewOne = new ViewOne();
$modelOne = new ModelOne;

?>