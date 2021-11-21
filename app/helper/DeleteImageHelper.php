<?php

namespace App\helper;

use App\Models\Parallax;

class DeleteImageHelper
{

    public static function getDeleteImage($deleteImage  , $directory)
    {
        if (file_exists("assets/images/$directory/" . $deleteImage->image)) {
            unlink("assets/images/$directory/" . $deleteImage->image);
        }
    }

}
