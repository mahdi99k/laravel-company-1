<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ImageController extends Controller
{

    public static function uploadImageUpdate($file, $slider, $path)
    {
        $image = null;
        if (!empty($file)) {
            if (file_exists("assets/images/$path/" . $slider->image)) {
                unlink("assets/images/$path/$slider->image");
            }
            $image = time() . "_" . md5(rand(1000_000, 999_999)) . "_" . $file->getClientOriginalName();
            $file->move("assets/images/$path/", $image);
        } else {
            $image = $slider->image;  // image now  عکس جاری یا فعلی
        }
        return $image;
    }


    public static function deleteImage($deleteImage , $path)
    {
        if (file_exists("assets/images/$path/" . $deleteImage)) {
            unlink("assets/images/$path/" . $deleteImage);
        }
    }

}
