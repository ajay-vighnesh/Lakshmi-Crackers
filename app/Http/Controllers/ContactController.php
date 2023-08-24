<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    function saveContact(Request $request)
    {
        Contact::create([
            'name' => $request->name,
            'email'=> $request->email,
            'phone_number' => $request->phone_number,
            'message' => $request->message,
        ]);

        return redirect()->back();
    }
}
