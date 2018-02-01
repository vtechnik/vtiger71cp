/*+***********************************************************************************
 * The contents of this file are subject to the vtiger CRM Public License Version 1.1
 * ("License"); You may not use this file except in compliance with the License
 * The Original Code is: vtiger CRM Open Source
 * The Initial Developer of the Original Code is vtiger.
 * Portions created by vtiger are Copyright (C) vtiger.
 * All Rights Reserved.
 *************************************************************************************/

function Products_IndexView_Component($scope, $api, $webapp,$translatePartialLoader) {
  if ($translatePartialLoader !== undefined) {
      $translatePartialLoader.addPart('home');
      $translatePartialLoader.addPart('Products');
  }
    angular.extend(this, new Portal_IndexView_Component($scope, $api, $webapp));
    var url = purl();
    $scope.module = url.param('module');
    $scope.pageInitialized = false;

    $scope.searchQ = {
        onlymine: true
    }

    $scope.headers = null;
    $scope.records = null;
    $scope.extheaders = null;
    $scope.extrecords = null;
    $scope.currentPage = 1;
    $scope.pageSize = 10;
    $scope.isCreateable = false;
    $scope.isEditable = false;
}
