<?php

//Функция для дебага
function show($a, $flag){
	if($flag == 'vd'){
		echo '<pre>';
		var_dump($a);
		echo '</pre><hr>';
	}else{
		echo '<pre>';
		print_r($a);
		echo '</pre><hr>';
	}
}	
//-----------------------------------------------------
	function repeatStr($n, $str){
		$s = '';
		$i = 1;
		while($i <= $n){
			$s = $s.$str;
			$i++;
		}
		return $s;
	}
	//easier
	function repeatString($n, $str){
		return str_repeat($str, $n);
	}
	//-----------------------------------------
	function invert($arr){
		#my code...
	}
	//-----------------------------------------------

	function basicOp($op, $v1, $v2){
		$res = null;
		if($op == '+'){
			$res = $v1 + $v2;
		}elseif($op == '-'){
			$res = $v1 - $v2;
		}elseif($op == '*'){
			$res = $v1*$v2;
		}elseif($op == '/'){
			$res = $v1/$v2;
		}
		return $res;
	}
	//---------------------------------------

	function no_space($str){
		  return str_replace(' ', '', $str);
	}