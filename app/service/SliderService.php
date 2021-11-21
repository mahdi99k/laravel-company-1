<?php

namespace App\service;

use App\Models\Slider;

class SliderService
{

    //-------------------------------------- Paginate
    public static function getPaginateIndex($number)
    {
        return Slider::paginate($number);
    }


    //-------------------------------------- Store
    public static function getCreateStore($request, $image)
    {
        Slider::create([
            "caption" => $request->caption,
            "image" => $image,
            "alt" => $request->alt,
            "link" => $request->link,
        ]);
    }


    //-------------------------------------- Edit
    public static function getIdEdit($id)
    {
        return Slider::findOrFail($id);
    }


    //-------------------------------------- Update

    public static function getCreateUpdate($slider , $request , $image)
    {
        $slider->update([
            "caption" => $request->caption,
            "image" => $image,
            "alt" => $request->alt,
            "link" => $request->link,
        ]);
    }


    //-------------------------------------- Destroy
    public static function getIdImageDestroy($id)
    {
        return Slider::findOrFail($id)->image;
    }

    public static function getIdDestroy($id)
    {
       return Slider::destroy($id);
    }


}
