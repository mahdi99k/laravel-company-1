<?php

namespace App\service;

use App\Models\Contact;

class ContactService
{


    //--------------------------------------- index
    public static function getPaginateIndex($number)
    {
        return Contact::paginate($number);
    }


    //--------------------------------------- store
    public static function getCreateStore($request)
    {
        Contact::create([
            "fullname" => $request->fullname,
            "email" => $request->email,
            "comment" => $request->comment,
        ]);
    }


    //---------------------------------------destroy
    public static function getIdDestroy($id)
    {
        return Contact::destroy(intval($id));   // intval() فقط عدد باش برای امنیت بالا
    }

}
