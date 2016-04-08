<?php
$line = "";
 if (!empty($_POST)){
     $line = $_POST["string1"];
 }
include "2.html";
$line = str_replace(",", "" , $line);
$line = str_replace(".", "" , $line);
$line = str_replace("!", "" , $line);
$line = str_replace("?", "" , $line);

function largestWord($line) {
    $arrWordsOfLine = explode(" ", $line);
    $arrWordsTop = [];

    for ($i=0; $i<sizeof($arrWordsOfLine)-2; $i++){
        for ($j=$i; $j<sizeof($arrWordsOfLine)-1; $j++){
            if (strlen($arrWordsOfLine[$i]) < strlen($arrWordsOfLine[$j])){
                $buffer = $arrWordsOfLine[$i];
                $arrWordsOfLine[$i] = $arrWordsOfLine[$j];
                $arrWordsOfLine[$j] = $buffer;
            }
        }

    }
    if (!empty($_POST)) {
        $arrWordsTop[] = $arrWordsOfLine[0];
        $arrWordsTop[] = $arrWordsOfLine[1];
        $arrWordsTop[] = $arrWordsOfLine[2];
    }

    return $arrWordsTop;


}
$result = largestWord($line);

foreach ($result as $item) {
    echo "$item <br>";
}