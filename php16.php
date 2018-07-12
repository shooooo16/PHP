<?php

//外部ファイルの読み込み
//reqire :失敗した場合fatal_errorにより処理を中断
//reqire_once

require "class/User.class.php";

//include :失敗した場合warningを出し処理を続行
//include_once

//autoload
/*spl_autoload_register(function($class){
//	require $class.".class.php";
//});*/

$tom = new User("Tom");
$tom->sayHi();

echo $test;