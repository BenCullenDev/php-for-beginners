<?php
$heading = "Create a New Note";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    dd('You submitted a form');
}

require 'views/note-create.view.php';