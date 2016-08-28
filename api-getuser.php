<?php

define('IN_PHPBB', true);
$phpbb_root_path = (defined('PHPBB_ROOT_PATH')) ? PHPBB_ROOT_PATH : './';
$phpEx = substr(strrchr(__FILE__, '.'), 1);
include($phpbb_root_path . 'common.' . $phpEx);

if (!$auth_api_keys[request_var('apikey', '', true)]) {
    die(header('HTTP/1.1 401 Unauthorized'));
}

$user_id  = intval(request_var('u', ANONYMOUS));

// Get user...
$sql = 'SELECT username FROM ' . USERS_TABLE . ' WHERE ' . "user_id = $user_id";
$result = $db->sql_query($sql);
$member = $db->sql_fetchrow($result);
$db->sql_freeresult($result);

if (!$member) {
    die(header('HTTP/1.1 404 Not Found'));
}

header('Content-Type: application/json');
echo json_encode($member['username']);

