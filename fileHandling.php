<?php
$orgFile = fopen('better-quotes.txt', 'r') or die('Unable to open file!');
$quote = '';

while (!feof($orgFile)) {
    $char = fgetc($orgFile);

    if ($char == ';') {
        echo $quote . ";<br>";
        $quote = '';
    } else {
        $quote .= $char;
    }
}

fclose($orgFile);
?>
