<?php
/** @var Mage_Core_Model_Resource_Setup $installer */
$installer = $this;
$installer->startSetup();
$tableFilter = $installer->getTable('gdopayment/block');
//die($tableFilter);
if ($installer->getConnection()->isTableExists($tableFilter)) {
    $installer->getConnection()->dropTable($tableFilter);
    goto a;
}
a: {
    $table = $installer->getConnection()
        ->newTable($this->getTable($tableFilter))
        ->addColumn('group_id', Varien_Db_Ddl_Table::TYPE_INTEGER, null, array(
            'identify' => true,
            'unsigned' => true,
            'nullable' => false,
            'primary' => true,
        ))
        ->addColumn('payment_identifier', Varien_Db_Ddl_Table::TYPE_VARCHAR, null, array(
            'nullable' => false,
        ));
    $installer->getConnection()->createTable($table);
}
$installer->endSetup();