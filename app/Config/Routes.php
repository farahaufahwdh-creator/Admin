<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// ===== PUBLIC (landing page) =====
$routes->get('/', 'Home::index');

// ===== AUTH =====
$routes->get('/login', 'Auth::login');
$routes->post('/login/proses', 'Auth::authProcess');
$routes->get('/logout', 'Auth::logout');
$routes->get('/auth/registerBawaan', 'Auth::registerBawaan'); // hapus baris ini nanti kalau sudah gak perlu

// ===== ADMIN (dikunci filter 'auth') =====
$routes->group('admin', ['filter' => 'auth'], function ($routes) {
    $routes->get('/', 'admin::index');
    $routes->get('(:segment)', 'Admin::index/$1');
    $routes->get('(:segment)/tambah', 'Admin::form/$1');
    $routes->get('(:segment)/edit/(:num)', 'Admin::form/$1/$2');
    $routes->post('(:segment)/simpan', 'Admin::save/$1');
    $routes->get('(:segment)/hapus/(:num)', 'Admin::delete/$1/$2');
});
