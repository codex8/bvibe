<?php

class DataChk {
	
	/**
	 * @function length check
	 * @param string $data
	 * @param number $minLength
	 * @param number $maxLength | if set 'exp', allows string length ++
	 * @return false if fails | otherwise return $data
	 */
	public function lengthChk($data, $minLength, $maxLength) {
		$data = strip_tags($data); // remove html tags
		if($maxLength == 'exp') {
			if(strlen($data) > $minLength) {
				return $data;
			} else {
				return false;
			}
		} else {
			if(strlen($data) > $minLength && strlen($data) < $maxLength) {
				return $data;
			} else {
				return false;
			}
		}
	
	}
	
	/**
	 * @function digitChk function
	 * @param int | int with string $data
	 * @return false|number
	 */
	public function digitChk($data) {
		if(ctype_alpha($data) == true) {
			return false;
		} else {
			if(intval($data) == 0) {
				return false;
			} else {
				return intval($data);
			}
		}
	}
	
	/**
	 * digitAllow - allows only digit | return false when
	 * @param mixed $data
	 * @return false|$data
	 */
	public function digitAllow($data) {
		if(ctype_digit($data) == true) {
			return $data;
		} else {
			return false;
		}
	}
	
	/**
	 * @varsion 0.0.1
	 * @function dataAllow -- allow only digit and alpha
	 * @param digit|alpha $type
	 * @param mixed $data
	 * @return false|$data
	 */
	public function dataAllow($type, $data){
		if($type == 'alpha') {
			if(ctype_alpha($data) == true) {
				return $data;
			} else {
				return false;
			}
		} elseif($type == 'digit') {
			if(ctype_digit($data) == true) {
				return $data;
			} else {
				return false;
			}
		}
	}
	
	
// 	/**
// 	 * @varsion 0.0.2
// 	 * @function dataAllow -- allow only digit and alpha
// 	 * @param digit|alpha $type
// 	 * @param mixed $data
// 	 * @return NULL|$data
// 	 */
// 	public function dataAllow($type, $data){
// 		switch ($type) {
// 			case 'alpha':
// 				switch (ctype_alpha($data)){
// 					case 'true':
// 						return $data;
// 						break;
// 					case 'false':
// 						return NULL;
// 						break;
// 				}
// 				break;
// 			case 'digit':
// 				switch (ctype_digit($data)){
// 					case 'true':
// 						return $data;
// 						break;
// 					case 'false':
// 						return NULL;
// 						break;
// 				}
// 				break;
// 			default:
// 				return NULL;
// 		}
// 	}
	
	/**
	 * @function emailChk function
	 * @param email $data
	 * @return false|$data
	 */
	public function emailChk($data) {
		$matches = preg_match('/(\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,6})/', $data);
		if($matches == 0) {
			return false;
		} else {
			return $data;
		}
	}
	
	
	
	/**
	 * @function PSI - Prevent SQL Injection
	 * @check parameter UNION, ;--, --
	 * @param string $data
	 * @return boolean
	 */
	function PSI($data) {
		if(stripos($data, 'UNION ') == false) {
			return true;
		} else {
			return false;
		}
	
		if(stripos($data, ';--') == false) {
			return true;
		} else {
			return false;
		}
		if(stripos($data, '--') == false) {
			return true;
		} else {
			return false;
		}
	}
	
}