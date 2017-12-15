<?php
/**
 * Created by PhpStorm.
 * User: airo.hass
 * Date: 13.12.2017
 * Time: 8:44
 */
//header('Refresh:2');
//
//
//$ilm = "hea";
//if($ilm=="sajab") {
//    echo "Väljas sajab, tuju on halb.";
//}
//else {
//    $ilm ="hea";
//    echo 'Väljas on ilus ilm, tuju on ' .$ilm.' ';
//}
//
//$tuju=($ilm=='sajab')? 'halb' : 'hea';
//echo 'Väljas '.$ilm.'<br/>';
//
////$vanus= rand(0,100);
////if ($vanus>=0 and $vanus<11) {
////    $staatus="laps";
////
////}
////elseif ( $vanus>10 and $vanus<18) {
////    $staatus = "nooruk";
////}
////elseif($vanus>17 and $vanus<65){
////    $staatus="täiskasvanu";
////}
////else {
////    $staatus="seenior";
////}
////echo 'Oled ' .$vanus. ' aastat vana.<br/>';
////echo 'Oled ' .$staatus. '<br/>';
//echo $number;
$number =rand(1,10);
echo $number;
echo '<br/>';
switch ($number) {
    case 1: echo "üks";
    break;
    case 2 :echo "kaks";
    break;
    case 3: echo "kolm";
    break;
    case 4: echo "neli";
    break;
    case 5: echo "viis";
    break;
    default: echo "antud numbrit ei tea";
}

?>