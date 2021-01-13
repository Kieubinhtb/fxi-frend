<?php

$params = require __DIR__ . '/params.php';
$db = require __DIR__ . '/db.php';

$this_url = '/';

$config = [
    'id' => 'basic',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'homeUrl' => $this_url,
    'aliases' => [
        // '@bower' => '@vendor/bower-asset',
        '@bower' => '@vendor/yidas/yii2-bower-asset/bower',
        '@npm'   => '@vendor/npm-asset',
    ],
    'components' => [
        'mobileDetect' => [
            'class' => '\skeeks\yii2\mobiledetect\MobileDetect'
        ],
        'request' => [
            'baseUrl' => $this_url,
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'oR7m9vHU9FYbZlob34nn31_gr5H51qaO',
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'user' => [
            'identityClass' => 'app\models\User',
            'enableAutoLogin' => true,
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            'useFileTransport' => true,
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
        'db' => $db,
        // 'urlManager' => [
        //     'baseUrl' => $this_url,
        //     'enablePrettyUrl' => true,
        //     'showScriptName' => false,
        //     'enableStrictParsing' => true,
        //     'rules' => [
        //         'class' => 'yii\rest\UrlRule',
        //         '<controller:[\w-]+>/<action:[\w-]+>' => '<controller>/<action>',//link thuan
        //     ],
        // ],
        'urlManager' => [
            'baseUrl' => $this_url,
            'enablePrettyUrl' => true,
            'enableStrictParsing' => true,
            'showScriptName' => false,
            'rules' => [
                'class' => 'yii\rest\UrlRule',
                '' => 'site/index',
                '/' => 'site/index',
                'thong-tin-danh-gia-san-<link:[\w\-\–\—]+><link2:[\/]?>' => 'site/detail-broker',
                'chi-tiet-broker/<link:[\w\-\–\—\/]+>/' => 'site/convert-detail',//convert link detail
                'tim-kiem-san-forex<link:[\/]?>' => 'site/filter',
                'so-sanh-san-forex<link:[\/]?>' => 'site/compare',
                'danh-gia-san-forex<link:[\/]?>' => 'site/review',
                'san-forex-uy-tin<link:[\/]?>' => 'site/reputation',
                'tin-hieu-giao-dich-forex<link:[\/]?>' => 'site/signal',
                'lich-kinh-te<link:[\/]?>' => 'site/economic-calendar',
                'gia-vang<link:[\/]?>' => 'site/gold-price',
                'lien-he<link:[\/]?>' => 'site/contact',
                'chinh-sach-quyen-rieng-tu<link:[\/]?>' => 'site/policy',
                'dieu-khoan-va-dieu-kien<link:[\/]?>' => 'site/term',
                'tuyen-bo-mien-tru<link:[\/]?>' => 'site/disclaimer',

                //landing page 
                'online-investment-channels-2020<link:[\/]?>'=> 'site/landing-page',
                'online-investment-channels-2020/thank-you<link:[\/]?>' => 'site/landing-page-two',

                //landing page merry-christmas 
                'dau-tu/merry-christmas-2020<link:[\/]?>' => 'site/landing-page-three',
                'dau-tu/merry-christmas-2020/thank-you<link:[\/]?>' => 'site/landing-page-four',
                'en/dau-tu/merry-christmas-2020<link:[\/]?>' => 'site/landing-page-three-en',
                'en/dau-tu/merry-christmas-2020/thank-you<link:[\/]?>' => 'site/landing-page-four-en',

                've-chung-toi.html' => 'site/vechungtoi',
                '<controller:[\w-]+>/<action:[\w-]+>' => '<controller>/<action>', //link thuan
            ]
        ]
    ],
    'params' => $params,
];

// if (YII_ENV_DEV) {
//     // configuration adjustments for 'dev' environment
//     $config['bootstrap'][] = 'debug';
//     $config['modules']['debug'] = [
//         'class' => 'yii\debug\Module',
//         // uncomment the following to add your IP if you are not connecting from localhost.
//         //'allowedIPs' => ['127.0.0.1', '::1'],
//     ];

//     $config['bootstrap'][] = 'gii';
//     $config['modules']['gii'] = [
//         'class' => 'yii\gii\Module',
//         // uncomment the following to add your IP if you are not connecting from localhost.
//         //'allowedIPs' => ['127.0.0.1', '::1'],
//     ];
// }

return $config;
