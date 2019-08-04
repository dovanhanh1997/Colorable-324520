<?php
include_once 'function.php';

foreach (putArray() as $value) {
    echo $value->toString().'<br>';
    if ($value instanceof Square){
        echo $value->howToColor();
    }
    echo '<br><br>';
}

