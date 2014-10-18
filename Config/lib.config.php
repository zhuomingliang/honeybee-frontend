<?php
define('HONEYBEE_DIR', '/www/htm/Honeybee/honeybee/');

require HONEYBEE_DIR . 'config/lib.config.php';
require HONEYBEE_DIR . 'lib/Class/Core/Base/Log.php';

set_exception_handler('Log::save');
?>
