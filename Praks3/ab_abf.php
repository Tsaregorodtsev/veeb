<?php
/**
 * Created by PhpStorm.
 * User: v.tsaregorodtsev
 * Date: 22.02.2018
 * Time: 13:26
 */
require_once 'ab_conf.php';

//on vaja ühendus saada serviraga
function yhendus(){
    $ab_yhendus = mysqli_connect(AB_HOST,AB_USER,AB_PASS,AB_NIMI);
    if($ab_yhendus = false) {
        echo'Probleem andmebaasi ühendamisega <br />';
        echo mysqli_connect_error().'<br />';
        echo mysqli_connect_error().'<br />';
        exit;
        else {
            echo 'Ühendus on loodud<br />';

        }
 return $ab_yhendus;
    }
}