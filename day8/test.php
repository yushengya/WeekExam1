<?php
function LastRemaining_Solution($n, $m){
	$arr=[];
	for ($i=0; $i <$n ; $i++) { 
		$arr[]=$i;
	}
	$i=0;
	while ($i<$n) {
		if ($i==$m) {
			unset($arr[$i]);
			//continue;
		}else{
			array_shift($arr);
			$a=$arr[$i];
			array_push($arr,$a);
		}
		$i++;
		if (count($arr)==1) {
			return $arr[$i];
		}

	}
}
echo LastRemaining_Solution(10,5);
?>