<?php

namespace App\Http\Controllers;
use App\Models\ArpRencanaPe;
use App\Models\Arp;
use League\Csv\Reader;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;

class ArpRencanaPeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(string $arp_id)
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $arp_id)
    {
       //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $arp_id)
    {
        // $arp = Arp::findOrFail($arpId);
        $arp = Arp::with('users')->findOrFail($arp_id);
        $peserta = $arp->users;

        return view('admin.arp.subarp.rencana-peserta', compact('arp', 'peserta'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    
}
