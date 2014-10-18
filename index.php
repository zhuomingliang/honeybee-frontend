<?php
define('APP_DIR', dirname(__FILE__) . '/');

require APP_DIR . 'Config/lib.config.php';
require APP_DIR . 'Config/app.config.php';

#require_once 'Honeybee/lib/Class/Core/Model/Mongo/Product.php';
#require_once 'Honeybee/lib/Class/Core/Model/Mongo/Tag.php';
#require_once 'lib/Class/Base/Config.php';

SmartAppController::createApp()->run();

#echo 'hi';
/*
$tag = new Tag();
$tag->remove();
$tag->save(array('name' => 'LV', 'count' => 20));
$tag->save(array('name' => 'Iphone', 'count' => 50));
$tag->save(array('name' => 'IPod', 'count' => 30));
$tag->save(array('name' => 'Acer', 'count' => 22));
$tag->save(array('name' => 'IBM', 'count' => 22));
foreach($tag->getHotTags(3) as $_tag) {
   var_dump($_tag);
}
*/
?>
