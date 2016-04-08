<?php
echo "<p>Задание №-11</p>";
$strong = "";
if (!empty($_POST)) {
    $strong = $_POST["string"];

    if ($strong == "")
        echo "Заполните поля!";
}
$strong2 = htmlspecialchars($strong);
$strong2 = ucfirst($strong2);
$strong2 = preg_replace_callback('/\.\s\w/',
    create_function('$matches', 'return strtoupper($matches[0]);'), $strong2);
echo strrev($strong2);
include "11.html";
?>