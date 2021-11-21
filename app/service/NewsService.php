<?php

namespace App\service;

use App\Models\News;

class NewsService
{

    //-------------------------------------- paginate
    public static function getPaginateIndex($number)
    {
        return News::paginate($number);
    }


    //-------------------------------------- store
    public static function getCreateStore($request, $image)
    {
        News::create([
            "title" => $request->title,
            "image" => $image,
            "alt" => $request->alt,
            "summary" => $request->summary,
            "keywords" => $request->keywords,
            "description" => $request->description,
            "author" => $request->author,
        ]);
    }


    //-------------------------------------- edit
    public static function getIdEdit($id)
    {
        return News::findOrFail($id);
    }


    //-------------------------------------- update
    public static function getIdUpdate($id)
    {
        return News::findOrFail($id);
    }

    public static function getImageUpdate($request)
    {
        return $request->file('image');
    }

    public static function getCreateUpdate($news, $request, $image)
    {
        $news->update([
            "title" => $request->title,
            "image" => $image,
            "alt" => $request->alt,
            "summary" => $request->summary,
            "keywords" => $request->keywords,
            "description" => $request->description,
            "author" => $request->author,
        ]);
    }


    //-------------------------------------- delete
    public static function getIdImageDestroy($id)
    {
        return News::findOrFail($id);
    }

    public static function getDeleteDestroy($id)
    {
        return News::destroy($id);
    }


}
