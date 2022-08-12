<?php
$params = array_merge(
    require __DIR__ . '/../../common/config/params.php',
    require __DIR__ . '/../../common/config/params-local.php',
    require __DIR__ . '/params.php',
    require __DIR__ . '/params-local.php'
);

return [
    'id' => 'app-frontend_moisson',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'name' => 'Seara de Jesus',
    'controllerNamespace' => 'frontend_moisson\controllers',
    'components' => [
        'request' => [
            'csrfParam' => '_csrf-frontend_moisson',
        ],
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
            'identityCookie' => ['name' => '_identity-frontend_moisson', 'httpOnly' => true],
        ],
        'session' => [
            // this is the name of the session cookie used for login on the frontend_moisson
            'name' => 'advanced-frontend_moisson',
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
                // '<controller:[\w-]+>/<id:\d+>/<action:(create|create-report|delete|to-download|update|update-report|reports|view|view-search)>' => '<controller>/<action>',
                '<controller:[\w-]+>/<id:\d+>/<action:[\w-]+>' => '<controller>/<action>',
                '<controller:[\w-]+>/<page:\d+>/<action:[\w-]+>' => '<controller>/<action>',
            ],
        ],
    ],
    'params' => $params,
];
