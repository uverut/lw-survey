<?php

/*
 * You can place your custom package configuration in here.
 */
return [
    'models' => [
        'user' => 'App\User',
        'user_id' => 'user_id'
    ],
    'database' => [
        'tables' => [
            'surveys' => 'lw_surveys',
            'sections' => 'lw_sections',
            'questions' => 'lw_questions',
            'options' => 'lw_options',
            'entries' => 'lw_entries',
            'answers' => 'lw_answers',
        ]
    ],
];
