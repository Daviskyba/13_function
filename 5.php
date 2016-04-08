<?php
$a ='/wood';
$searchWord = "php";
function listFilesDirectory($searchWord){
    $files = scandir(getcwd());
    unset($files[0]);
    unset($files[1]);
    foreach ($files as $key => $val) {
        if (is_dir($val)){
            unset($files[$key]);
        }
    }
    sort($files);
    foreach ($files as $key => $val) {
        if (!strrpos($val, $searchWord)){
            unset($files[$key]);
        }
    }
    sort($files);
    return $files;
}
$files = listFilesDirectory($searchWord);
echo "Список файлов в вашей папке с именем php:";
foreach ($files as $val) {
    echo "<br> $val";
}
?>