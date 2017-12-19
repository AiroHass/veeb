<?php
/**
 * Created by PhpStorm.
 * User: airo.hass
 * Date: 15.12.2017
 * Time: 11:29
 */
header("Refresh:30");
function varvimine()
{

    $varv = "#";
    for ($kord = 1; $kord <= 6; $kord++) {

        $juhus = rand(0, 15);
        $juhuHEX = dechex($juhus);
        $varv = $varv . $juhuHEX;

    }
    return $varv;

}

function valjastaTabel ($ridadeArv, $veergudeArv) {
    echo '<table border="1">';
    for($reaNumber=1;$reaNumber<=$ridadeArv;$reaNumber++) {
        echo '<tr>';
        for($veerunumber=1; $veerunumber<=$veergudeArv;$veerunumber++) {

            echo '<td style="background-color: '.varvimine().';">';
            echo rand(0,99);
            echo '</td>';
        }
        echo '</tr>';
    }
    echo '</table>';
}
valjastaTabel(5, 7);

$a="See";
$b="on";
$c="üks";
$d="tabel";

function tekstiTabel($sona1, $sona2, $sona3, $son4) {

    echo '<table border="1">';
    for ($reanumber=1; $reanumber<=4;$reanumber++) {
        echo '<tr>';
        echo '<td>';
        echo ${'sona'.$reanumber};
        echo '</td>';
        echo '</tr>';
        echo '</table>';


    }
    echo '</table>';
}

tekstiTabel("See", "on","minu","tabel");