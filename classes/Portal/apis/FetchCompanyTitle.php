<?php
/* +**********************************************************************************
 * The contents of this file are subject to the vtiger CRM Public License Version 1.1
 * ("License"); You may not use this file except in compliance with the License
 * The Original Code is: vtiger CRM Open Source
 * The Initial Developer of the Original Code is vtiger.
 * Portions created by vtiger are Copyright (C) vtiger.
 * All Rights Reserved.
 * ***********************************************************************************/

class Portal_FetchCompanyTitle_API extends Portal_Default_API {

	public function requireLogin() {
		return false;
	}

	public function process(Portal_Request $request) {
		$companyDetails = Vtiger_Connector::getInstance()->fetchCompanyTitle();
		$result = array();
		$result['result'] = $companyDetails['organizationname'];
		$response = new Portal_Response();
		$response->setResult($result);
		return $response;
	}

}
