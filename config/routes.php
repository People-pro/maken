<?php

use system\library\Router;

/* -----------------------------
 * This is router array, please don't change any key just add values
 * -----------------------------
 */

$routes = [

    // SITE API
    [
        'path' => '/api/v1',
        "children" => [
            [
                'path' => '/',
                'method' => 'GET',
                'folder' => 'api',
                'return' => 'UserController@index',
            ],
        ],
    ],


    // ADMIN API
    [
        'path' => '/api/v1/admin',
        "children" => [
            [
                'path' => '/adminLogin',
                'method' => 'POST',
                'folder' => 'admin',
                'return' => 'adminLoginController@adminLogin',
            ],
            [
                'path' => '/getDashboards',
                'method' => 'POST',
                'folder' => 'site',
                'return' => 'PagesController@getDashboards',
            ],


            // attractions


            [
                'path' => '/attractions/getAttraction',
                'method' => 'GET',
                'folder' => 'admin',
                'return' => 'AdminAttractionsController@getAttraction',
            ],
            [
                'path' => '/attractions/addAttraction',
                'method' => 'POST',
                'folder' => 'admin',
                'return' => 'AdminAttractionsController@addAttraction',
            ],
            [
                'path' => '/attractions/updateAttraction',
                'method' => 'POST',
                'folder' => 'admin',
                'return' => 'AdminAttractionsController@updateAttraction',
            ],
            [
                'path' => '/attractions/deleteAttraction/{id}',
                'method' => 'GET',
                'folder' => 'admin',
                'return' => 'AdminAttractionsController@deleteAttraction',
            ],


            // packages


            [
                'path' => '/packages/getPackage',
                'method' => 'GET',
                'folder' => 'admin',
                'return' => 'AdminPackagesController@getPackage',
            ],
            [
                'path' => '/packages/addPackage',
                'method' => 'POST',
                'folder' => 'admin',
                'return' => 'AdminPackagesController@addPackage',
            ],
            [
                'path' => '/packages/updatePackage',
                'method' => 'POST',
                'folder' => 'admin',
                'return' => 'AdminPackagesController@updatePackage',
            ],
            [
                'path' => '/packages/deletePackage/{id}',
                'method' => 'GET',
                'folder' => 'admin',
                'return' => 'AdminPackagesController@deletePackage',
            ],


            // Package orders


            
            [
                'path' => '/packages/orders/getOrders',
                'method' => 'POST',
                'folder' => 'admin',
                'return' => 'AdminPackagesController@getOrders',
            ],
            [
                'path' => '/packages/orders/confirmOrders',
                'method' => 'POST',
                'folder' => 'admin',
                'return' => 'AdminPackagesController@confirmOrders',
            ],



            // trips


            [
                'path' => '/trip/getTrip',
                'method' => 'GET',
                'folder' => 'admin',
                'return' => 'AdminTripsController@getTrip',
            ],
            [
                'path' => '/trip/addTrip',
                'method' => 'POST',
                'folder' => 'admin',
                'return' => 'AdminTripsController@addTrip',
            ],
            [
                'path' => '/trip/updateTrip',
                'method' => 'POST',
                'folder' => 'admin',
                'return' => 'AdminTripsController@updateTrip',
            ],
            [
                'path' => '/trip/deleteTrip/{id}',
                'method' => 'GET',
                'folder' => 'admin',
                'return' => 'AdminTripsController@deleteTrip',
            ],


            // Trip orders


            
            [
                'path' => '/trip/orders/getOrders',
                'method' => 'POST',
                'folder' => 'admin',
                'return' => 'AdminTripsController@getOrders',
            ],


            // Gallery


            [
                'path' => '/gallery/getGallery',
                'method' => 'GET',
                'folder' => 'admin',
                'return' => 'AdminGalleryController@getGallery',
            ],
            [
                'path' => '/gallery/addGallery',
                'method' => 'POST',
                'folder' => 'admin',
                'return' => 'AdminGalleryController@addGallery',
            ],
            [
                'path' => '/gallery/updateGallery',
                'method' => 'POST',
                'folder' => 'admin',
                'return' => 'AdminGalleryController@updateGallery',
            ],
            [
                'path' => '/gallery/deleteGallery/{id}',
                'method' => 'GET',
                'folder' => 'admin',
                'return' => 'AdminGalleryController@deleteGallery',
            ],

            // users



            [
                'path' => '/getUsers',
                'method' => 'GET',
                'folder' => 'admin',
                'return' => 'adminUserController@getUsers',
            ],
            [
                'path' => '/addUser',
                'method' => 'POST',
                'folder' => 'admin',
                'return' => 'adminUserController@addUser',
            ],
            [
                'path' => '/updateUser',
                'method' => 'POST',
                'folder' => 'admin',
                'return' => 'adminUserController@updateUser',
            ],
            [
                'path' => '/deleteUser/{id}',
                'method' => 'GET',
                'folder' => 'admin',
                'return' => 'adminUserController@deleteUser',
            ],
            [
                'path' => '/updateAgentAccount',
                'method' => 'POST',
                'folder' => 'admin',
                'return' => 'adminUserController@updateAgentAccount',
            ],
            [
                'path' => '/updateAgentPassword',
                'method' => 'POST',
                'folder' => 'admin',
                'return' => 'adminUserController@updateAgentPassword',
            ],
        ],
    ],






    // UPLOAD HELPER API
    [
        'path' => "/upload",
        // 'middleware' => 'web',
        "children" => [
            [
                'path' => '/{token}',
                'method' => 'POST',
                'folder' => 'helper',
                'return' => 'Uploader@uploadNow',
            ],
            [
                'path' => '/chunk',
                'method' => 'POST',
                'folder' => 'helper',
                'return' => 'Uploader@startUploadChunk',
            ],
            [
                'path' => '/all-files/{token}',
                'method' => 'GET',
                'folder' => 'helper',
                'return' => 'Uploader@allFiles',
            ],
            [
                'path' => '/delete/{id}',
                'method' => 'DELETE',
                'folder' => 'helper',
                'return' => 'Uploader@delete',
            ],
            [
                'path' => '/search/{token}',
                'method' => 'POST',
                'folder' => 'helper',
                'return' => 'Uploader@search',
            ],
            [
                'path' => '/search-by-type/{token}',
                'method' => 'POST',
                'folder' => 'helper',
                'return' => 'Uploader@searchByType',
            ],
            [
                'path' => 'upload/update-file/{id}',
                'method' => 'POST',
                'folder' => 'helper',
                'return' => 'Uploader@updateFileInfo',
            ],
        ],
    ],

    // NOT FOUND ROUTER
    [
        'path' => '*',
        'folder' => 'site',
        'return' => 'PagesController@index',
    ],
];

/* -----------------------------
 * This is condition array, please don't change any key just add values
 * This will be user if you want to redirect all route to the same controller function
 * -----
 * This condition will be good for Vue,Angular,React
 * -----
 * Let that framework to handle routes
 * ----
 * You can enable or disable this condition
 * ------------------------------
 */
$route_condition = [
    'ENABLED' => true,
    'ALL_TO' => [
        'folder' => 'site',
        'return' => 'HomeController@index',
    ],
    'EXCEPT' => ['/api/v1', '/api/v1/admin', '/api/v1/writer', '/upload'],
];

// Init routing
Router::init($routes, $route_condition);
