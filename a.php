<?php
$a=["hussein",24,12,52];
$x=count($a);
for($i=0;$i<$x;$i++){
    if($i <($x-1)){
    echo $a[$i]."-";
    }else{
     echo $a[$i];
    }
}
if($u){
    echo "t";
}
// while($a=24){
//     echo 'r';
// }
foreach($a as $b){
    echo $b."-";
    
}

function p(){
    print "Hello";
}

// //لا يرعى خارج الدال الوسطاء 
// p();

// if(function_exists(t())){
//     print("yes");
// }else{
//     print("No");
// }


//global
// $x=["a"=> 50, "b" => 60,"d" => 70,"a"=> 53, "b" => 62,"d" => 73];
// // print_r(array_keys($x));
// // foreach($x as $b){
// //     if($b=max($x) and (array_keys($x[$b])="a")){
// //     print($b);
// //     }
// // }

//     foreach($x as $key => $value){
//         if($key="a" and $value=max($x))
//         {
//             print $key . " ". $value;
//         }
// }
$a=array("a","b","c");
$b=array(60,70,80);
for($i=0;$i<count($a);$i++){
    for($j=0;$j<count($b);$j++){
        if($i==$j){
            echo $a[$j]." :".$b[$j]."<BR>";
        }
    }
}

$g=array("c" => 100,"b" => 100,"d" => 100,"c" => 80,"b" => 70,"d" => 60);
// for($i=0;$i<count($g);$i++){
//     echo $i;
  
// }
foreach($g as $key => $e){
    echo $key.":".$e." ";
}

?>