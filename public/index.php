<?php

// Aqui é o front controller da aplicacao

$config = require_once '../config/db.php';

$app = new Application($config);
$app->run()
