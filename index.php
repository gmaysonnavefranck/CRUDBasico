<?php
require_once 'core/bootstrap.php';

$users = $query->selectAll('users', 'asd');

require 'views/index.view.php';

