<?php

require __DIR__ . '/constants.php';


return [


    // Schema cache options (for production environment)
    //'enableSchemaCache' => true,
    //'schemaCacheDuration' => 60,
    //'schemaCache' => 'cache',
    'class' => 'yii\db\Connection',
    'dsn' => 'pgsql:host=' . SMIS_DB_SERVER . ';dbname=' . SMIS_DB_NAME,
    'username' => SMIS_DB_USER,
    'password' => SMIS_DB_PASS,
    'charset' => 'utf8',
];
