<?php
/* +**********************************************************************************
 * The contents of this file are subject to the vtiger CRM Public License Version 1.1
 * ("License"); You may not use this file except in compliance with the License
 * The Original Code is: vtiger CRM Open Source
 * The Initial Developer of the Original Code is vtiger.
 * Portions created by vtiger are Copyright (C) vtiger.
 * All Rights Reserved.
 * ***********************************************************************************/

if (file_exists('PortalConfig.php')) {
	//Take in the configured URL as $site_URL from Portal.
	include_once 'PortalConfig.php';
}
if (file_exists('../config.inc.php')) {
	//Take in the default $site_URL from CRM
	include_once '../config.inc.php';
}
version_compare(PHP_VERSION, '5.5.0') <= 0 ? error_reporting(E_WARNING & ~E_NOTICE & ~E_DEPRECATED) : error_reporting(E_WARNING & ~E_NOTICE & ~E_DEPRECATED & ~E_STRICT); // PRODUCTION
//ini_set('display_errors','on'); version_compare(PHP_VERSION, '5.5.0') <= 0 ? error_reporting(E_WARNING & ~E_NOTICE & ~E_DEPRECATED) : error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED & ~E_STRICT);   // DEBUGGING

class Portal_Config_Data {

	protected static $data = array(
		'crm.url' => '/modules/CustomerPortal/api.php',
		'crm.version' => '7.1.0', // Framework version for API
		'language' => 'en_us', // Default Language for API. Note : Changing the language here will not change the default/login language for Portal user.
		'layout' => 'default',
	);

	protected static function getData() {
		global $site_URL;
		global $maxFileSize;
		global $defaultUiLanguage;
		global $availableLanguages;
		$crmUrl = self::$data['crm.url'];

		if (!empty($site_URL) && strpos($crmUrl, $site_URL) === false) {
			self::$data['crm.url'] = $site_URL.$crmUrl;
		}
		self::$data['upload_max_filesize'] = $maxFileSize;
		self::$data['ui.Language'] = $defaultUiLanguage;
		self::$data['languages'] = $availableLanguages;
		self::$data['server_Path'] = $server_Path;
		self::$data['authenticate_Path'] = $authenticate_Path;
		return self::$data;
	}

}
