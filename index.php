<?php
/**
 * BrutalCS VIP list
 * Author: Carl Nettelblad <carl.nettelblad@gmail.com>
 */
require_once 'vendor/autoload.php';

$dotenv = new Dotenv\Dotenv(__DIR__);
$dotenv->load();

$GLOBALS['rootPath'] = __DIR__;

$ajax = $_POST['ajax'] ?? false;

$container = new DI\Container();
$core = $container->get('BrutalCS\Core');
$core->init();

if ($ajax) {
    (new BrutalCS\Ajax)->handleRequest($ajax);
    exit;
}
