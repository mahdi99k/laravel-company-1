<?php

namespace App\service;

use App\Models\Comment;

class CommentService
{

    //----------------------------------------- paginate
    public static function getPaginateIndex($number)
    {
        return Comment::with('news')->paginate($number);
    }


    //----------------------------------------- update
    public static function getIdUpdate($id)
    {
        return Comment::findOrFail($id);
    }

    public static function getCreateUpdate($comment , $request)
    {
        $comment->update([
            'publish' => $request->publish,
        ]);
    }


    //----------------------------------------- destroy
    public static function getIdIntval($id)
    {
        return intval($id);
    }


    public static function getDeleteDestroy($id)
    {
       return Comment::destroy($id);
    }

}
