<?php
$strong ="";
if (!empty($_POST)) {
    $strong = $_POST["string"];

    if ($strong == "")
        echo "Заполните поля!";
}
$str = str_split($strong, 1);
$size = count($str)-1;
$result = "";
While ($size >= 0)
{
    $result = $result . $str[$size];
    $size--;
}
echo $result;
include "9.html";
?>

