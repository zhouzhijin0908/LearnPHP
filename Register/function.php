<?php
/**
 * Created by PhpStorm.
 * User: asus
 * Date: 2018/4/16
 * Time: 17:51 sql注入验证
 */
function checkIllegalWord(){
    $word = array();
    $word[] = " add";
    $word[] = " count";
    $word[] = " delete";
    $word[] = " drop";

    foreach ($_REQUEST as $strGot){
        $strGot = strtolower($strGot);
        foreach ($word as $w){
            if (strstr($strGot, $w)){
                echo 'para invalid';
                exit();
            }
        }
    }

}

checkIllegalWord();