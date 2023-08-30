<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// Home Barang
$routes->get('/', 'Barang::index');
$routes->get('barang', 'Barang::index');
// Halaman Tambah
$routes->get('barang/tambah', 'Barang::tambah');
// Halaman Edit
$routes->get('barang/edit/(:any)', 'Barang::edit/$1');
// Proses CRUD
// Insert
$routes->post('barang/add', 'Barang::add');
// Update
$routes->post('barang/update', 'Barang::update');
// Hapus
$routes->get('barang/hapus/(:any)', 'Barang::hapus/$1');
