<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactUsRequest;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    public function contactUs(Request $request)
    {

        return view('pages/contactUs');
    }


public function storeContactInfo (ContactUsRequest $request)
{
    \Log::debug($request -> validated());

    //$contactUsData = $request->validated();
    
    //dd($request->validated());

    redirect('/contact-us');
}

}
//dd($request->all());