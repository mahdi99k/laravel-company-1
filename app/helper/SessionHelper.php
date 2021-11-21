<?php

namespace App\helper;

class SessionHelper
{

    public static function getSessionCreate()
    {
        session()->flash('create' , 'عملیات ساخت دیتا با موفقیت انجام شد');
    }

    public static function getSessionUpdate()
    {
        session()->flash('update' , 'عملیات به روز رسانی دیتا با موفقیت انجام شد');
    }

    public static function getSessionDelete()
    {
        session()->flash('delete', 'عملیات حذف دیتا با موفقیت انجام شد');
    }


    public static function getSessionActive()
    {
        session()->flash('active', 'کامنت در وب سایت نمایش داده می شود');
    }


    public static function getSessionDeactive()
    {
        session()->flash('deactive', 'کامنت در وب سایت نمایش داده نمی شود');
    }


}
