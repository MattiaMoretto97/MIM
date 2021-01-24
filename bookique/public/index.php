<?php

defined('APPLICATION_PATH') || define('APPLICATION_PATH', realpath(dirname(__FILE__) . '/../app'));
const DS = DIRECTORY_SEPARATOR;

require APPLICATION_PATH . DS . 'config' . DS . 'config.php';

$page = get('page', 'home');
$model = $config['MODEL_PATH'] . $page . '.php';
$view = $config['VIEW_PATH'] . $page . '.php';
$_404 = $config['VIEW_PATH'] . '404.php';

if (file_exists($model)) {
    require $model;
}

if (file_exists($view)) {
    require $view;
} else {
    require $_404;
}

?>