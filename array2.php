<?php
$arraynum = array(1, 2, 3, 4, 5, 6);
foreach ($arraynum as &$key) {
    $key=$key*2;
    echo $key . "<br/>";
}
var_dump($arraynum);