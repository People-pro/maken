<?php

use Illuminate\Database\Schema\Blueprint;

/**
 * --------------------------------------------
 * Setting up database
 * -------------------------------------------
 * Don't change this variable name
 */
$db_up_migration = [
    [
        'key' => 1,
        'table' => 'users',
        "todo" => 'create',
        'run' => function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('names')->nullable();
            $table->string('email')->unique()->nullable();
            $table->string('image')->nullable();
            $table->text('password')->nullable();
            $table->string('type')->nullable();
            $table->text('token')->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->boolean('is_deleted')->nullable();
        },
        'reason' => 'Creating users table',
    ],
    [
        'key' => 2,
        'table' => 'files',
        "todo" => 'create',
        'run' => function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_id');
            $table->string('unique_index')->unique()->nullable();
            $table->string('virtual_name')->nullable();
            $table->string('file_name')->nullable();
            $table->string('file_location')->nullable();
            $table->string('ext')->nullable();
            $table->string('size')->nullable();
            $table->string('title')->nullable();
            $table->text('content')->nullable();
            $table->string('keyword')->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->boolean('is_deleted')->nullable();
        },
        'reason' => 'Creating files table',
    ],
    [
        'key' => 3,
        'table' => 'attractions',
        "todo" => 'create',
        'run' => function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->nullable();
            $table->text('images')->nullable();
            $table->string('country')->nullable();
            $table->string('region')->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->boolean('is_deleted')->nullable();
        },
        'reason' => 'Creating attractions table',
    ],
    [
        'key' => 4,
        'table' => 'packages',
        "todo" => 'create',
        'run' => function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('attraction_id')->nullable();
            $table->string('duration')->nullable();
            $table->string('min_age')->nullable();
            $table->string('max_people')->nullable();
            $table->text('price')->nullable();
            $table->text('inclusives')->nullable();
            $table->text('exclusives')->nullable();
            $table->text('reqs')->nullable();
            $table->text('image')->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->boolean('is_deleted')->nullable();
        },
        'reason' => 'Creating packages table',
    ],
    [
        'key' => 5,
        'table' => 'trips',
        "todo" => 'create',
        'run' => function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('attraction_id')->nullable();
            $table->string('duration')->nullable();
            $table->string('min_age')->nullable();
            $table->string('max_people')->nullable();
            $table->text('price')->nullable();
            $table->text('inclusives')->nullable();
            $table->text('exclusives')->nullable();
            $table->text('reqs')->nullable();
            $table->text('image')->nullable();
            $table->string('date')->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->boolean('is_deleted')->nullable();
        },
        'reason' => 'Creating trips table',
    ],
    [
        'key' => 6,
        'table' => 'gallery',
        "todo" => 'create',
        'run' => function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title')->nullable();
            $table->string('date')->nullable();
            $table->string('image')->nullable();
            $table->longText('images')->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->boolean('is_deleted')->nullable();
        },
        'reason' => 'Creating gallery table',
    ],
    [
        'key' => 7,
        'table' => 'trip_orders',
        "todo" => 'create',
        'run' => function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('trip_id')->nullable();
            $table->string('fullname')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->string('people')->nullable();
            $table->string('nationality')->nullable();
            $table->text('details')->nullable();
            $table->string('status')->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->boolean('is_deleted')->nullable();
        },
        'reason' => 'Creating trip_orders table',
    ],
    [
        'key' => 8,
        'table' => 'package_orders',
        "todo" => 'create',
        'run' => function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('package_id')->nullable();
            $table->string('fullname')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->string('people')->nullable();
            $table->string('nationality')->nullable();
            $table->text('details')->nullable();
            $table->string('status')->nullable();
            $table->string('date')->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->boolean('is_deleted')->nullable();
        },
        'reason' => 'Creating package_orders table',
    ],
    [
        'key' => 9,
        'table' => 'packages',
        "todo" => 'update',
        'run' => function (Blueprint $table) {
            $table->integer('sales')->after('image')->nullable();
        },
        'reason' => 'adding sales on packages table',
    ],
    [
        'key' => 10,
        'table' => 'packages',
        "todo" => 'update',
        'run' => function (Blueprint $table) {
            $table->string('iterinary')->after('image')->nullable();
        },
        'reason' => 'adding sales on packages table',
    ],
    [
        'key' => 11,
        'table' => 'sliders',
        "todo" => 'create',
        'run' => function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('image')->nullable();
            $table->longText('content')->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->boolean('is_deleted')->nullable();
        },
        'reason' => 'Creating tb_sliders table',
    ],
    [
        'key' => 12,
        'table' => 'packages',
        "todo" => 'update',
        'run' => function (Blueprint $table) {
            $table->string('packageType')->after('sales')->nullable();
        },
        'reason' => 'adding packageType on packages table',
    ],
    [
        'key' => 13,
        'table' => 'packages',
        "todo" => 'update',
        'run' => function (Blueprint $table) {
            $table->longText('description')->after('packageType')->nullable();
        },
        'reason' => 'adding description on packages table',
    ],
];

/**
 * --------------------------------------------
 * Rollback database
 * -------------------------------------------
 * Don't change this variable name
 */
$db_down_migration = [
    [
        'key' => 1,
        'table' => 'user',
        'todo' => 'delete',
        'run' => 'drop',
        'reason' => 'Removing user table',
    ],
    [
        'key' => 2,
        'table' => 'files',
        'todo' => 'delete',
        'run' => 'drop',
        'reason' => 'Removing files table',
    ],
];
