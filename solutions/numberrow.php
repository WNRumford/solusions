<?php 
//Функция генерирует последовательность Фиббоначи в массив, без рекурсии.
//Собственно, так можно генерировать разные последовательности. 
	function fibbo (array $a, int $n):array{
		if(empty($a)|| $a[0]==0 && count($a)<2)$a = [0,1];
		$i = 0;
		while ($i < $n){
			$b = $a[count($a)-1];
			$c = $a[count($a)-2];
			$a[] = $b+$c;
			$i ++;
		}
		return $a;
	}