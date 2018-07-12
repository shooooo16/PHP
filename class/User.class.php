<?php

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

$test = "test";