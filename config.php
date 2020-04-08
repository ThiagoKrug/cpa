<?php

$config = [
    /*'APP_NAME' => 'Notas IFFar',
    'timezone' => 'America/Sao_Paulo',
    'locale' => 'pt-BR',
    'src_dir' => __DIR__ . '/../',
    'view_dir' => __DIR__ . '/../View/',
    'controller_dir' => __DIR__ . '/../Controller/',
    'model_dir' => __DIR__ . '/../Model',
    'NOTAS_URL' => 'http://localhost/notas/public_html/',*/
    'limesurvey' => [
        'driver' => 'mysql',
        'host' => 'localhost',
        'port' => 3307,
        'dbname' => 'limesurvey',
        'user' => 'root',
        'password' => '',
    ],
    'cpa' => [
        'driver' => 'mysql',
        'host' => 'localhost',
        'port' => 3307,
        'dbname' => 'cpa',
        'user' => 'root',
        'password' => '',
    ],
];
