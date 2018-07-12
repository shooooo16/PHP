<?php

// ループ処理
// for
// break:ループを抜ける
// continue: それ以降の処理をせずに次のループに移る


for($i = 0; $i < 10; $i++){
	if($i === 5){
		break;
	}
	echo $i;
}

for($i = 0; $i < 10; $i++){
	if($i === 5){
		continue;
	}
	echo $i;
}