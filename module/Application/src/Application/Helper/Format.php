<?php

namespace Application\Helper;
/**
 * Class Format
 * @package Application\Helper
 */
class Format {

	/**
	 * @param int $iLength
	 *
	 * @return string
	 */
	public static function getCode($iLength = 32){
		$String ='';
		for($i = 1; $i < $iLength; $i++)	{
			$String .= substr('1234567890abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', rand(0, 61), 1);
		}
		return $String;
	}
}
