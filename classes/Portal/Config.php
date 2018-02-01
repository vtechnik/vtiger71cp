<?php
/* +**********************************************************************************
 * The contents of this file are subject to the vtiger CRM Public License Version 1.1
 * ("License"); You may not use this file except in compliance with the License
 * The Original Code is: vtiger CRM Open Source
 * The Initial Developer of the Original Code is vtiger.
 * Portions created by vtiger are Copyright (C) vtiger.
 * All Rights Reserved.
 * ***********************************************************************************/

include_once PORTAL_APP_DIR.'/config.php';

class Portal_Config extends Portal_Config_Data {

	public static function get($key, $defval = NULL) {
		$data = self::getData();
		return self::has($key) ? $data[$key] : $defval;
	}

	public static function has($key) {
		$data = self::getData();
		return isset($data[$key]);
	}

	public static function set($key, $value) {
		self::$data[$key] = $value;
	}

}
