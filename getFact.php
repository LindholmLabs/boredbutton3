<?php
    $f_contents = file("source/facts.txt"); 
    $line = $f_contents[rand(0, count($f_contents) - 1)];
    echo $line;
?>