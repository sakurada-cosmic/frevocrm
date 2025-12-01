<?php
require_once("include/Webservices/SessionManager.php");

echo "session.gc_maxlifetime = " . ini_get("session.gc_maxlifetime") . " seconds\n";

$sessionManager = new SessionManager();
echo "WS Session Timeout = " . $sessionManager->getSessionTimeout() . " seconds\n";
?>
