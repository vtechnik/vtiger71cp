<?php
/*+**********************************************************************************
 * The contents of this file are subject to the vtiger CRM Public License Version 1.1
 * ("License"); You may not use this file except in compliance with the License
 * The Original Code is: vtiger CRM Open Source
 * The Initial Developer of the Original Code is vtiger.
 * Portions created by vtiger are Copyright (C) vtiger.
 * All Rights Reserved.
 ************************************************************************************/

include_once dirname(__FILE__).'/classes/Portal/Loader.php';
include_once PORTAL_APP_DIR.'/config.php';

$portalMainController = new Portal_Main_Controller();
$portalMainController->dispatch(Portal_Request::parseFormOrJSONRequest());
