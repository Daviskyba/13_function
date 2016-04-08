<?php
$wood ='./wood';
function listFilesDirectory ($wood){
    $files = scandir($wood);
    unset($files[0]);
    unset($files[1]);
    foreach ($files as $key => $value) {
        if (is_dir($value)){
            unset($files[$key]);
        }
    }
    sort($files);
    return $files;
}
$files = listFilesDirectory($wood);
echo "Список файлов в папке:";
foreach ($files as $value) {
    echo "<br> $value";
}
?>