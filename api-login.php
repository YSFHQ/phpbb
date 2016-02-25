<?php

define('IN_PHPBB', true);
$phpbb_root_path = (defined('PHPBB_ROOT_PATH')) ? PHPBB_ROOT_PATH : './';
$phpEx = substr(strrchr(__FILE__, '.'), 1);
include($phpbb_root_path . 'common.' . $phpEx);

if (!$auth_api_keys[request_var('apikey', '', true)]) {
    die(header('HTTP/1.1 401 Unauthorized'));
}

$username = request_var('username', '', true);
$password = $request->untrimmed_variable('password', '', true);
$autologin  = false;
$viewonline = (int) false;
$admin = 0;

if (strlen($username)==0 || strlen($password)==0) {
    die(header('HTTP/1.1 400 Bad Request'));
}

$result = $auth->login($username, $password, $autologin, $viewonline, $admin);

if ($result['status'] == LOGIN_SUCCESS) {
    header('Content-Type: application/json');
    echo json_encode($result['user_row']['user_id']);
} else {
    die(header('HTTP/1.1 403 Forbidden'));
}

