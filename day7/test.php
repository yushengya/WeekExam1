<?php

function GetUglyNumber_Solution($index){
	if ($index==0) {
		return false;
	}
	if ($index==1) {
		return 1;
	}
	//$arr=[];
	while ($index=1) {
		if ($index/2) {
			$n=$index/2;
		}
		if ($index/3) {
			$n=$index/3;
		}
		if ($index/5) {
			$n=$index/5;
		}
		if ($index%2&&$index%3&&$index%5) {
			return $index;
		}
	}
}
echo GetUglyNumber_Solution(3);
?>