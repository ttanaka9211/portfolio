<?php
require_once('./core/config.php');
$mysql = new mysql($host, $username, $password, $dbname);
if ($mysqli->connect_error) {
    error_log($mysqli->connect_error);
    exit;
}