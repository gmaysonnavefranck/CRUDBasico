<?php

require_once 'core/bootstrap.php';

function hasSubmitedId(): bool
{
    return isset($_GET['id']);    
}

if(hasSubmitedId())
{
    $query->delete('users', $_GET['id']);
}

header("Location: /");
die();