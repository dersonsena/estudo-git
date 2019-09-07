<?php

// Aqui é o front controller da aplicacao

// O arquivo certo e o config.php
$config = require_once '../config/config.php';

$app = new Application($config);
$app->run()
