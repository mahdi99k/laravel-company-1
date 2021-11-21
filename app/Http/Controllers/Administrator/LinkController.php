<?php

namespace App\Http\Controllers\Administrator;

use App\helper\SessionHelper;
use App\Http\Controllers\Controller;
use App\Http\Requests\createLinkRequest;
use App\service\LinkService;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\DocBlock\Tags\Link;

class LinkController extends Controller
{


    public function index()
    {
        $link = LinkService::getIdIndex(5);  // paginate
        return view('admin.link.index', compact('link'));
    }


    public function create()
    {
        return view('admin.link.create');
    }


    public function store(createLinkRequest $request)
    {
       /*$this->validate($request, [
            "name_link" => 'required|string|min:3|max:150',
            "url" => 'required|url|max:150',
        ], [
            'name_link.required' => 'مقدار نام لینک الزامی می باشد',
            'url.required' => 'مقدار آدرس اینترنتی به صورت الزامی می باشد',
            'url.url' => 'مقدار آدرس اینترنتی باید یک لینک معتبر باشد',
        ]);*/

        LinkService::getCreateStore($request);  // create
        SessionHelper::getSessionCreate();
        return redirect()->route('link.create');
//      return redirect('link/create');
//      return  back();
    }


    public function edit($id)
    {
        $link = LinkService::getIdEdit($id);  // id edit
        return view('admin.link.edit', compact('link'));
    }


    public function update(createLinkRequest $request, $id)
    {
        $link = LinkService::getIdUpdate($id); // id update
        LinkService::getCreateUpdate($link, $request);  // create update

        SessionHelper::getSessionUpdate();
        return redirect()->route('link.index');
//      return redirect('link');
    }


    public function destroy($id)
    {
        LinkService::getIdDelete($id);  // id delete
        SessionHelper::getSessionDelete();
        return redirect()->route('link.index');
//      return redirect('link');
//      return back();
    }


}
