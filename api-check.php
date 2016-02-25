<?php

define('IN_PHPBB', true);
$phpbb_root_path = (defined('PHPBB_ROOT_PATH')) ? PHPBB_ROOT_PATH : './';
$phpEx = substr(strrchr(__FILE__, '.'), 1);
include($phpbb_root_path . 'common.' . $phpEx);

$apikey = request_var('apikey', '', true);

$owner = $auth_api_keys[$apikey];

if (strlen($owner)==0) {
    die(header('HTTP/1.1 401 Unauthorized'));
}

header('Content-Type: application/json');
echo json_encode($owner);

