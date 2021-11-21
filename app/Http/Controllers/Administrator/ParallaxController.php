<?php

namespace App\Http\Controllers\Administrator;

use App\helper\DeleteImageHelper;
use App\helper\ImageCreateHelper;
use App\helper\ImageUpdateHelper;
use App\helper\SessionHelper;
use App\Http\Controllers\Controller;
use App\Http\Requests\createParallaxRequest;
use App\Http\Requests\updateParallaxRequest;
use App\Models\Parallax;
use App\service\ParallaxService;
use Illuminate\Http\Request;

class ParallaxController extends Controller
{


    public function index()
    {
        $parallax = ParallaxService::getPaginateParallax(3);
        return view('admin.parallax.index', compact('parallax'));
    }


    public function create()
    {
        return view('admin.parallax.create');
    }


    public function store(createParallaxRequest $request)
    {
        $image = ImageCreateHelper::getUploadImage($request, "parallax"); // upload image
        ParallaxService::getCreateParallax($request, $image); // create
        SessionHelper::getSessionCreate();
        return redirect()->route('parallax.create');
//      return redirect('parallax/create');
//      return back();
    }


    public function edit($id)
    {
        $parallax = ParallaxService::getIdEdit($id); // get id
        return view('admin.parallax.edit', compact('parallax'));
    }


    public function update(updateParallaxRequest $request, $id)
    {
        $parallax = ParallaxService::getIdUpdate($id);
        $file = ParallaxService::getImageUpdate($request);
        $image = "";
        if (!empty($file)) {
            DeleteImageHelper::getDeleteImage($parallax, "parallax"); // delete image
            $image = ImageUpdateHelper::getUploadImageUpdate($file, "parallax");  // upload update img
        } else {
            $image = $parallax->image;  // image now
        }

        ParallaxService::getCreateUpdate($parallax, $request, $image);
        SessionHelper::getSessionUpdate();
        return redirect()->route('parallax.index');
//      return  redirect('parallax');
    }


    public function destroy($id)
    {
        $deleteImage = ParallaxService::getImageId($id); // get image
        DeleteImageHelper::getDeleteImage($deleteImage, "parallax");  // unlink
        ParallaxService::getDeleteParallax($id);  // delete image
        SessionHelper::getSessionDelete();
        return redirect()->route('parallax.index');
//      return redirect('parallax');
//      return back();
    }


}
