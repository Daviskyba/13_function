<?php
include "3.html";
$wood = "";
$strong = "0";
if (!empty($_POST)){
    $wood = $_POST["string"];
    $strong = $_POST["strong"];
}
echo "Строка была такой: <br>$wood";
$wood = str_replace(",", "" , $wood);
$wood = str_replace(".", "" , $wood);
$wood = str_replace("!", "" , $wood);
$wood = str_replace("?", "" , $wood);
$arrWordOfText = explode(" ", $wood);
for ($i=0; $i < sizeof($arrWordOfText); $i++){
    $a = strlen($arrWordOfText[$i]);
    if ($a > $strong) {
        unset($arrWordOfText[$i]);
    }
}
$wood = implode(" ", $arrWordOfText);
echo "<br> Результат: <br> $wood ";
?>