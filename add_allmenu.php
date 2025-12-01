<?php
require_once 'vtlib/Vtiger/Module.php';     // 必須：Vtiger_Moduleクラス使用に必要

$moduleName = 'ModuleName'; // ←実際のモジュール名に変更

global $adb;
$moduleInstance = Vtiger_Module::getInstance($moduleName);

if ($moduleInstance) {
    $tabid = $moduleInstance->id;

    $result = $adb->pquery("SELECT DISTINCT appname FROM vtiger_app2tab", []);
    while ($row = $adb->fetch_array($result)) {
        $appname = $row['appname'];

        // すでに登録済みかチェック
        $check = $adb->pquery("SELECT 1 FROM vtiger_app2tab WHERE appname=? AND tabid=?", [$appname, $tabid]);
        if ($adb->num_rows($check) == 0) {

            // 現在の最大sequenceを取得
            $seqResult = $adb->pquery("SELECT MAX(sequence) AS maxseq FROM vtiger_app2tab WHERE appname=?", [$appname]);
            $maxSeq = (int)$adb->query_result($seqResult, 0, 'maxseq');
            $nextSeq = $maxSeq + 1;

            // sequence付きで追加
            $adb->pquery(
                "INSERT INTO vtiger_app2tab (appname, tabid, sequence) VALUES (?, ?, ?)",
                [$appname, $tabid, $nextSeq]
            );

            echo "✅{$appname} に追加しました（sequence={$nextSeq}）。\n";
        } else {
            echo "⏩{$appname} は既に登録済みです。\n";
        }
    }

    echo "{$moduleName} を全メニュー(appname版, sequence付き)に追加しました。\n";
} else {
    echo "モジュールが見つかりません: {$moduleName}\n";
}
