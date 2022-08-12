<?php
$params = array_merge(
    require __DIR__ . '/../../common/config/params.php',
    require __DIR__ . '/../../common/config/params-local.php',
    require __DIR__ . '/params.php',
    require __DIR__ . '/params-local.php'
);

return [
    'id' => 'app-backend_ecommerce_partners',
    'basePath' => dirname(__DIR__),
    'controllerNamespace' => 'backend_ecommerce_partners\controllers',
    'bootstrap' => ['log'],
    'modules' => [],
    'components' => [
        'request' => [
            'csrfParam' => '_csrf-backend_ecommerce_partners',
        ],
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
            'identityCookie' => ['name' => '_identity-backend_ecommerce_partners', 'httpOnly' => true],
        ],
        'session' => [
            // this is the name of the session cookie used for login on the backend_ecommerce_partners
            'name' => 'advanced-backend_ecommerce_partners',
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => true,
            'rules' => [
                '<controller:[\w-]+>/<id:\d+>/<action:(create|create-report|delete|to-download|update|update-report|reports|view|view-search)>' => '<controller>/<action>',
                '<controller:[\w-]+>/<id:\d+>/<action:[\w-]+>' => '<controller>/<action>',
                '<controller:[\w-]+>/<page:\d+>/<action:[\w-]+>' => '<controller>/<action>',
            ],
        ],
    ],
    'params' => $params,
];
