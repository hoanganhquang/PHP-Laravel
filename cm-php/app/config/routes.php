<?php
$routes["default_controller"] = "home";

$routes["san-pham/(.+)"] = "product/getId/$1";
$routes["san-pham"] = "product/all";
