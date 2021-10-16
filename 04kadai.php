<?php
function nibai($max) {
   $result = $max / 2;
   
return $result;
}

echo nibai(100);



function add($a, $b){
 $result = $a + $b;
 
 return $result;
 }
 
 echo add(2, 3);





$arr = array(1, 3, 5, 7, 9);

function arrkakeru($arr)
{
    $result = 1;
    foreach ($arr as $value) {
        $result *= $value;
    }
    echo ($result);
}
arrkakeru($arr);



function max_array($arr)
{
    // とりあえず配列の最初の要素を一番大きい値とする
    $max_number = $arr[0];
    foreach($arr as $a){
        if ($max_number >= $a) {
            return $max_number;
        }
    }
    
    
}
echo max_array($arr);


 
?>