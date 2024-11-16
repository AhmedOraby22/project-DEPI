<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $datas = Contact::all();
        return view('admin.contacts.index', compact('datas'));
    }
    public function edit($id)
    {
        $data = Contact::find($id);
        return view('dashboard.contact.edit', compact('data'));
    }
    public function update(Request $request, $id)
    {
        $data = Contact::find($id);
        $data = $data->update($request->all());
        if($data)
        {
            return redirect(route('dashboard.contact.edit', $id))->with("message", 'Done');
        }
        return redirect(route('dashboard.contact.edit', $id))->with('message_false','problem');
    }

    public function show($id)
    {
        $data = Contact::find($id);
        return view('dashboard.contact.profile', compact('data'));
    }

    public function delete($id)
    {
        $data = Contact::find($id);
        if($data)
        {
            $data->delete();
            return redirect(route('dashboard.contact.index'))->with("message", 'Done');
        }
        return redirect(route('dashboard.contact.index'))->with('message_false','problem');
    }
}