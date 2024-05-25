<?php 

// Routes for handling multiple request

// Home Page
$router -> get("/", "controllers/index.php");

// About Page
$router -> get("/about", "controllers/about.php");

// Contact Page
$router -> get("/contact", "controllers/contact.php");

// Notes Page (Shows the entire list of notes)
$router -> get("/notes", "controllers/notes/index.php");

// Single Note Page (Shows the content of the note)
$router -> get("/note", "controllers/notes/show.php");

// Single Note Page (Deletes the specified note)
$router -> delete('/note', "controllers/notes/destroy.php");

// Single Note Page (Edit Content)
$router -> get("/note/edit", "controllers/notes/edit.php");
$router -> patch("/note", "controllers/notes/update.php");

// Single Note Page (Create a new note)
$router -> get("/notes/create", "controllers/notes/create.php");
$router -> post("/notes", "controllers/notes/store.php");

// Registration Page (Create and Store a new user)
$router -> get("/register", "controllers/registration/create.php");
$router -> post("/register", "controllers/registration/store.php");