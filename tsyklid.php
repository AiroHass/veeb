<?php
/**
 * Created by PhpStorm.
 * User: airo.hass
 * Date: 15.12.2017
 * Time: 10:29
 */
$varv="";
for ($arv=1; $arv<=10; $arv++) {

    if ($arv % 2 == 0) {

        $varv = 'red';
    } else {

        $varv = "blue";
    }
    echo '<p style="color:' . $varv . ';">' . $arv . '</p>';

}
$kord=1;
while ($kord<=5){
    echo '<i>'.$kord++.'</i>';
}