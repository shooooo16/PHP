<?php

//switch 条件分岐

$signal = "green";

switch($signal){
	case "red":
		echo "stop!";
		break;
	case "yellow":
		echo "caution!";
		break;
	case "blue":
	case "green":
		echo "go!";
		break;
	default:
		echo "wrong signal!";
}
