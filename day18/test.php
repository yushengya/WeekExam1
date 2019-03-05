<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/3/5
 * Time: 10:22
 */
function suan($n){
    $arr=[];
    while($n>1){
        $s=$n%2;
        $n=$n/2;
        $arr[]=$s;
    }
    $a=0;
    for ($i=0;$i<count($arr);$i++){
        if ($arr[$i]==1){
            $a++;
        }
    }
    return $a;
}
echo suan(15);