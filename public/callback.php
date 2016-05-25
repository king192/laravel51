<?php
ini_set('display_errors', 'on');
function dosome($str,$callback){
	echo 'haha<br>';
	call_user_func($callback,$str);
	echo 'good';
}
function ok($param){
	sleep(3);
	echo $param.' world';
}
dosome('hello','ok');