<?php

$Vtiger_Utils_Log = true;
include_once('vtlib/Vtiger/Menu.php');
include_once('vtlib/Vtiger/Module.php');

$module  = Vtiger_Module::getInstance('PON');

$module->setRelatedList(Vtiger_Module::getInstance('Documents'), 'Documents', Array('ADD','SELECT'), 'get_attachments');
?>

