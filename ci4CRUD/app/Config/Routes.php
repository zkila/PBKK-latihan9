<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// Halaman
$routes->get('/', 'Karyawan');
$routes->get('/tambah', 'Karyawan::tambah');
$routes->get('/edit/(:any)', 'Karyawan::edit/$1');

// Proses CRUD
$routes->post('tambah_proses', 'Karyawan::tambah_proses');
$routes->post('edit_proses', 'Karyawan::edit_proses');
$routes->get('hapus/(:any)', 'Karyawan::hapus/$1');
