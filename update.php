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
function hasSubmitedId (): bool
{
    return isset($_POST['id']);    
}


if(isPost() && hasSubmitedName() && hasSubmitedId())
{
    $query->update('users', $_POST['name'], $_POST['id']);
}
header("Location: /");
die();