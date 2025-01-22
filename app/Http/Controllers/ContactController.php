<?php

namespace App\Http\Controllers;
use App\Models\Contact;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        $contacts = Contact::all();
        return view('admin.contact.index', compact('contacts'));
        
    }

    public function markAsRead($id)
    {
        $contact = Contact::findOrFail($id);
        $contact->update(['status' => 1]);

        return response()->json(['success' => true, 'status' => 1]);

        // return response()->json(['success' => true]);
        // return response()->json(['success' => true, 'status' => 'sudah dibaca']);
    }

    // Contoh controller
    public function getStatus($id)
    {
        $contact = Contact::findOrFail($id);
        return response()->json(['status' => $contact->status]);
    }
    
}


