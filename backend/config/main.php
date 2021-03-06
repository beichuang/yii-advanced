<?php
$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/../../common/config/params-local.php'),
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);

return [
    'id' => 'app-backend',
    'basePath' => dirname(__DIR__),
    'controllerNamespace' => 'backend\controllers',
    'bootstrap' => ['log'],
    'defaultRoute' => 'site/default',
    'modules' => [],
    'components' => [
        'request' => [
            'csrfParam' => '_csrf-backend',
        ],
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
            'identityCookie' => ['name' => '_identity-backend', 'httpOnly' => true],
        ],
        'session' => [
            // this is the name of the session cookie used for login on the backend
            'name' => 'advanced-backend',
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
        //http://www.yii-advanced.com
        'urlManager' => [
            'enablePrettyUrl' => true, //是否开启美化路由
            'showScriptName' => false, //是佛展示入口文件
            'suffix' => '.html', //url后缀
            'rules' => [ //自定义url

                'default/<cat_id:\d>' => 'site/default',

                [
                    'route' => 'site/category',
                    'pattern' => 'category/<category_id:\d>',
                    'defaults' => ['category_id' => 23],
                    'suffix' => '.json',
                ],

            ],
        ],

    ],
    'params' => $params,
];
