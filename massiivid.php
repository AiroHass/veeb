<?php
/**
 * Created by PhpStorm.
 * User: airo.hass
 * Date: 19.12.2017
 * Time: 8:44
 */
$arvud=array(5, 4, 3, 2, 1);
var_dump($arvud);
echo "<hr/>";
echo "<pre>";
print_r($arvud);
echo "</pre>";
echo "<hr/>";
$elementideArv= count($arvud);
echo "Meie massiiv $arvud koosneb $elementideArv elemendist.";
echo "<br/>";
for($i=0; $i<$elementideArv; $i++) {
    echo $arvud[$i]."<br/>";
}