<?php
/**
 * Created by PhpStorm.
 * User: airo.hass
 * Date: 13.12.2017
 * Time: 9:32
 */
header('Refresh:2');
$number =rand(1,10);
echo $number;
echo " - ";
switch ($number):
    case 1:echo "Jaanuarikuu";
    break;
    case 2:echo "Vastlakuu";
    break;
    case 3: echo "Märts";
    break;
    case 4: echo "1. aprill!";
    break;
    case 5: echo "Mai";
    break;
    case 6: echo "heinakuu";
    break;
    case 7: echo "Juuli";
    break;
    case 8: echo "August";
    break;
    case 9: echo "Tagasi kooli!";
    break;
    case 10: echo "Ametlikult sügis!";
    break;
    case 11: echo "Hingedekuu";
    break;
    case 12: echo "jõulukuu";
    break;
    default: echo "Kuud ei leitud!";
    break;
    endswitch;