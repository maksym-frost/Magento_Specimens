<?php

//die('install script');
/** @var Mage_Core_Model_Resource_Setup $installer */

$installer = $this;

$installer->startSetup();
//
//$table=$installer->getConnection()
//->newTable($installer->getTable('simpleslider/slider'))
//
//    ->addColumn('slider_id', Varien_Db_Ddl_Table::TYPE_INTEGER, null, array(
//        'identity'  => true,
//        'unsigned'  => true,
//        'nullable'  => false,
//        'primary'   => true,
//    ), 'Id')
//    ->addColumn('content', Varien_Db_Ddl_Table::TYPE_VARCHAR, null, array(
//        'nullable'  => false,
//    ), 'Title')
//    ->addColumn('description', Varien_Db_Ddl_Table::TYPE_TEXT, null, array(
//        'nullable'  => false,
//    ), 'Description');
//$installer->getConnection()->createTable($table);
//$installer->endSetUp();


$table=$installer->getConnection()
    ->newTable($installer->getTable('simpleslider/slider'))

    ->addColumn('slider_id', Varien_Db_Ddl_Table::TYPE_INTEGER,null, array(
        'identity'=>true,
        'unsigned'=>true,
        'nullable'=>false,
        'primary'=>true
    ))
    ->addColumn('title', Varien_Db_Ddl_Table::TYPE_VARCHAR, null, array(
        'nullable'=>false,
    ))
    ->addColumn('content', Varien_Db_Ddl_Table::TYPE_TEXT, null, array(
        'nullable'=>false,
    ))
    ->addColumn('block_status', Varien_Db_Ddl_Table::TYPE_TINYINT, null, array(
        'nullable'=>false,
    ))
    ->addColumn('created_at', Varien_Db_Ddl_Table::TYPE_DATETIME, null, array(
        'nullable'=>false,
    ));

$installer->getConnection()->createTable($table);

$installer->endSetUp();