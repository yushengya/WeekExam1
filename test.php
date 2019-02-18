<?php
function shui($n,$m){
	$arr=[];
	for ($i=$n; $i <=$m ; $i++) { 

		$b=floor($n/100);
		$s=floor(($n-100*$b)/10);
		$g=$n%10;
		if ($g*$g*$g+$s*$s*$s+$b*$b*$b==$n) {
			$arr[]=$n;
		}
		$n++;
	}
	return $arr;
}

print_r(shui(100,999));
echo "<br>";

function san($str){
	$len=strlen($str);
	for ($i=1; $i <=$len ; $i++) { 
		$a=substr($str,$i,1);
		$c=substr_count($str,$a,1);
		if ($c==3) {
			return $a;
		}
	}
	
}
echo san("asdgvsas");
echo "<br>";

function hui($str){
	$len=strlen($str);
	if ($len<=1) {
		return false;
	}
	$end=$len-1;
	$start=0;
	$n=floor($len/2);
	for ($i=0; $i <$n ; $i++) {
		$a=substr($str,$start,1); 
		$b=substr($str,$end,1); 
		if ($a==$b) {
			$start++;
			$end--;
		}else{
			echo 0;
			return false;
		}
	}
	echo 1;
	return true;
}
echo hui("111");
echo "<br>";

function fei($n){
	$arr=[];
	for ($i=0; $i <$n ; $i++) { 
		if ($i==1) {
			$arr[]=1;
			//return 1;
		}else if($i==0){
			$arr[]=1;
		}else{
			//echo $arr[$i-1]."<br>";
			$arr[$i]=$arr[$i-1]+$arr[$i-2];
		}
	}
	return $arr;
}
print_r(fei(4));
echo "<br>";

function zi($n){
	$arr=range('a','z');
	$con=count($arr);
	$array=[];
	while($n){
		$tmp=floor($n/$con);
		$rem=$n%$con;
		if ($rem==0) {
			array_unshift($array,$arr[$con-1]);
		}else{
			array_unshift($array,$arr[$rem-1]);
		}
		$n=$tmp;
	}
	return implode('',$array);
}
echo zi(27);
echo "<br>";

function tai($n){
	$arr=[];
	for ($i=0; $i <$n ; $i++) { 
		if ($i==1) {
			$arr[]=1;
			//return 1;
		}else if($i==0){
			$arr[]=1;
		}else{
			$arr[$i]=$arr[$i-1]+$arr[$i-2];
		}
	}
	return $arr;
}
print_r(tai(4));
?>