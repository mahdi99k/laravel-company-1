<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Link;
use App\Models\News;
use App\Models\Parallax;
use App\Models\Seo;
use App\Models\Slider;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
//      $seo = Seo::orderBy('id', 'desc')->take(1)->skip(0)->get();  // id (column)   desc (end)  |  take(1) بگیز یکی  skip(0) از صفر شروع کن اولی که همون آخری
        $seo = Seo::orderBy('id', 'desc')->first();                                /* فقط میاد یکی میگیره تو شرط ما آیدی آخری */
        $parallax = Parallax::orderBy('id', 'desc')->first();
        $link = Link::orderBy('id', 'desc')->take(4)->skip(0)->get();               // need foreach  |  all()
        $news = News::orderBy('id', 'desc')->take(6)->skip(0)->get();
        $slider = Slider::orderBy('id', 'desc')->take(7)->skip(0)->get();         // $slider = Slider::all();
        return view('front.index', compact(['seo', 'parallax', 'link', 'news', 'slider']));
    }

    public function showNews($id)
    {
        $parallax = Parallax::orderBy('id', 'desc')->first();
        $link = Link::orderBy('id', 'desc')->take(4)->skip(0)->get();               // need foreach  |  all(
        $news = News::findOrFail($id);
        $comments = News::findOrFail($id)->comments()->where('publish', '=', 1)->get();  // تمام کامنت های تایید شده که درون خبر با توجه به آیدی نمایش بده
        $seo = News::where('id', '=', $id)->get(['title', 'keywords', 'description', 'author']); // ستون های جدولی که خودم خواستم برای صفحه خبر
        return view('front.showNews', compact(['parallax', 'link', 'news', 'comments', 'seo']));
    }

    public function comment(Request $request)
    {
        $id = $request->id; // database
        Comment::create([
            "fullname" => $request->fullname,
            "email" => $request->email,
            "comment" => $request->comment,
            "news_id" => $request->id,
        ]);
        session()->flash('comment', 'نظر شما با موفقیت ارسال شد');
        return redirect()->route('showNews', $id);   // 1)route   2)parameters
//      return redirect("showNews/$id");
//      return back();
    }


    public function search(Request $request)
    {
        $parallax = Parallax::orderBy('id', 'desc')->first();
        $link = Link::orderBy('id', 'desc')->take(4)->skip(0)->get();               // need foreach  |  all(
        $news = News::all();
        $search = News::where('title', 'like', "%" . $request->search . "%")->Where('summary', 'like', "%" . $request->serach . "%")->get();
        return view("front.showSearch", compact('parallax', 'link', 'search', 'news'));
//      return $query;
    }


}

