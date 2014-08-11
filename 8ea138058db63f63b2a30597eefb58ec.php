<?php
namespace Acme;

$autoloader = new Autoloader();

$autoloader->map(__NAMESPACE__, __DIR__ . '/..');
$autoloader->mapVendorDir(__DIR__ . '/vendor');

$autoloader->register();