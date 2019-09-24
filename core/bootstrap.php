<?php

require 'helpers.php';
require __DIR__ . '/../users.php';
require 'database/connection.php';
require 'database/queryBuilder.php';
$config = require 'config.php';
$query = new QueryBuilder(connection::make($config['database']));