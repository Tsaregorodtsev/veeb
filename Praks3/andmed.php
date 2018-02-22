<?php
/**
 * Created by PhpStorm.
 * User: v.tsaregorodtsev
 * Date: 22.02.2018
 * Time: 13:01
 */
//võtame kasutusele
require_once 'ab_abf.php';
echo '<pre>';
print_r($_POST);
echo '</pre>';
// kui on soov kasutada muutujad samade nimedega
// nagu vormi elementide nimetused
// siis kasuta
extract($_POST);
// kontrollime, mis sai
echo $eesnimi.'<br />';
echo $perenimi.'<br />';
echo $aasta.'<br />';
echo $kuu.'<br />';
echo $paev.'<br />';
// ehitame ajaväärtus DATE formaadi järgi
$aeg = $aasta.'-'.$kuu.'-'.$paev;
echo $aeg.'<br />';
//
$yhendus = $yhendus();