<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('ver_clientes','ClientesController::verClientes');
$routes->get('insertar_cliente','ClientesController::insertarCliente');
$routes->get('eliminar_cliente/(:num)','ClientesController::eliminarCliente/$1');
$routes->get('actualizar_cliente/(:num)','ClientesController::actualizarCliente/$1');
$routes->post('guardar_cliente','ClientesController::guardarCliente');
$routes->post('modificar_cliente','ClientesController::modificarCliente');
