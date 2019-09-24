<?php

require_once 'core/bootstrap.php';

function isPost(): bool
{
    return $_SERVER['REQUEST_METHOD'] === 'POST';
}

function hasSubmitedName (): bool
{
    return isset($_POST['name']);    
}

if(isPost() && hasSubmitedName())
{
    $query->insert('users', $_POST['name']);
}

header("Location: /");
die();