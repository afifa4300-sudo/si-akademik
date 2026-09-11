<?php
return [

    'login' => [
        'controller'  => 'AuthController',
        'method'      => 'showLogin',
        'middleware'  => [],
    ],

    'login/process' => [
        'controller'  => 'AuthController',
        'method'      => 'login',
        'middleware'  => [],
    ],

    'logout' => [
        'controller'  => 'AuthController',
        'method'      => 'logout',
        'middleware'  => [],
    ],

    'dashboard' => [
        'controller'  => 'DashboardController',
        'method'      => 'index',
        'middleware'  => ['AuthMiddleware'],
    ],

    'mahasiswa' => [
        'controller'  => 'MahasiswaController',
        'method'      => 'index',
        'middleware'  => ['AuthMiddleware'],
    ],

    'mahasiswa/detail' => [
        'controller'  => 'MahasiswaController',
        'method'      => 'detail',
        'middleware'  => ['AuthMiddleware'],
    ],

    'dosen' => [
        'controller'  => 'DosenController',
        'method'      => 'index',
        'middleware'  => ['AuthMiddleware'],
    ],

];