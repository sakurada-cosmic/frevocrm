<?php
 
include_once 'vtlib/Vtiger/Module.php';
$servicesModule = Vtiger_Module::getInstance('ModuleName');
$servicecontractModule = Vtiger_Module::getInstance('Calendar');
$relationLabel  = 'Calendar';
$servicesModule ->setRelatedList(
      $servicecontractModule , $relationLabel, Array('ADD','SELECT')
);
echo "DONE\n";
?>