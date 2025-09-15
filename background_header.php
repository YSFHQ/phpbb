<?php

$base_path = __DIR__.'/styles/ysfhq/theme/images/';

$eventend = new DateTime('2019-01-21T04:00:00Z');
$now = new DateTime();

// check if we should use a special event banner
if ($eventend > $now) {
    $base_path .= 'special_event_banners';
} else {
    $base_path .= 'standard_banners';
}

// get the list of files in the dir
chdir($base_path);
$custom_images = array_merge(
    glob('*.jpg'),
    glob('*.png'),
    glob('*.gif')
);

// choose a random file in the list
$file_path = $custom_images[mt_rand(0, count($custom_images) - 1)];

header('Cache-Control: private, max-age=60');
header('Location: '.str_replace(__DIR__, '', $base_path.'/'.$file_path));
