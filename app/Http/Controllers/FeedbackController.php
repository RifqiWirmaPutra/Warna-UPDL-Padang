<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feedback;
class FeedbackController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'nama_visit' => 'required',
            'email_visit' => 'required|email',
            'subject' => 'required',
            'pesan' => 'required',
            
        ]);

        // Set status sebagai 0 (belum terbaca)
        $request['status'] = 0;

        Feedback::create($request->all());

        return redirect()->route('feedback.index')->with('success', 'Terimakasih, Pesan anda sudah terkirim.');
    }

    public function index()
    {
        $feedbacks = Feedback::all();
        return view('user.feedback-peserta', compact('feedbacks'));
    }

}
