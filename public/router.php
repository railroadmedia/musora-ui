<?php

require_once('../vendor/autoload.php');

use Jenssegers\Blade\Blade;

$blade = new Blade('../blade', '../cache');

$filePath = substr($_SERVER['REQUEST_URI'], 7);
$filePathDots = str_replace('/', '.', $filePath);

echo $blade->make($filePath)->render();