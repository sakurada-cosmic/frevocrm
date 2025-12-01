<?php
 
include_once 'vtlib/Vtiger/Module.php';
$servicesModule = Vtiger_Module::getInstance('ModuleName');
$servicecontractModule = Vtiger_Module::getInstance('ModComments');
$relationLabel  = 'ModComments';
$servicesModule ->setRelatedList(
      $servicecontractModule , $relationLabel, Array('ADD','SELECT'), 'get_comments'
);
echo "DONE\n";
?>