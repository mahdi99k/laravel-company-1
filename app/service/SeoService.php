<?php

namespace App\service;

use App\Models\Seo;

class SeoService
{

    //----------------------------- paginate
    public static function getPaginateSeo($number)
    {
        return Seo::paginate($number);
    }


    //----------------------------- store
    public static function getCreateSeo($request)
    {
        Seo::create([
            "title" => $request->title,
            "keywords" => $request->keywords,
            "description" => $request->description,
            "author" => $request->author,
        ]);
    }


    //----------------------------- edit
    public static function getIdEditSeo($id)
    {
        return Seo::findOrFail($id);
    }


    //----------------------------- update
    public static function getIdUpdateSeo($id)
    {
        return Seo::findOrFail($id);
    }


    public static function getUpdateSeo($seo, $request)
    {
        $seo->update([                     // 1) name input    2) database
            "title" => $request->title,
            "keywords" => $request->keywords,
            "description" => $request->description,
            "author" => $request->author
        ]);
    }

    //----------------------------- delete
    public static function getDeleteSeo($id)
    {
        return Seo::destroy($id);
    }

}
