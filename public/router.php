<?php

require_once('../vendor/autoload.php');

use Jenssegers\Blade\Blade;

$blade = new Blade('../blade', '../cache');

$filePath = substr($_SERVER['REQUEST_URI'], 7);
$filePathDots = str_replace('/', '.', $filePath);

if ($blade->exists($filePathDots)) {
    echo $blade->make($filePathDots)->render();
} else {
    echo "View not found using dot string: " . $filePathDots;
}