<?php
if (!empty($_FILES)) {
    @mkdir("gallery", 0777);
    @copy($_FILES['photo']['tmp_name'], "gallery/" . basename($_FILES['photo']['name']));
}
include "6.html";
$wood = "./gallery";
chdir($wood);
function listFilesDirectory ($wood){
    $files = scandir(getcwd());
    unset($files[0]);
    unset($files[1]);
    foreach ($files as $key => $name) {
        if (is_dir($name)){
            unset($files[$key]);
        }
        if (@getimagesize($name)){}
        else {
            unset($files[$key]);
        }
    }
    sort($files);
    return $files;
}
$photoList = listFilesDirectory($wood);
echo "<table border='2px'>";
foreach ($photoList as $item) {

    echo "<tr> <td>";
    echo "<img src='gallery/$item'> ";
    echo "</td></tr>";
}
echo "</table>";
?>