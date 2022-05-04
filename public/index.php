hola!!
<?php
require '../vendor/autoload.php';

use Carbon\Carbon;

printf("Ahora es: %s", Carbon::now());
echo "<br>";
echo phpversion();
echo "<br>";
echo 'hola mundo!!';