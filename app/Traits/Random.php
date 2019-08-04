<?php

namespace App\Traits;

class Random{

	private static $string = '0123456789abcdefghijklmnopqrstuvwxyzABDEFGHIJKLMNOPQRSTUVWXYZ';
	private $default_length = 16;//config('entranx.default_string_length');

	
	public static function makeRandom($length = 16){
		if(!$length)
			$length == config('entranx.default_string_length');
		$charLen = 0;
		$random = '';
		while($charLen < $length){
			$random = $random . self::$string[rand(0, strlen(self::$string) - 1)];
			$charLen++;
		}

		return $random;
	}
}