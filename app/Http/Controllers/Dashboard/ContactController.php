<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\Contact\EditRequest;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::all();
        return view('admin.contacts.index', compact('contacts'));
    }
    public function edit($id)
    {
        $data = Contact::find($id);
        return view('dashboard.contact.edit', compact('data'));
    }
    public function update(EditRequest $request, $id)
    {
        $contact = Contact::find($id);
        $data = $contact->update($request->all());
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