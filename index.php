<?php

require 'config/paths.php';
require 'config/database.php';

require 'libs/model.php';
require 'libs/view.php';
require 'libs/controller.php';

require 'libs/session.php';
require 'libs/user_guard.php';

require 'libs/database.php';
require 'libs/bootstrap.php';

Session::init();
$bootstrap = new Bootstrap();

?>