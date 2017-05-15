<?php

//Функция для дебага
function show($a, $flag = null){
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
	function invert(array $a){
				$b = [];
				foreach ($a as $v => $k){
					$b[] = $k*(-1);
				}
				return $b;
			}
	//and else some another solusions:

	//function invert(array $a): array {
	//   $res = [];
	//   foreach ($a as $n) {
	//     $res[] = - $n;
	//   }
	//   return $res;
	// }

	//function invert(array $a): array {
	//foreach($a as $key=>&$val)
	//$val = $val*(-1);
	//return $a;
	//}

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