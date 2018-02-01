<?php
/* +**********************************************************************************
 * The contents of this file are subject to the vtiger CRM Public License Version 1.1
 * ("License"); You may not use this file except in compliance with the License
 * The Original Code is: vtiger CRM Open Source
 * The Initial Developer of the Original Code is vtiger.
 * Portions created by vtiger are Copyright (C) vtiger.
 * All Rights Reserved.
 * ***********************************************************************************/

class Portal_FetchReferenceRecords_API extends Portal_Default_API {

	public function process(Portal_Request $request) {
		$module = $request->get('module');
		$query = $request->get('query');
		$response = new Portal_Response();
		$result = Vtiger_Connector::getInstance()->fetchReferenceRecords($module, $query);
		$response->setResult($result);
		return $response;
	}

}
