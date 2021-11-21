<?php

namespace App\Http\Controllers\Administrator;

use App\helper\SessionHelper;
use App\Http\Controllers\Controller;
use App\Http\Requests\createSeoRequest;
use App\Models\Seo;
use App\service\SeoService;
use Illuminate\Http\Request;

class SeoController extends Controller
{


    public function index()
    {
        $seo = SeoService::getPaginateSeo(4);         // get paginate
        return view('admin.seo.index', compact('seo'));
    }


    public function create()
    {
        return view('admin.seo.create');
    }


    public function store(createSeoRequest $request)
    {
        SeoService::getCreateSeo($request);              // get create
        SessionHelper::getSessionCreate();               // helper session
        return redirect()->route('seo.create');
//      return redirect('seo/create');
//      return  back();
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $seo = SeoService::getIdEditSeo($id);             // get findOrFail($id)
        return view('admin.seo.edit', compact('seo'));
    }


    public function update(createSeoRequest $request, $id)
    {
        $seo = SeoService::getIdUpdateSeo($id);            // get findOrFail($id)
        SeoService::getUpdateSeo($seo, $request);         // create update
        SessionHelper::getSessionUpdate();               // helper session
        return redirect()->route('seo.index');
//      return  redirect('seo');

    }


    public function destroy($id)
    {
        SeoService::getDeleteSeo($id);                   // delete destroy
        SessionHelper::getSessionDelete();               // helper session
        return redirect()->route('seo.index');
//      return redirect('seo');
//      return back();
    }


}
