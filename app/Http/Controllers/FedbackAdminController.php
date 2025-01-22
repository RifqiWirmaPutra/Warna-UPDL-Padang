<?php

namespace App\Http\Controllers;
use App\Models\Feedback;

use Illuminate\Http\Request;

class FedbackAdminController extends Controller
{
    public function index(){
        $feedbacks = Feedback::all();
        return view('admin.feedback.index', compact('feedbacks'));
        
    }

    public function markAsRead($id)
    {
        $feedback = Feedback::findOrFail($id);
        $feedback->update(['status' => 1]);

        return response()->json(['success' => true, 'status' => 1]);

        
    }

    // Contoh controller
    public function getStatus($id)
    {
        $feedback = Feedback::findOrFail($id);
        return response()->json(['status' => $feedback->status]);
    }
    
}


