<?php 
/*
*
* @param $define = HOLIDAY;
*
*/
$HOLIDAY = '';
/*
*
* @param $timezone
*
*/
$timezone_now = date_default_timezone_set("Asia/Manila");
$get_timezone_now = date_default_timezone_get();
/*
*
* @param $today
*
*/
$TODAY = date("m/d/y", time());
/*
*
* @param $current_year/$date
*
*/
$current_year = date("y", time());
/*
*
* @param $DEFINE_FUNCTIONS
*
*/

define('CHRISTMAS', '12/25/'.$current_year);
define('MOTHERS_DAY', '05/12/'.$current_year);
define('FATHERS_DAY', '06/16/'.$current_year);
define('BIRTHDAY', '09/20/'.$current_year);
define('NEW_YEAR', '01/01/'.$current_year);
define('CHINESE_NEW_YEAR', '02/05/'.$current_year);
define('PEOPLE_POWER', '02/25/'.$current_year);
define('ARAW_NG_KAGITINGAN', '04/09/'.$current_year);
define('LABOR_DAY', '05/01/'.$current_year);
define('EIDUL_FITAR', '06/06/'.$current_year);
define('INDEPENDENCE_DAY', '06/12/'.$current_year);
define('EID_AL_ADHA', '08/12/'.$current_year);
define('NINOY_AQUINO_DAY', '08/21/'.$current_year);
define('NATIONAL_HEROES_DAY', '08/26/'.$current_year);
define('ALL_SAINTS_DAY', '11/01/'.$current_year);
define('BONIFACIO_DAY', '11/30/'.$current_year);
define('RIZAL_DAY', '12/30/'.$current_year);


if($TODAY == MOTHERS_DAY){
  $MOTHERS_DAY = "
      <center>
            <img src='./demo/b14.png' >
            <p>Today is <b>Mother's Day</b>! Greet your great Mom!</p>
          </center>";
  $HOLIDAY = $MOTHERS_DAY;          
} elseif($TODAY == BIRTHDAY){
  $BIRTHDAY = "
      <center>
            <img src='./demo/b9.png' >
            <p>Today is <a href='https://www.facebook.com/isaacdarcilla'>Isaac</a>'s birthday! Help him celebrate.</p>
          </center>";
    $HOLIDAY = $BIRTHDAY;
} elseif ($TODAY == NEW_YEAR) {
  $NEW_YEAR = "
      <center>
            <img src='./demo/b15.png' >
            <p>Happy New Year!</p>
          </center>"; 
    $HOLIDAY = $NEW_YEAR;      
} elseif ($TODAY == CHINESE_NEW_YEAR) {
  $CHINESE_NEW_YEAR = "
      <center>
            <img src='./demo/b11.png' >
            <p>Kung Hei Fat Choi!</p>
          </center>"; 
    $HOLIDAY = $CHINESE_NEW_YEAR;      
}    
elseif ($TODAY == PEOPLE_POWER) {
  $PEOPLE_POWER = "
      <center>
            <img src='./demo/b16.png' >
            <p>Today is the People Power Anniversary!</p>
          </center>"; 
    $HOLIDAY = $PEOPLE_POWER;      
} elseif ($TODAY == ARAW_NG_KAGITINGAN) {
  $ARAW_NG_KAGITINGAN = "
      <center>
            <img src='./demo/b17.png' >
            <p>Makiisa sa Araw ng Kagitingan!</p>
          </center>"; 
    $HOLIDAY = $ARAW_NG_KAGITINGAN;      
} elseif ($TODAY == LABOR_DAY) {
  $LABOR_DAY = "
      <center>
            <img src='./demo/b13.png' >
            <p>It's Labor Day! Celebrate your day!</p>
          </center>"; 
    $HOLIDAY = $LABOR_DAY;      
} elseif ($TODAY == EIDUL_FITAR) {
  $EIDUL_FITAR = "
      <center>
            <img src='./demo/b19.png' >
            <p>Today is Eidul Fitar! </p>
          </center>"; 
    $HOLIDAY = $EIDUL_FITAR;      
} elseif ($TODAY == INDEPENDENCE_DAY) {
  $INDEPENDENCE_DAY = "
      <center>
            <img src='./demo/b18.png' >
            <p>Celebrate Philippine Independence Day!</p>
          </center>"; 
    $HOLIDAY = $INDEPENDENCE_DAY;      
} elseif ($TODAY == EID_AL_ADHA) {
  $EID_AL_ADHA = "
      <center>
            <img src='./demo/b20.png' >
            <p>Today is Eid al-Adha or the Feast of Sacrifice!</p>
          </center>"; 
    $HOLIDAY = $EID_AL_ADHA;      
} elseif ($TODAY == NINOY_AQUINO_DAY) {
  $NINOY_AQUINO_DAY = "
      <center>
            <img src='./demo/b21.png' >
            <p>Today is Ninoy Aquino Day!</p>
          </center>"; 
    $HOLIDAY = $NINOY_AQUINO_DAY;      
} elseif ($TODAY == NATIONAL_HEROES_DAY) {
  $NATIONAL_HEROES_DAY = "
      <center>
            <img src='./demo/b22.png' >
            <p>It's National Heroes Day!</p>
          </center>"; 
    $HOLIDAY = $NATIONAL_HEROES_DAY;      
} elseif ($TODAY == ALL_SAINTS_DAY) {
  $ALL_SAINTS_DAY = "
      <center>
            <img src='./demo/b24.png' >
            <p>It's All Saint's Day!</p>
          </center>"; 
    $HOLIDAY = $ALL_SAINTS_DAY;      
} elseif ($TODAY == BONIFACIO_DAY) {
  $BONIFACIO_DAY = "
      <center>
            <img src='./demo/b23.png' >
            <p>Today is Bonifacio Day!</p>
          </center>"; 
    $HOLIDAY = $BONIFACIO_DAY;      
} elseif ($TODAY == RIZAL_DAY) {
  $RIZAL_DAY = "
      <center>
            <img src='./demo/b25.png' >
            <p>Today is Rizal Day!</p>
          </center>"; 
    $HOLIDAY = $RIZAL_DAY;      
} elseif ($TODAY == FATHERS_DAY) {
  $FATHERS_DAY = "
      <center>
            <img src='./demo/b26.png' >
            <p>Today is <b>Father's Day</b>! Greet your great Dad!</p>
          </center>"; 
    $HOLIDAY = $FATHERS_DAY;      
} elseif ($TODAY == CHRISTMAS) {
  $CHRISTMAS = "
      <center>
            <img src='./demo/b10.png' >
            <p>Merry Christmas!</p>
          </center>"; 
    $HOLIDAY = $CHRISTMAS;      
} else { $HOLIDAY = ''; } 

?>