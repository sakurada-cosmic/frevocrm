<?php
 
 include_once 'vtlib/Vtiger/Module.php';
      $servicesModule = Vtiger_Module::getInstance('ModuleName');
      $blockInstance = new Vtiger_Block();
      $blockInstance->label = 'Additional Fields';
      $servicesModule->addBlock($blockInstance);
      $field = new Vtiger_Field();
      $field->name = 'Contact';
      $field->label = 'Contact';
      $field->table = 'vtiger_modulename';
      $field->column = 'contact_id';
      $field->columntype = 'VARCHAR(100)';
      $field->uitype = 10;
      $field->typeofdata = 'V~O';
      $field->helpinfo = 'Related to an existing contact';
      $blockInstance->addField($field);
      $field->setRelatedModules(array('Contacts'));
echo "DONE\n";
?>