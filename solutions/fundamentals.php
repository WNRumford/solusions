<?php

//Функция для дебага
function show($a, $flag = 0){
	if($flag == 1){
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

//Count of positives / sum of negatives
function countPositivesSumNegatives(array $a){
if (empty($a)) return [];

$b = [0, 0];

foreach($a as $v){
	if($v > 0){
		$b[0] += 1; 
	}else{
		$b[1] = $b[1] + $v;
	}
}
	return $b;
}

//You need to write a function that reverses the words in a given string. A word can also fit an empty string. If this is not clear enough, here are some examples:
// reverse("Hello World") === "World Hello"
//I like it! 
function reverse(string $s):string{
	return implode(' ', array_reverse(explode(' ', $s)));
}

//Fake Binary
//my solution (just simple):
function fake_bin($s): string {
	$s = str_split($s);
	$b = [];
	foreach($s as $v){
		if($v <= 4){
			$b[] = 0;
		}else{
			$b[] = 1;
		}
	}
	return implode('', $b);
}

//And one more solution, I like it(with RegExp):
function fake_bin01(string $s): string {
  return preg_replace(['/[1-4]/','/[5-9]/'], [0,1], $s);
}

function how_much_i_love_you(int $nb_petals): string {
  $arr = [
    '1' => 'I love you',
    '2' => 'a little',
    '3' => 'a lot',
    '4' => 'passionately',
    '5' => 'madly',
    '6' => 'not at all'
  ];
  
  while ($nb_petals > 6) {
    $nb_petals = $nb_petals - 6;
  }
  
  return $arr[$nb_petals];
}

//Exclamation marks series #1: Remove a exclamation mark from the end of string
function remove1(string $s): string{
	if(substr($s, -1) == '!'){
		$s = substr_replace($s, '', -1);
		return $s;
		}
	return $s;
	}

//Exclamation marks series #2: Remove all exclamation marks from the end of sentence
function remove2($s){
	while(substr($s, -1) == '!'){
		$s = substr_replace($s, '', -1);
	}
	return $s;
}
// and more simple solution:
function remexcl($s){
	return rtrim($s, '!');
}

//Exclamation marks series #6: Remove all exclamation marks from the end of sentence
function remove3($s, $n){
	$s = explode('!', $s, $n+1);
	$s = implode('', $s);
}

function remove03(string $s, int $n): string {
 return preg_replace('/\!/', '', $s, $n);
}

//мой калькулятор	
function calculator($a, $b, $op){
		$arr = ['+', '-', '*', '/'];
		if(!is_numeric($a) || !is_numeric($b) || !in_array($op, $arr)){
			return 'unknown value';
		}else{
			return eval("return $a $op $b;");
		}
	}


function DNA_strand($dna){
		$dna = str_split($dna);
		$res = [];
		foreach($dna as $k){
			if($k == 'T')$res[] = 'A';
			if($k == 'A')$res[] = 'T';
			if($k == 'C')$res[] = 'G';
			if($k == 'G')$res[] = 'C';
		}
		return implode('', $res);
	}

//--------------------------------------------------
	//Hit Count
/*Task
As a step towards achieving this; you have decided to create a function that will produce a multi-dimensional array out of the hit count value. Each inner dimension of the array represents an individual digit in the hit count, and will include all numbers that come before it, going back to 0.

Rules

The function will take one argument which will be a four character string representing hit count
The function must return a multi-dimensional array containing four inner arrays
The final value in each inner array must be the actual value to be displayed
Values returned in the array must be of the type number
*/
function counter_effect($hc){
		$hc = str_split($hc);
		$res = [];
		$i = 0;
		foreach($hc as $v){
			$res[] = range(0, $v); 
		}
		return $res;
	}	


//GetMiddle
function getMiddle($s){
		$l = mb_strlen($s);
		if($l % 2 != 0){
			return $s[(($l + 1) / 2)-1];
		}else{
			return $s[$l/2-1]. $s[($l/2)];
		}
	}