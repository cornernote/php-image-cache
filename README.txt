----------------------------------
Image Cache using phpThumb and Mod_Rewrite
----------------------------------

Copyright (c) 2012 cornernote, Brett O'Donnell <cornernote@gmail.com>

Source Code: https://github.com/cornernote/php-image-cache
Home Page: http://mrphp.com.au/blog/image-cache-using-phpthumb-and-modrewrite

This program is free software; you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation; either version 3 of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU General Public License for more details.

You should have received a copy of the GNU General Public License along with this program; if not, write to the Free Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA 02110-1301 USA.


----------------------------------
Description
----------------------------------

Generate thumbs by visiting a URL such as your.com/thumbs/50x50/images/image.jpg. This will create a 50x50px thumbnail of your.com/images/image.jpg.

The thumb will be stored on your server at your.com/thumbs/50x50/images/image.jpg so the next request for the same image will be loaded without loading php for ultra fast image cache.
