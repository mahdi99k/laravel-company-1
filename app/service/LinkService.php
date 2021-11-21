<?php

namespace App\service;

class LinkService
{

    //----------------------------- paginate
    public static function getIdIndex($number)
    {
        return \App\Models\Link::paginate($number);
    }

    //----------------------------- store
    public static function getCreateStore($request)
    {
        \App\Models\Link::create([
            "name_link" => $request->name_link,
            "url" => $request->url
        ]);
    }


    //----------------------------- edit
    public static function getIdEdit($id)
    {
        return \App\Models\Link::findOrFail($id);
    }

    public static function getCreateUpdate($link, $request)
    {
        $link->update([
            "name_link" => $request->name_link,
            "url" => $request->url,
        ]);
    }


    //----------------------------- update
    public static function getIdUpdate($id)
    {
        return \App\Models\Link::findOrFail($id);
    }


    //----------------------------- delete
    public static function getIdDelete($id)
    {
        return \App\Models\Link::destroy($id);
    }


}
