<?php

$a=array(array("a" => 70 , "b" => 80 , "c" => 90),
         array("a" => 60 , "b" => 40 , "c" => 80),
         array("a" => 50 , "b" => 70 , "c" => 40)
        );

        foreach($a as $v){
            foreach($v as $key => $m){
                if($key == "a"){
                 echo($m)."<br>";
                }
            }
        }


//_________________________________________________
$array=array(10,20,30,40,50,60,70);

$count=count($array);
foreach($array as $sub){
    $a=$a+$sub;
}
$result=$a/$count;
echo $result;


?>