<?php
include_once("vtlib/Vtiger/Module.php");

$moduleName = "ModuleName"; // ←実際のモジュール名に変更
$modulename = strtolower($moduleName);
$moduleNAME = strtoupper($moduleName);
$blockName = "LBL_{$moduleNAME}_INFORMATION";

$module = Vtiger_Module::getInstance($moduleName);
$block = Vtiger_Block::getInstance($blockName, $module);

$field = new Vtiger_Field();
$field->name = "{$modulename}_no";         // importmodule_no
$field->table = "vtiger_{$modulename}";    // vtiger_importmodule
$field->column = "{$modulename}_no";       // importmodule_no
$field->uitype = 4;                         // 自動番号
$field->generatedtype = 1;                  // システム生成
$field->typeofdata = "V~O";                 // 文字列・任意
$field->label = "{$moduleName}番号";        // 表示ラベル
$field->readonly = 1;                       // 編集不可
$field->presence = 0;                       // 常に有効
$field->masseditable = 0;                     // 一括編集不可

$block->addField($field);

echo "DONE\n";