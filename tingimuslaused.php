<?php
/**
 * Created by PhpStorm.
 * User: airo.hass
 * Date: 13.12.2017
 * Time: 8:44
 */
//$ilm = "sajab";
//if($ilm=="sajab") {
//    echo "Väljas sajab, tuju on halb.";
//}
//else {
//    $ilm ="hea";
//    echo "Väljas on ilus ilm, tuju on '.$ilm '!";
//}
//
$vanus= rand(0,100);
if ($vanus>=0 and $vanus<11) {
    $staatus="laps";

}
elseif ( $vanus>10 and $vanus<18) {
    $staatus = "nooruk";
}
elseif($vanus>17 and $vanus<65){
    $staatus="täiskasvanu";
}
else {
    $staatus="seenior";
}
echo 'Oled ' .$vanus. ' aastat vana.<br/>';
echo 'Oled ' .$staatus. '<br/>';

?>