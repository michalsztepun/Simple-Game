<?php

require_once "autoloader.php";

$classes = new SplClassLoader('classes');
$classes->register();

$classes = new SplClassLoader('core');
$classes->register();