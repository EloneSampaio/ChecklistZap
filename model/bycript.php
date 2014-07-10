<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of bycript
 *
 * @author sam
 */
class bycript {
    //put your code here
    
    protected static $_saltPrefix = '2a';
    protected static $_defaultCost = 8;
    protected static $_saltLength = 22;
 
    
 public static function hash($string, $cost = null) {
		if (empty($cost)) {
			$cost = self::$_defaultCost;
		}   
 // Salt
		$salt = self::generateRandomSalt();   

                $hashString = self::__generateHashString((int)$cost, $salt);
 
		return crypt($string, $hashString);
	}
        
        
        
    public static function check($string, $hash) {
		return (crypt($string, $hash) === $hash);
	}
        
        
        
        
        public static function generateRandomSalt() {
		// Salt seed
		$seed = uniqid(mt_rand(), true);
 
		// Generate salt
		$salt = base64_encode($seed);
		$salt = str_replace('+', '.', $salt);
 
		return substr($salt, 0, self::$_saltLength);
	}
        
        private static function __generateHashString($cost, $salt) {
		return sprintf('$%s$%02d$%s$', self::$_saltPrefix, $cost, $salt);
	}
                
                }


?>