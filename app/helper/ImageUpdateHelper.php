<?php

namespace App\helper;

class ImageUpdateHelper
{

    public static function getUploadImageUpdate($file, $directory)
    {
        $image = $directory . "_" . time() . "_" . md5(rand(1000_000, 999_999)) . "_" . $file->getClientOriginalName();
        $file->move("assets/images/$directory/", $image);
        return $image;
    }


}
