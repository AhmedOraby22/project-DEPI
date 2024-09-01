<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function showForm()
    {
        return view('web.home'); 
    }

    public function send(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'gender' => 'required|integer|in:0,1',
            'message' => 'required|string',
        ]);

        // Store the contact message in the database
        Contact::create($validatedData);

        // Redirect or show a success message
        return redirect()->route('home')->with('success', 'Your message has been sent successfully!');
    }

    // Function to list all contacts for admins
    public function listContacts()
    {
        $contacts = Contact::all(); // Retrieve all contacts
        return view('dashboard.contactus', compact('contacts')); // Pass contacts to the view
    }
    // Function to show the edit form
    public function edit($id)
    {
        $contact = Contact::findOrFail($id);
        return view('dashboard.contact_edit', compact('contact'));
    }

    // Function to update the contact
    public function update(Request $request, $id)
    {
        $contact = Contact::findOrFail($id);

        // Validate the incoming request data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'gender' => 'required|integer|in:0,1',
            'message' => 'required|string',
        ]);

        // Update the contact
        $contact->update($validatedData);

        // Redirect or show a success message
        return redirect()->route('contacts.index')->with('success', 'Contact updated successfully!');
    }

    // Function to delete the contact
    public function destroy($id)
    {
        $contact = Contact::findOrFail($id);
        $contact->delete();

        // Redirect or show a success message
        return redirect()->route('contacts.index')->with('success', 'Contact deleted successfully!');
    }

    // Function to mark a contact as read
    public function markAsRead($id)
    {
        $contact = Contact::findOrFail($id);
        $contact->update(['isread' => true]);

        return redirect()->route('contacts.index')->with('success', 'Contact marked as read!');
    }
}