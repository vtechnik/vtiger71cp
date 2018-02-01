{*<!--
/*********************************************************************************
** The contents of this file are subject to the vtiger CRM Public License Version 1.1
* ("License"); You may not use this file except in compliance with the License
* The Original Code is: vtiger CRM Open Source
* The Initial Developer of the Original Code is vtiger.
* Portions created by vtiger are Copyright (C) vtiger.
* All Rights Reserved.
*
********************************************************************************/
-->*}

<div class="container-fluid"  ng-controller="{portal_componentjs_class($MODULE, 'IndexView_Component')}">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            {include file=portal_template_resolve($MODULE, "partials/IndexContentBefore.tpl")}
            {include file=portal_template_resolve($MODULE, "partials/IndexContent.tpl")}
            {include file=portal_template_resolve($MODULE, "partials/IndexContentAfter.tpl")}
        </div>
    </div>
</div>
