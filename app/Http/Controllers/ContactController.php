<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function onContactSend(Request $request) {
        $name = $request->name;
        $email = $request->email;
        $msg = $request->msg;

        $result = Contact::insert([
            'name' => $name,
            'email' => $email,
            'message' => $msg
        ]);

        if($result == true) {
            return 1;
        } else {
            return 0;
        }
    }
}
