<?php

namespace App\Http\Controllers;

use App\Models\ContactAdmin;

class ContactAdminController extends Controller
{
    public function index()
    {
        $contacts = ContactAdmin::all();
        return view('admin.contacts', compact('contacts'));
    }
}