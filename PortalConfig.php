<?php
/* +**********************************************************************************
 * The contents of this file are subject to the vtiger CRM Public License Version 1.1
 * ("License"); You may not use this file except in compliance with the License
 * The Original Code is: vtiger CRM Open Source
 * The Initial Developer of the Original Code is vtiger.
 * Portions created by vtiger are Copyright (C) vtiger.
 * All Rights Reserved.
 * ***********************************************************************************/

version_compare(PHP_VERSION, '5.5.0') <= 0 ? error_reporting(E_WARNING & ~E_NOTICE & ~E_DEPRECATED) : error_reporting(E_WARNING & ~E_NOTICE & ~E_DEPRECATED & ~E_STRICT); // PRODUCTION
//ini_set('display_errors','on'); version_compare(PHP_VERSION, '5.5.0') <= 0 ? error_reporting(E_WARNING & ~E_NOTICE & ~E_DEPRECATED) : error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED & ~E_STRICT);   // DEBUGGING

global $server_Path;
global $portal_Path;

//CRM URL without trialing/
//Example: http://yourdomain.com/crm
$server_Path = "";

//Portal URL without trialing/
//Example: http://yourdomain.com/portal
$authenticate_Path = "";


//Give a temporary directory path which is used when we upload attachment
$upload_dir = '/tmp';

//The character set to be used as character encoding for all soap requests
$default_charset = 'UTF-8'; //'ISO-8859-1';

$default_language = 'en_us';

$maxFileSize = '100 MB';
//defaultUiLanguage is the ui language, should be one of the values from availableLanguages.
$defaultUiLanguage = array("label" => 'US English', "value" => 'en_us');
//availableLanguages is the array containing all the label and value pair of all supported languages.
$availableLanguages = array(
	array("label" => 'US English', "value" => 'en_us'),
	array("label" => 'DE Deutsch', "value" => 'de_de'),
	array("label" => 'PT Brasil', "value" => 'pt_br'),
	array("label" => 'Francais', "value" => 'fr_fr'),
	array("label" => 'Turkce Dil Paketi', "value" => 'tr_tr')
);
?>
