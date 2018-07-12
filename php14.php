<?php

//クラス

class User{
	//プロパティ
		public $name;
	//コンストラクタ(メソッドの一部) 
		public function __construct($name){
			$this->name =$name;
		}
	//メソッド
		public function sayHi(){
			echo ("Hi , $this->name さん!");
		}
}

$tom = new User("Tom");
$bob = new User("Bob");

echo $tom->name;
$bob->sayHi();

