<?php

//文字列
// ""特殊文字をかける ((バックスラッシュ)n⇒改行、(バックスラッシュ)t⇒タブ)
// ''

$name = "tagushi";
$s1 = "\n$name";
$s2 = '\n$name';
$s3 = "\n{$name}";
$s4 = "\n${name}";

var_dump($s1);
var_dump($s2);
var_dump($s3);
var_dump($s4);
