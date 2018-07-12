<?php

//関数

function sayHi($name = "imai"){
	//echo "hi $name!!    ";
	return "hi $name!!    ";
}

sayHi();
sayHi(tom);
sayHi(bob);


$s = sayHi();
var_dump($s);
