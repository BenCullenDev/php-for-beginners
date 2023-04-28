<?php
$heading = "Create a New Note";
$config = require "config.php";
$db = new Database($config['database']);

$errors = [];
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (strlen($_POST['body']) === 0) {
        $errors['body'] = 'A description is required.';
    }
    if (strlen($_POST['body']) > 255) {
        $errors['body'] = 'A description must be less than 255 characters.';
    }
}

if (empty($errors)) {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $db->query('INSERT INTO notes (body, user_id) VALUES (:body, :user_id)', [
            'body' => $_POST['body'],
            'user_id' => 1
        ]);
    }
}


require 'views/note-create.view.php';