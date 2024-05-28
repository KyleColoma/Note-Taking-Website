<?php 

use Illuminate\Support\Collection;

const BASE_PATH = __DIR__ . "/../";

require BASE_PATH . "/vendor/autoload.php";

$numbers = new Collection([
    1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,
]);


$filteredVar = $numbers -> filter(function ($number) {
    return $number > 5;
});

var_dump($filteredVar);