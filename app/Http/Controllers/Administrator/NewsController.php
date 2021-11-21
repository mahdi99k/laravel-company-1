<?php

namespace App\Http\Controllers\Administrator;

use App\helper\DeleteImageHelper;
use App\helper\ImageCreateHelper;
use App\helper\ImageUpdateHelper;
use App\helper\SessionHelper;
use App\Http\Controllers\Controller;
use App\Http\Requests\createNewsRequest;
use App\Http\Requests\updateNewsRequest;
use App\Models\News;
use App\service\NewsService;
use Illuminate\Http\Request;

class NewsController extends Controller
{


    public function index()
    {
        $news = NewsService::getPaginateIndex(4);
        return view('admin.news.index', compact("news"));
    }


    public function create()
    {
        return view('admin.news.create');
    }


    public function store(createNewsRequest $request)
    {
        $image = ImageCreateHelper::getUploadImage($request, "news");  // upload image
        NewsService::getCreateStore($request, $image);  // create
        SessionHelper::getSessionCreate();  // session
        return redirect()->route('news.create');
//      return redirect('news/create');
//      return back();
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $news = NewsService::getIdEdit($id);
        return view('admin.news.edit', compact('news'));
    }


    public function update(updateNewsRequest $request, $id)
    {
        $news = NewsService::getIdUpdate($id);  // get id
        $file = NewsService::getImageUpdate($request);  // get image
        $image = "";

        if (!empty($file)) {
            DeleteImageHelper::getDeleteImage($news, "news");  // delete image unlink
            $image = ImageUpdateHelper::getUploadImageUpdate($file, "news");

        } else {
            $image = $news->image; // image now
        }

        NewsService::getCreateUpdate($news, $request, $image);
        SessionHelper::getSessionUpdate();
        return redirect()->route('news.index');
//      return redirect('news');
    }


    public function destroy($id)
    {
        $deleteImage = NewsService::getIdImageDestroy($id);  // get image
        DeleteImageHelper::getDeleteImage($deleteImage, "news");  // delete image
        NewsService::getDeleteDestroy($id);  // delete
        SessionHelper::getSessionDelete();
        return redirect()->route('news.index');
//      return redirect('news');
//      return back();
    }


}

