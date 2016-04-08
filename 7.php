<?php
if (!empty($_POST)) {
    $string = $_POST["comment"];

    if ($string == "")
        echo "Заполните поля!";
}
echo ($string);
include "7.html";