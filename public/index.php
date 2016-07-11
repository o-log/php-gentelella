<?php

require_once '../vendor/autoload.php';

\OLOG\ConfWrapper::assignConfig(\GentelellaDemo\DemoConfig::get());

\OLOG\Router::matchAction(\GentelellaDemo\DemoAction::class, 0);