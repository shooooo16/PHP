<?php

//関数
//デフォルトで存在している関数

$x = 5.6;

echo ceil($x);  //小数点以下を切り上げる 6
echo floor($x); //小数点以下を切り下げる 5
echo round($x); //四捨五入 6
echo rand(1,10);  //乱数を生成する

$s1 ="hello";
$s2 ="ねこ";

echo strlen($s1); //5
echo mb_strlen($s2); //2 日本語はmb_strlenで文字数をカウントしてあげる

printf("%s - %s - %.3f",$s1,$s2,$x); //%sは文字列%fは浮動小数点、この場合小数点3までを表示

$colors = ["yellow","red","blue",];
echo count($colors);
echo implode("@",$colors);
