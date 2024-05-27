<?php

// Routes for handling multiple request

// Home Page
$router->get("/", "index.php");

// About Page
$router->get("/about", "about.php");

// Contact Page
$router->get("/contact", "contact.php");

// Notes Page (Shows the entire list of notes)
$router->get("/notes", "notes/index.php")->only("auth");

// Single Note Page (Shows the content of the note)
$router->get("/note", "notes/show.php");

// Single Note Page (Deletes the specified note)
$router->delete('/note', "notes/destroy.php");

// Single Note Page (Edit Content)
$router->get("/note/edit", "notes/edit.php");
$router->patch("/note", "notes/update.php");

// Single Note Page (Create a new note)
$router->get("/notes/create", "notes/create.php");
$router->post("/notes", "notes/store.php");

// Registration Page (Create and Store a new user)
$router->get("/register", "registration/create.php")->only("guest");
$router->post("/register", "registration/store.php");

// Login
$router->get("/login", "session/create.php")->only("guest");
$router->post("/session", "session/store.php")->only("guest");

//Logout    
$router->delete("/session", "session/destroy.php")->only("auth");