<?php

$base_path = __DIR__.'/styles/ysfhq/theme/images/standard_backgrounds';

// get the list of files in the dir
chdir($base_path);
$custom_images = glob('*.{jpg,png,gif}', GLOB_BRACE);

// choose a random file in the list
$file_path = $custom_images[mt_rand(0, count($custom_images) - 1)];

header('Cache-Control: private, max-age=60');
header('Location: '.str_replace(__DIR__, '', $base_path.'/'.$file_path));
