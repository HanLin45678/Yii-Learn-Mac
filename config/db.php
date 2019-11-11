<?php

return [
    'class' => 'yii\db\Connection',
    'dsn' => 'mysql:host=localhost;dbname=yii2test', // self-modify
    'username' => 'root',
    'password' => '',
    'charset' => 'utf8', // 雖然phpmyAdmin是utf8_general_ci , 但db.php仍然填'utf8'

    // Schema cache options (for production environment)
    //'enableSchemaCache' => true,
    //'schemaCacheDuration' => 60,
    //'schemaCache' => 'cache',
];
