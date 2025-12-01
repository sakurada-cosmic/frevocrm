<?php
 
include_once 'vtlib/Vtiger/Module.php';
$servicesModule = Vtiger_Module::getInstance('Accounts');
$servicecontractModule = Vtiger_Module::getInstance('ModuleName');
$relationLabel  = 'ModuleName';
$servicesModule ->setRelatedList(
      $servicecontractModule , $relationLabel, Array('ADD','SELECT')
);
echo "DONE\n";
?>