<?php

class Validator{

    public static function validateFullName($input){
        //$reg = '(?=^.{0,40}$)^[a-zA-Z-]+\s[a-zA-Z-]+$';
        $reg = "/^([a-zA-Z' ]+)$/";
        //$reg = "/^[a-zA-Z/'/-\040]+$/";
        return preg_match($reg,$input) ? true : false;
    }

     public static function validateEmail($input){
        $reg = "/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix";
        return preg_match($reg,$input) ? true : false;
    }

}

?>