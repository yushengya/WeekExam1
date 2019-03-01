<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/3/1
 * Time: 10:22
 */
function a($arr){
    $count=count($arr);
    $string=implode($arr);
   // echo $string;
    for ($i=0;$i<=$count;$i++){
        //array_count_values($arr);
        $str=substr($string,$i,1);
      //echo $str;
        $a=substr_count($string,$str,1);
        //echo $a;
        if ($a==1){
            return $i;
        }
    }
    return -1;
}
echo a(['a','s','d','f','s','e','d']);