<?php

return array(
    'db' => array(
        'username' => getenv('SWDB_USER'),
        'password' => getenv('SWDB_PASS'),
        'dbname' => getenv('SWDB_DATABASE'),
        'host' => getenv('SWDB_HOST'),
        'port' => getenv('SWDB_PORT'),
    ),
        
    'front' => [
        'showException' => true,
        'throwExceptions' => true,
        'noErrorHandler' => false,
    ],
    
    'phpsettings' => [
        'display_errors' => 1,
    ],

    'template' => [
        'forceCompile' => true,
    ],

    'cache' => [
        'backend' => 'Black-Hole',
        'backendOptions' => [],
        'frontendOptions' => [
            'write_control' => false
        ],
    ],

    'model' => [
        'cacheProvider' => 'Array'
    ],
      
    'httpCache' => [
        'enabled' => true,
        'debug' => true,
    ],
    
    'csrfProtection' => [
        'frontend' => false,
        'backend' => false
    ],
);
