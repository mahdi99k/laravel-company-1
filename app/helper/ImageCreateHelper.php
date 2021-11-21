<?php

namespace App\helper;

class ImageCreateHelper
{


    public static function getUploadImage($request, $directory)
    {
        $file = $request->file('image');
        $image = "";
        if (!empty($file)) {
            $image = $directory . "_" . time() . "_" . md5(rand(1000_000, 999_999)) . "_" . $file->getClientOriginalName();
            $file->move("assets/images/$directory/", $image);
        }
        return $image;
    }


}
