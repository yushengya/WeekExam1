<?php
function suan($arr,$pwo=0){
	static $return=[];
	$t=[];
	for ($tt=0; $tt <10 ; $tt++) { 
		$t[]=[];
	}
	$count=count($arr);
	for ($i=0; $i <$count ; $i++) { 
		$str=(string)$arr[$i];
		if(isset($str[$pwo])){
			$t[$str[$pwo]][]=$arr[$i];
		}else{
			array_unshift($return,$arr[$i]);
		}
		for ($j=0; $j <10 ; $j++) { 
			if (count($t[$j])==1) {
				array_unshift($return,array_pop($t[$j]));	
			}else if (count($t[$j])>1) {
				suan($t[$j],$pwo+1);
			}
		}
	}
	return $return;
}
print_r(suan([108,1012,1011,34,696,91,97,687]));
?>