<?php
$strong = "";
if (!empty($_POST)) {
    $strong = $_POST["string"];

    if ($strong == "")
        echo "Заполните поля!";
}
$str = explode(" ",$strong);
$res = array_unique($str);
$result = count($res);
echo $result;
include "10.html";
?>