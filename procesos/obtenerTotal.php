<?php
require_once __DIR__.'/../includes/config.php';
require_once __DIR__ .'/../includes/carrito.php';
$carrito=new carrito();
$total = $carrito->getTotal();
echo "$total";
?>