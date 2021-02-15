<?php
return [
    'id' => 'api',
    // the basePath of the application will be the `micro-app` directory
    'basePath' => __DIR__,
    // this is where the application will find all controllers
    'controllerNamespace' => 'api\common\controllers',
    // set an alias to enable autoloading of classes from the 'micro' namespace

    'defaultRoute' => 'video-api',

    'aliases' => [
        '@api' => __DIR__,
    ],

    'components' => [

        'urlManager' => [
            'enablePrettyUrl' => true,
        //    'enableStrictParsing' => true,
            'showScriptName' => false,
            'rules' => [
                ['class'=>'yii\rest\UrlRule', 'controller'=>'video-api']
            ],
        ],

        'db' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host=localhost;dbname=freecodetube',
            'username' => 'root',
            'password' => '',
            'charset' => 'utf8',
        ],

        'request' => [
            // 'csrfParam' => '_csrf-frontend',
             'parsers' => [
                 'application/json' => 'yii\web\jsonParser'
             ]
         ],
    ],

    'modules' => [
        'v1' => [
            'class' => 'api\modules\v1\Module',
        ],
        
    ],
    
];