<?php

  

/**

 * Write code on Method

 *

 * @return response()

 */

if (!function_exists('getTimeDiff')) {

     function getTimeDiff($starttime,$endtime){

        $t1=strtotime($starttime); 
        $t2=strtotime($endtime); 
        $hours = floor((($t2- $t1)/60)/60);  
        return $hours;
    }

}
?>