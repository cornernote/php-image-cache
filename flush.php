<?php
/**
 * Image Cache using phpThumb and Mod_Rewrite
 *
 * Copyright (c) 2012 Brett O'Donnell <brett@mrphp.com.au>
 * Source Code: https://github.com/cornernote/php-image-cache
 * Home Page: http://mrphp.com.au/blog/image-cache-using-phpthumb-and-modrewrite
 * License: GPLv3
 */

/**
 * delete all the cached thumbs
 */

delete_dir('./images');
echo 'done';

function delete_dir($path)
{
    $files = glob($path . '/*');
    foreach ($files as $file) {
        if (is_dir($file) && !is_link($file)) {
            delete_dir($file);
        }
        else {
            unlink($file);
        }
    }
    if ($path != './images') rmdir($path);
}