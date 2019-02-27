<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/2/27
 * Time: 10:23
 */
function add($num1, $num2){
    $sum=0;
    while($num2){
        $sum=$num1^$num2;
        $sum=$sum>>1;
        $num1=$sum;
    }
    return $sum;
}
echo add(3,7);