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

	//Камень ножницы бумага
	// function rpc ($p1, $p2) {
 //    if ($p1 == $p2)  return 'Draw!';
    
 //    $rsp = ["rock","scissors","paper"]; 
 //    $p1k = array_search($p1,$rsp);
 //    $p2k = array_search($p2,$rsp);
      
 //    if($p2k == (count($rsp)-1) && $p1k == 0) return 'Player 2 won!';
 //    if($p1k == (count($rsp)-1) && $p2k == 0) return 'Player 1 won!';
    
 //    if($p1k < $p2k) return 'Player 1 won!';
 //    return "Player 2 won!";
	// }

function rpc ($p1, $p2) {
	if($p1 == 'scissors'){
		if($p2 == 'paper') return 'Player 1 won!';
		if($p2 == 'rock') return 'Player 2 won!';
		if($p2 == 'scissors') return 'Draw!';  
	}elseif($p1 == 'rock'){
		if($p2 == "paper") return 'Player 2 won!';
		if($p2 == "scissors") return 'Player 1 won!';
		if($p2 == 'rock') return 'Draw!';   
	}elseif($p1 == "paper"){
		if($p2 == "rock") return "Player 1 won!";
		if($p2 == "scissors") return "Player 2 won!";
		if($p2 == 'paper') return 'Draw!';
	}
}

//keep Hidrated!
function litres($t){
				return floor($t*0.5);
			}

//Sum Mixed Array
/*Given an array of integers as strings and numbers, 
 *return the sum of the array values as if all were numbers.*/
function sum_mix(array $a){
	foreach($a as $k){
		if(is_string($k)){
			
		} 
	}
}


//To square(root) or not to square(root)
function sqrpow(array $a){
	$b = [];
	foreach($a as $k){
		$sqr = sqrt($k);
		if(intval($sqr) == $sqr){
			$b[] = $sqr;
		}else{
			$b[] = $k**2;
		}
	}
	return $b;
}
