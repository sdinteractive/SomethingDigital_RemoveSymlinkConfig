<?php
$installer = $this;
$installer->startSetup();
$installer->run("delete from core_config_data where path='dev/template/allow_symlink'");
$installer->endSetup();