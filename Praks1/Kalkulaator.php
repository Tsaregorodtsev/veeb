<?php
/**
 * Created by PhpStorm.
 * User: v.tsaregorodtsev
 * Date: 30.01.2018
 * Time: 11:28
 */
$söögiHind = 2.55; //ahjuliha
$soodustusProtsent = 0.15; //soodus %
$opilaseToetus = 1.80;// euro
//arvutused
if($söögiHind > 0 and $soodustusProtsent > 0 and $opilaseToetus > 0); {
    $soodushind = $söögiHind * ((100 - $soodustusProtsent) /100);
    $hindopilasele = $söögiHind =$opilaseToetus;
    echo 'soogi hind opilasele = '.$hindopilasele.'<br />';
}