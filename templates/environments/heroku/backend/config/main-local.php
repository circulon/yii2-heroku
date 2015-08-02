<?php
return [
    'components' => [
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => '',
            // unique CSRF cookie parameter for admin (set by kartik-v/yii2-app-practical)
            'csrfParam' => '_adminCsrf',
        ],
        // unique identity cookie parameter for admin (set by kartik-v/yii2-app-practical)
        'user' => [
            'identityCookie' => [
                'name' => '_adminUser', // unique for admin
                'path' => '/admin' // set it to correct path for admin app.
            ]
        ]
    ],
];
