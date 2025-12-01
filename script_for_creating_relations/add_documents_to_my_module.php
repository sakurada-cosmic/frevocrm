<?php
 
include_once 'vtlib/Vtiger/Module.php';
$servicesModule = Vtiger_Module::getInstance('ModuleName');
$servicecontractModule = Vtiger_Module::getInstance('Documents');
$relationLabel  = 'Documents';
$servicesModule->setRelatedList(
      $servicecontractModule , $relationLabel, array('add','select'), 'get_attachments'
);
echo "DONE\n";
?>