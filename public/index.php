<?php
require '../vendor/autoload.php';

use Carbon\Carbon;
use League\Plates\Engine;

// Create new Plates engine
$templates = new Engine('../templates');
echo $templates->render('prueba', [
    'title' => 'Plates',
    'content' => Carbon::now()->format('d/m/Y'),
]);

printf("Ahora es: %s", Carbon::now());
echo "<br>";
echo phpversion();
echo "<br>";
echo 'hola mundo!!';