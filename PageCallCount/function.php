<?php
/**
 * Created by PhpStorm.
 * User: asus
 * Date: 2018/4/13
 * Time: 11:16
 */
function counter(){
    $file = 'counter.txt';
    if (!file_exists($file)){
        $num = 0;
        $cf = fopen($file, "w");
        fwrite($cf, $num);
        fclose($cf);
    }else{
        $cf = fopen($file, "rw");
        $num = fgets($cf);
        fclose($cf);
    }

    $num ++;
    $cf = fopen($file, "w");
    fwrite($cf, $num);
    fclose($cf);
    return $num;
}