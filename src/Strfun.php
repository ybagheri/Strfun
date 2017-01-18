<?php namespace Ybagheri;
 
class Strfun {
 
  public function getStringBetween($string, $start, $end){
    $string = ' ' . $string;
    $ini = strpos($string, $start);
    if ($ini == 0) return '';
    $ini += strlen($start);
    $len = strpos($string, $end, $ini) - $ini;
    return substr($string, $ini, $len);
  }

    public function getStringBefore($string, $start){
        if ($start == '') return '';
        $ini = strpos($string, $start);
        if ($ini == 0) return '';
        return substr($string, 0, $ini);
    }

    public function getStringAfter($string, $start){
        if ($start == '') return '';
        $string = ' ' . $string;
        $ini = strpos($string, $start);
        if ($ini == 0) return '';
        $ini += strlen($start);
        return  substr($string, $ini, strlen($string)-strlen($start)-1);
    }
 
}