<?php
$line1 = "";
$line2 = "";
print_r($_POST);
if (!empty($_POST)) {
    $line1 = $_POST["string1"];
    $line2 = $_POST["string2"];

}
$line1 = str_replace(",", "" , $line1);
$line2 = str_replace(",", "" , $line2);
$line1 = str_replace(".", "" , $line1);
$line2 = str_replace(".", "" , $line2);
$line1 = str_replace("!", "" , $line1);
$line2 = str_replace("!", "" , $line2);
$line1 = str_replace("?", "" , $line1);
$line2 = str_replace("?", "" , $line2);
include "index1.html";
function getCommonWords($string1 , $string2){
    $arrOfString1 = [];
    $arrOfString1 = explode(" ", $string1);
    $arrOfString2 = [];
    $arrOfString2 = explode(" ", $string2);
    $arrCommonWords = [];
    foreach ($arrOfString1 as $word1) {
        foreach ($arrOfString2 as $word2) {
            if ($word1 == $word2){
                $arrCommonWords[] = $word1;
                break;
            }
        }

    }


    return $arrCommonWords;
}

$result = getCommonWords($line1, $line2);

echo "<br> Одинаковые слова:";

foreach ($result as $item) {
    echo "<br> $item";

}
?>