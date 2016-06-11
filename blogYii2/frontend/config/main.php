<?php
$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/../../common/config/params-local.php'),
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);

return [
    'id' => 'app-frontend',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log', 'thumbnail'],
    'controllerNamespace' => 'frontend\controllers',
    'components' => [

        'thumbnail' => [
        'class' => 'himiklab\thumbnail\EasyThumbnail',
        'cacheAlias' => 'assets/gallery_thumbnails',
        ],
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
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
            'enableStrictParsing' => false,
            'rules' => [
            ],
        ],
        
    ],

    'modules' => [
        'blog' => [
            'class' => 'app\modules\blog\Module',
        ],
    ],
    
    'params' => $params,
];
