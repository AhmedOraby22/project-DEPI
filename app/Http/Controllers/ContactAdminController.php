<?php

namespace App\Http\Controllers;

use App\Models\ContactAdmin;
use Illuminate\Http\Request;
class ContactAdminController extends Controller
{
    public function index()
    {

        $contacts = Contact::all();
   
        return view('admin.contacts.index', compact('contacts'));
    }
}