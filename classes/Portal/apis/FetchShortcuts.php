<?php
/* +**********************************************************************************
 * The contents of this file are subject to the vtiger CRM Public License Version 1.1
 * ("License"); You may not use this file except in compliance with the License
 * The Original Code is: vtiger CRM Open Source
 * The Initial Developer of the Original Code is vtiger.
 * Portions created by vtiger are Copyright (C) vtiger.
 * All Rights Reserved.
 * ***********************************************************************************/

class Portal_FetchShortcuts_API extends Portal_Default_API {

	public function process($request) {

		$response = new Portal_Response();
		$result = Vtiger_Connector::getInstance()->fetchShortcuts();
		$response->setResult($this->processShortcuts($result));
		return $response;
	}

	public function processShortcuts($result) {
		$shortcuts = array();
		foreach ($result as $key => $value) {
			foreach ($value as $module => $shortcut) {
				foreach ($shortcut as $moduleName => $action) {
					$shortcuts['shortcut'][$moduleName] = $shortcut[$moduleName];
				}
			}
		}
		return $shortcuts;
	}

}
