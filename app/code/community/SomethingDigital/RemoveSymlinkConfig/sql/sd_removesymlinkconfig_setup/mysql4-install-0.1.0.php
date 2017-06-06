<?php
$installer = $this;
$installer->startSetup();
$installer->run("delete from " . $installer->getTable('core_config_data') . " where path='dev/template/allow_symlink'");
$installer->endSetup();
