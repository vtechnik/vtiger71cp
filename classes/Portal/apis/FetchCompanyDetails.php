<?php
/* +**********************************************************************************
 * The contents of this file are subject to the vtiger CRM Public License Version 1.1
 * ("License"); You may not use this file except in compliance with the License
 * The Original Code is: vtiger CRM Open Source
 * The Initial Developer of the Original Code is vtiger.
 * Portions created by vtiger are Copyright (C) vtiger.
 * All Rights Reserved.
 * ***********************************************************************************/

class Portal_FetchCompanyDetails_API extends Portal_Default_API {

	public function process(Portal_Request $request) {
		$result = Vtiger_Connector::getInstance()->fetchCompanyDetails();
		$response = new Portal_Response();
		$response->setResult($result);
		return $response;
	}

}
