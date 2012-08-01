<?php
error_reporting(E_ALL);
require_once 'squishy/config.php';
require_once 'squishy/lib/squishy.class.php';

$squishy = new squishy($config);

$squishy->render('template');
$squishy->cache();

$squishy->render('cache');
$squishy->serve();
?>