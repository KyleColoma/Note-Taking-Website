<?php 

use Core\App;

$db = App::resolve('Core\Database');

$notes = $db->query("select * from notes")->get();  

view("notes/index.view.php", [
    "heading"=> "My Notes",
    "notes"=> $notes,
]);
