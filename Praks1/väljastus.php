<?php
/**
 * Created by PhpStorm.
 * User: v.tsaregorodtsev
 * Date: 30.01.2018
 * Time: 10:24
 */
//üherealine komentaar
/**mitmerealine
 *komentaar
 *
 * */
//väljastmine
echo 'Aine  - veebiprogrammeerimine','<br />'; //käsulõpp
print 'valikaine<br />';
// muutujate defineerimine
$eesnimi = 'Vladislav'; //eesnimi, string
$perenimi = 'Tsaregorodtsev'; //perenimi,string
$bussiNumber = 4; //täisarv,integer
$soidukestvus =0.8; //sõidu kestvus, float
// konstandite defineerimine
define('number_PI', 3.14);
//Kasutades eel defineeritud muutujad ja konstandid
echo 'olen '.$eesnimi.' '.$perenimi.' '.'<br />';
echo 'soidan koolist kesklinna bussiga number' .$bussiNumber .'<br />';
echo 'jouan kesklinnas'.$soidukestvus.'tunniga'.'<br />';
echo 'midagi konstantne PI'.number_PI.'<br />';
//tingimuslaused
$ilmväljas ='sajab lund';
if($ilmväljas =='sajab lund'){
    echo 'tuleb minna saunas<br />';

} else {
        echo 'Pole mõtet sauna minna<br />';
    }

// ? operator  = ternany operator
echo ($ilmväljas == 'sajab lund') ? tuleb minna saunas