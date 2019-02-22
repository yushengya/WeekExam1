<?php

function PrintMinNumber($arr,$pow=0){
	$t=[];
	for ($i=0; $i <10 ; $i++) { 
		$t[]=[];
	}
	static $return=[];
	$count=count($arr);
	for ($i=0; $i <$count ; $i++) { 
		$str=(string)$arr[$i];
		if (isset($str[$pow])) {
			$t[$str[$pow]][]=$arr[$i];
		}else{
			array_unshift($arr,$arr[$i]);
		}
		for ($j=0; $j <10 ; $j++) { 
			if (count($t[$j])==1) {
				array_unshift($return,array_pop($t[$j]));
			}else if(count($t[$j])>1){
				PrintMinNumber($t[$j],$pow+1);
			}
		}
	}
	return $return;
}
echo "<pre>";
print_r(PrintMinNumber([12,13,22,121,54,36]));
?>