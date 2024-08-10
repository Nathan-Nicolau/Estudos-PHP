<?php
// Para chamar a consulta do Search

require_once "vendor/autoload.php";

use Gamer\Search\Search;

$busca = new Search();

$resultado = $busca->getAdressFromZipCode("15170000");

print_r($resultado);
