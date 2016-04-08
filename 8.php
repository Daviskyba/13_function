<?php
$cenzura = ["блять", "сука","хуй", "залупа", "далбаёб"];
$string = "";
if (!empty($_POST)) {
    $string = $_POST["comment"];

    if ($string == "")
        echo "Заполните поля!";
}
$status = 0;
foreach ($cenzura as $item) {
    if (stripos($string, $item)){
        echo "Испрользована ненормативная лексика";
        $status = 1;
    }

}
if (0 == $status) {
    echo($string);
}
include "8.html";