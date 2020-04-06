<?php
define("HOMEPAGE", $_SERVER['HTTP_HOST'] . DIRECTORY_SEPARATOR . "phpfull" . DIRECTORY_SEPARATOR . "public");
define("ROOT", dirname(__DIR__) . DIRECTORY_SEPARATOR);
define("APP", ROOT . "app" . DIRECTORY_SEPARATOR);
define("WWW", ROOT . "public" . DIRECTORY_SEPARATOR);
define("CONTROLLERS", APP . "controllers" . DIRECTORY_SEPARATOR);
define("MODELS", APP . "models" . DIRECTORY_SEPARATOR);
define("VIEWS", APP . "views" . DIRECTORY_SEPARATOR);
define("DATA", APP . "data" . DIRECTORY_SEPARATOR);
define("INCLUDES", VIEWS . "includes" . DIRECTORY_SEPARATOR);
define("GAMES", VIEWS . "games" . DIRECTORY_SEPARATOR);
define("TOPICS", VIEWS . "topics" . DIRECTORY_SEPARATOR);
?>
