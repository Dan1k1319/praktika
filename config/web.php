php

$params = require __DIR__ . 'params.php';

$config = [
    'id' = 'basic',
    'basePath' = dirname(__DIR__),
    'bootstrap' = ['log'],
    'components' = [
        'request' = [
            'cookieValidationKey' = 'your-validation-key',
        ],
        'log' = [
            'traceLevel' = YII_DEBUG  3  0,
            'targets' = [
                [
                    'class' = 'yiilogFileTarget',
                    'levels' = ['error', 'warning'],
                ],
            ],
        ],
        'db' = require __DIR__ . 'db.php',  Подключение к базе данных
    ],
    'params' = $params,
];

if (YII_ENV_DEV) {
     конфигурация для разработки
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' = 'yiidebugModule',
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' = 'yiigiiModule',
    ];
}

return $config;