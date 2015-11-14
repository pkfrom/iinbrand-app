<?php
return [
    'name' => "EDC System",
    'title' => "EDC System",
    'subtitle' => 'Protect your brand.',
    'description' => 'Protect your brand',
    'author' => 'iinbrand',
    'page_image' => 'home-bg.jpg',
    'posts_per_page' => 10,
    'rss_size' => 25,
    'contact_email' => env('MAIL_FROM'),
    'uploads' => [
        'storage' => 'local',
        'webpath' => '/uploads/',
    ],
];

