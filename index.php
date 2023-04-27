<?php

require "functions.php";
require "Database.php";
require "Response.php";
require "router.php";

function Authorise($condition, $response = Response::FORBIDDEN)
{
    if ($condition) abort($response);
}

