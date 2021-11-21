<?php

namespace App\service;

use App\Models\Parallax;

class ParallaxService
{

    //----------------------------- paginate
    public static function getPaginateParallax($number)
    {
        return Parallax::paginate($number);
    }


    //----------------------------- store
    public static function getCreateParallax($request , $image)
    {
        Parallax::create([
            "title" => $request->title,
            "titleSize" => $request->titleSize,
            "titleColor" => $request->titleColor,
            "body" => $request->body,
            "bodySize" => $request->bodySize,
            "bodyColor" => $request->bodyColor,
            "image" => $image,
            "alt" => $request->alt,
        ]);
    }



    //----------------------------- edit
    public static function getIdEdit($id)
    {
        return Parallax::findOrFail($id);
    }



    //----------------------------- update
    public static function getIdUpdate($id)
    {
        return Parallax::findOrFail($id);
    }

    public static function getImageUpdate($request)
    {
       return $request->file('image');
    }

    public static function getCreateUpdate($parallax , $request , $image)
    {
        $parallax->update([
            "title" => $request->title,
            "titleSize" => $request->titleSize,
            "titleColor" => $request->titleColor,
            "body" => $request->body,
            "bodySize" => $request->bodySize,
            "bodyColor" => $request->bodyColor,
            "image" => $image,
            "alt" => $request->alt,
        ]);
    }



    //----------------------------- delete
    public static function getImageId($id)
    {
       return Parallax::findOrFail($id);
    }

    public static function getDeleteParallax($id)
    {
      return  Parallax::destroy($id);
    }


}
