<?php

namespace App\Http\Controllers\Administrator;

use App\helper\DeleteImageHelper;
use App\helper\ImageCreateHelper;
use App\helper\SessionHelper;
use App\Http\Controllers\Controller;
use App\Http\Requests\createSliderRequest;
use App\Http\Requests\updateSliderRequest;
use App\Models\Slider;
use App\service\SliderService;
use Illuminate\Http\Request;

class SliderController extends Controller
{


    public function index()
    {
        $slider = SliderService::getPaginateIndex(4);
        return view('admin.slider.index', compact('slider'));
    }


    public function create()
    {
        return view("admin.slider.create");
    }


    public function store(createSliderRequest $request)
    {
        $image = ImageCreateHelper::getUploadImage($request, "slider");
        SliderService::getCreateStore($request, $image);
        SessionHelper::getSessionCreate();
        return redirect()->route('slider.create');
//      return redirect('slider/create');
//      return  back();
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $slider = SliderService::getIdEdit($id);
        return view('admin.slider.edit', compact('slider'));
    }


    public function update(updateSliderRequest $request, $id)
    {
        $slider = Slider::findOrFail($id);
        $file = $request->file('image');
        $image = ImageController::uploadImageUpdate($file, $slider, "slider");  // ImageController

        SliderService::getCreateUpdate($slider ,$request , $image);  // create
        SessionHelper::getSessionUpdate();
        return redirect()->route('slider.index');
//      return redirect('slider');
    }


    public function destroy($id)
    {
        $deleteImage = SliderService::getIdImageDestroy($id); //id slider
        ImageController::deleteImage($deleteImage , "slider");  // ImageController
        SliderService::getIdDestroy($id); //id destroy
        SessionHelper::getSessionDelete();
        return redirect()->route("slider.index");
//      return redirect("slider");
//      return back();
    }


}
