<?php

namespace App\Http\Controllers\Administrator;

use App\helper\SessionHelper;
use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\service\ContactService;
use Illuminate\Http\Request;

class ContactController extends Controller
{

    public function index()
    {
        $contact = ContactService::getPaginateIndex(5);
        return view('admin.contact.index', compact('contact'));
    }


    public function store(Request $request)
    {
        ContactService::getCreateStore($request);
        SessionHelper::getSessionCreate();
        return redirect('/');
//      return redirect()->route('contact.store');
//      return back();
    }


    public function destroy($id)
    {
        ContactService::getIdDestroy($id);
        SessionHelper::getSessionDelete();
        return redirect()->route('contact.index');
//      return redirect("contact");
//      return back();
    }

}
