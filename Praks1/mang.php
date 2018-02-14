<?php
/**
 * Created by PhpStorm.
 * User: v.tsaregorodtsev
 * Date: 14.02.2018
 * Time: 12:30
 */
require_once 'vormimang.html';
$rand = rand(1,50);

$guess = $_POST('guess');
$submit = $_POST('submit');
if(isset($submit)) {

    if ($guess < 1 || $guess > 50) {
        echo "Number peab olema 1 kuni 50 vahemikus";
    } else {
        if ($guess != $rand) {
            echo "Vale, õige number on " . $rand;
        } else {
            "See on õige";
        }
    }
}


?>