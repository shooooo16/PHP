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


class AdminUser extends User{
	public function sayHello(){
		echo "hello from admin!";
	}
	
	//メソッドの継承 親クラスの方でpublicの前にfinalをつけると子クラスは継承できなくなる
	public function sayHi(){
			echo ("[admin] Hi , $this->name さん!");
		}
}


$tom = new User("Tom");
$steave = new AdminUser("steave");

echo $steave->name;
$tom->sayHi();
$steave->sayHi();
$steave->sayHello();

