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
        'table' => 'user',
        "todo" => 'create',
        'run' => function (Blueprint $table) {
            $table->bigIncrements('user_id');
            $table->string('names')->nullable();
            $table->string('username')->unique()->nullable();
            $table->string('user_image')->nullable();
            $table->text('password')->nullable();
            $table->text('token')->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->boolean('is_deleted')->nullable();
        },
        'reason' => 'Creating user table',
    ],
    [
        'key' => 2,
        'table' => 'files',
        "todo" => 'create',
        'run' => function (Blueprint $table) {
            $table->bigIncrements('id');
            // $table->bigInteger('user_id');
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
        },
        'reason' => 'Creating files table',
    ],
    [
        'key' => 3,
        'table' => 'clients',
        "todo" => 'create',
        'run' => function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('fullname')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->unique()->nullable();
            $table->text('token')->nullable();
            $table->text('password')->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->boolean('is_deleted')->nullable();
        },
        'reason' => 'Creating clients table',
    ],
    [
        'key' => 4,
        'table' => 'writter',
        "todo" => 'create',
        'run' => function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('fullname')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->string('gender')->nullable();
            $table->string('nationalism')->nullable();
            $table->string('cv')->nullable();
            $table->string('status')->nullable();
            $table->text('summary')->nullable();
            $table->text('bio')->nullable();
            $table->text('image')->nullable();
            $table->text('category')->nullable();
            $table->text('token')->nullable();
            $table->text('password')->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->boolean('is_deleted')->nullable();
        },
        'reason' => 'Creating writter table',
    ],
    [
        'key' => 5,
        'table' => 'script',
        "todo" => 'create',
        'run' => function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id')->nullable();
            $table->string('title')->nullable();
            $table->string('image')->nullable();
            $table->string('price')->nullable();
            $table->text('summary')->nullable();
            $table->text('description')->nullable();
            $table->string('category')->nullable();
            $table->string('genre')->nullable();
            $table->string('filter')->nullable();
            $table->string('status')->nullable();
            $table->string('file')->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->boolean('is_deleted')->nullable();
        },
        'reason' => 'Creating script table',
    ],
    [
        'key' => 6,
        'table' => 'script_order',
        "todo" => 'create',
        'run' => function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id')->nullable();
            $table->integer('script_id')->nullable();
            $table->string('amount')->nullable();
            $table->string('payment_status')->nullable();
            $table->string('payment_type')->nullable();
            $table->text('link')->nullable();
            $table->text('token')->nullable();
            $table->integer('repeat')->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->boolean('is_deleted')->nullable();
        },
        'reason' => 'Creating script_order table',
    ],
    [
        'key' => 7,
        'table' => 'contact',
        "todo" => 'create',
        'run' => function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('fullname')->nullable();
            $table->string('email')->nullable();
            $table->string('subject')->nullable();
            $table->text('message')->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->boolean('is_deleted')->nullable();
        },
        'reason' => 'Creating contact table',
    ],
    [
        'key' => 8,
        'table' => 'consultancy',
        "todo" => 'create',
        'run' => function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('fullname')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('file')->nullable();
            $table->text('message')->nullable();
            $table->string('status')->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->boolean('is_deleted')->nullable();
        },
        'reason' => 'Creating consultancy table',
    ],
    [
        'key' => 9,
        'table' => 'trash',
        "todo" => 'create',
        'run' => function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('item_id')->nullable();
            $table->string('item_type')->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->boolean('is_deleted')->nullable();
        },
        'reason' => 'Creating trash table',
    ],
    [
        'key' => 10,
        'table' => 'notification',
        "todo" => 'create',
        'run' => function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id')->nullable();
            $table->integer('item_id')->nullable();
            $table->string('item_type')->nullable();
            $table->text('message')->nullable();
            $table->text('read')->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->boolean('is_deleted')->nullable();
        },
        'reason' => 'Creating notification table',
    ],
    [
        'key' => 11,
        'table' => 'files',
        "todo" => 'update',
        'run' => function (Blueprint $table) {
            $table->string('user_id')->after('id')->nullable();
        },
        'reason' => 'adding user_id on tb_files table',
    ],
    [
        'key' => 12,
        'table' => 'files',
        "todo" => 'update',
        'run' => function (Blueprint $table) {
            $table->boolean('is_deleted')->after('updated_at')->nullable();
        },
        'reason' => 'adding is_deleted on tb_files table',
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
