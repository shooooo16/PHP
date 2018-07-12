<?php

// 配列
//foreach

$sales = [
	"taguchi" => 200,
	"imai" => 300,
	"rin" =>400,
];

foreach($sales as $key =>$value){
	echo "($key) $value";
}

$colors = ["blue","red","green",];
foreach($colors as $value){
	echo "$value ";
}

//foreach if while for コロン
foreach($colors as $value):
	echo "$value ";
endforeach;
?>

<ul>
	<?php foreach ($colors as $value): ?>
	<li><?php echo "$value "; ?></li>
	<?php endforeach; ?>
</ul>
