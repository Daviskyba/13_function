<?php
$string = 'яблоко черешня вишня вишня черешня груша яблоко черешня вишня яблоко вишня вишня черешня груша яблоко черешня черешня вишня яблоко вишня вишня черешня вишня черешня груша яблоко черешня черешня вишня яблоко вишня вишня черешня черешня груша яблоко черешня вишня';
function strong ($string)
{
    $arrayString = explode(" ", $string);
    $arrayFruits = [];
    $arrayNumberFruits = [];
    foreach ($arrayString as $key => $item) {
        if (in_array($item, $arrayFruits) != true){
            array_push($arrayFruits, $item);
        }
    }
    for ($i=0; $i < count($arrayFruits); $i++){
        $number = 0;
        for ($j=0; $j<count($arrayString); $j++){
            if ($arrayFruits[$i] == $arrayString[$j]){
                $number++;
            }
        }
        array_push($arrayNumberFruits, $number)  ;
    }
    $arraypoint = array_combine($arrayFruits, $arrayNumberFruits);
    arsort($arraypoint);
    foreach ($arraypoint as $key => $item) {
        echo "$key  - $item  <br>";
    }
    return 0;
}
strong($string);
?>