<?php

//if条件分岐
//比較演算子 > < >= <= ==(値が等しいか) ===(型まで等しいか) != !==
//論理演算子 and && ,or ||, !

$score = 85;

if($score > 80){
	echo "great!";
}
elseif($score > 60){
	echo "good!";
}
else{
	echo "so so ...";
}
