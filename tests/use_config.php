<?php
/**
 * Date: 21.12.2018
 * Time: 0:22
 */


require_once dirname(__DIR__) . '/autoload.php';

echo '<h1>Тестовая страница</h1>';

$config = \App\Config::getInstance();
$config->set_data("db_name", 'profit');
$config->set_data("user", 'mysql');
$config->set_data("password", 'mysql');

$user = $config->get_data('user');
$pass = $config->get_data('password');
$db = $config->get_data('db_name');

$html = 'User: ' . $user . '<br>';
$html .= 'Pass: ' . $pass . '<br>';
$html .= 'DB: ' . $db . '<br>';
echo $html;