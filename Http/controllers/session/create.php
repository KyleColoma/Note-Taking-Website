<?php 

use Core\Session;

view("session/create.view.php", [
    "errors" => Session::get("_flash.errors")
]); 
