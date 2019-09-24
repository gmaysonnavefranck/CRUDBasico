<?php

require_once 'core/bootstrap.php';

function hasSubmitedId(): bool
{
    return isset($_GET['id']);    
}

if(!hasSubmitedId())
{
header("Location: /");
die();    
}

$user = $query->selectOne('users', $_GET['id']);

require 'views/edit.view.php';



