<?php
/**
 * Created by PhpStorm.
 * User: v.tsaregorodtsev
 * Date: 22.02.2018
 * Time: 13:01
 */
echo '<pre>';
print_r($_POST);
echo '</pre>';
// kui on soov kasutada muutujate samade nimedega nagu formi
//nagu formi elimentide nimetused, siis tuleb kasutada
//siis kasuta
extract($_POST);
echo $eesnimi.'<br />';
echo $perenimi.'<br />';
echo $aasta.'<br />';
echo $paev.'<br />';
//ehitame ajavaartus Date
$aeg = $aasta.'='.$kuu.'='$paev
