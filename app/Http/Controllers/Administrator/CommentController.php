<?php

namespace App\Http\Controllers\Administrator;

use App\helper\SessionHelper;
use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\service\CommentService;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function index()
    {
//      $comment = Comment::with('news')->paginate(5);
        $comment = CommentService::getPaginateIndex(5);
        return view('admin.comment.index', compact('comment'));
    }

    public function update(Request $request, $id)
    {
//      dd(intval($request->publish));  |  dd($id);  // intval() فقط عددی میاره
        $comment = CommentService::getIdUpdate($id);  // id
        CommentService::getCreateUpdate($comment, $request);  // create
        if ($request->publish == 1) {
            SessionHelper::getSessionActive();
        }
        if ($request->publish == 0) {
            SessionHelper::getSessionDeactive();
        }
//        $url = $request->url();
      return redirect()->route('comment.index');
//        return redirect($url);

    }


    public function destroy($id)
    {
        $id = CommentService::getIdIntval($id);
        CommentService::getDeleteDestroy($id);
        SessionHelper::getSessionDelete();
        return redirect()->route('comment.index');
//      return redirect('comment');
//      return back();
    }

}
