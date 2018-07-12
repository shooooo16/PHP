<?php

//定数: 変更されない値につけるラベル
//一度定数の値を設定すると変更できない

define("MY_EMAIL","taguchi@dotinstall.com");  //定数名は慣習的に大文字

echo MY_EMAIL;

//デフォルトで用意されている定数
var_dump(__LINE__); //このプログラムが処理された時の行数
var_dump(__FILE__); //実行されているファイル名
var_dump(__DIR__); //実行されているファイルの所属するフォルダ名
