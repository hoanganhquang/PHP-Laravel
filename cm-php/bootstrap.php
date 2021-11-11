<?php

$root = __DIR__;
$root = str_replace("\\", "/", $root);

define("ROOT", $root);

require_once "app/config/routes.php";
require_once "app/core/route.php";
require_once "app/core/database.php";
require_once "app/core/model.php";
require_once "app/core/controller.php";
require_once "app/App.php";
