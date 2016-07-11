<?php

require_once '../vendor/autoload.php';

\OLOG\ConfWrapper::assignConfig(\GentelellaDemo\Config::get());

\OLOG\Router::matchAction(\GentelellaDemo\DemoAction::class, 0);