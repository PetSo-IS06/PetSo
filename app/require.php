<?php

// Require libraries from 'libraries' folder

require_once 'libraries/Core.php';
require_once 'libraries/Controller.php';
require_once 'libraries/Database.php';

require_once 'config/config.php';
require_once 'helpers/session_helper.php';
require_once 'helpers/sms_API.php';
require_once 'helpers/mail_API.php';

// Instantiate the Core class
$init = new Core();