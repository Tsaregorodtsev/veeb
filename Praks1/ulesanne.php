<?php
/**
 * Created by PhpStorm.
 * User: v.tsaregorodtsev
 * Date: 14.02.2018
 * Time: 12:20
 */
//import functions from others files
require_once 'functions.php';
//call html file
loeVormFailist('vorm.html');
//create a dictionary
$menu = array(
    array(
        'nimetus' => 'snitsel',
        'kirjeldus' => 'šnitsel sealihast, lisand, kaste, salat, leib',
        'hind' => '2.68€'
    ),
    array(
        'nimetus' => 'seapraad',
        'kirjeldus' => 'seapraad, lisand, kaste, salat, leib',
        'hind' => '2.65€'
    ),
    array(
        'nimetus' => 'Hakklihapallid tomatikastmes',
        'kirjeldus' => 'hakklihapall 2 tk, lisand, kaste, salat, leib',
        'hind' => '2.30€'
    ),
    array(
        'nimetus' => 'Hakklihapallid tomatikastmes 1/2',
        'kirjeldus' => 'hakklihapall 1 tk, lisand, kaste, salat, leib',
        'hind' => '1.30€'
    ),
);
//made foreach loop
foreach ($menu as $praed) {
    echo '<ul>';
    printf('<br><b>Praed:</b> %s <b>Kirjeldus:</b> %s <b>Hind:</b> %s',
        $praed['nimetus'],$praed['kirjeldus'],$praed['hind']
    );
    echo'</ul>';
};
?>