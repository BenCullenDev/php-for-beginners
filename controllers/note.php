<?php
$heading = "Note";

$config = require "config.php";
$db = new Database($config['database']);

$note = $db->query('SELECT * FROM notes where id = :id', [
    'id' => $_GET['id']
])->findOrFail();
$currentUserId = 3;
Authorise($note['user_id'] === $currentUserId);


require "views/note.view.php";
