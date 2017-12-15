<?php
/**
 * Created by PhpStorm.
 * User: airo.hass
 * Date: 15.12.2017
 * Time: 11:09
 */
header("Refresh:0.2");
for($rida=1;$rida<=5;$rida++) {
$varv="#";
for($kord=1; $kord<=6;$kord++){

    $juhus= rand(0,15);
    $juhuHEX=dechex($juhus);
    $varv= $varv.$juhuHEX;

}
    echo '<font color ="'.$varv.'">Värviline tekst<br/>';
}