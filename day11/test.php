<?php

function ReverseSentence($str){
    $arr=explode(" ",$str);
    $count=count($arr);
    $array=[];
    for ($i=0;$i<$count;$i++){
        $array[]=array_pop($arr);
    }
    return implode($array," ");
}
echo ReverseSentence("student. a am I");
?>