<?php

session_start();

require 'config/paths.php';
require 'config/database.php';

require 'libs/model.php';
require 'libs/view.php';
require 'libs/controller.php';
require 'libs/database.php';

require 'libs/bootstrap.php';
$bootstrap = new Bootstrap();

?>