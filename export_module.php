<?php
require_once('vtlib/Vtiger/Module.php');
require_once('vtlib/Vtiger/Package.php');

$moduleName = 'ModuleName'; // ←実際のモジュール名に変更

$moduleInstance = Vtiger_Module::getInstance($moduleName);

if (!$moduleInstance) {
    die("モジュールが見つかりません: $moduleName");
}

$destinationDir = 'test/vtlib';
$zipFileName = sprintf('%s-%s.zip', $moduleName, date('Ymd_His'));

$package = new Vtiger_Package();
$package->export($moduleInstance, $destinationDir, $zipFileName, false);

echo "Export 完了: $destinationDir/$zipFileName\n";