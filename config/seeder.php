<?php

use Faker\Factory;

$generate = Factory::create();
/**
 * --------------------------------------------
 * Enserting fake data in database
 * -------------------------------------------
 * Don't change this variable name
 */
$database_seeder = [
    [
        'key' => 1,
        'table' => 'users',
        'rows' => 1,
        'fields' => function () use ($generate) {
            return [
                'names' => $generate->firstNameMale,
                'email' => 'omega',
                'user_image' => $generate->imageUrl($width = 100, $height = 100),
                'password' => password_hash('123', PASSWORD_DEFAULT),
                'created_at' => $generate->dateTime($max = 'now', $timezone = null),
                'updated_at' => $generate->dateTime($max = 'now', $timezone = null),
                'is_deleted' => false,
            ];
        },
    ],
];