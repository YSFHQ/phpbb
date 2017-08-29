<?php

$base_path = __DIR__.'/styles/ysfhq/theme/images/';

$eventend = new DateTime('2000-01-01T00:00:00Z');
$now = new DateTime();

// check if we should use a special event banner
if ($eventend > $now) {
    $base_path .= 'special_event_backgrounds';
} else {
    $base_path .= 'standard_backgrounds';
}

// get the list of files in the dir
chdir($base_path);
$custom_images = glob('*.{jpg,png,gif}', GLOB_BRACE);

// choose a random file in the list
$file_path = $custom_images[mt_rand(0, count($custom_images) - 1)];

header('Content-type: '.mime_content_type($file_path));
readfile($file_path);

