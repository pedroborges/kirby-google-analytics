<?php

Kirby::plugin('pedroborges/google-analytics', [
    'snippets' => [
        'google-analytics' => __DIR__ . '/snippets/script.php'
    ],
    'translations' => [
        'en' => [
            'google.analytics.success-alert' => 'Google Analytics tracking for this website and browser has been successfully disabled.',
        ],
        'de' => [
            'google.analytics.success-alert' => 'Das Google-Analytics-Tracking für diese Website wurde in diesem Browser erfolgreich deaktiviert.',
        ]
    ]
]);
