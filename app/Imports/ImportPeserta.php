<?php

namespace App\Imports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\ToModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class ImportPeserta implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    protected $request;

    public function __construct($request)
    {
        $this->request = $request;
    }

    // ... (kode lainnya)

    public function model(array $row)
    {
        // dd($row);
        $arpId = $this->request->input('arp_id');
        // Skip baris header
        if ($row[0] === "NAMA" && $row[1] === "EMAIL" && $row[2] === "NIP" && $row[3] ==="JABATAN" && $row[4] === "UNIT INDUK" && $row[5] === "UNIT PELAKSANA" && $row[6] === "NO HP") {
            return null;
        }
        $defaultPassword = Hash::make('12345678');
        $existingUser = User::where('nip', $row['2'])
            ->orWhere('email', $row['1'])
            ->first();

        if ($existingUser) {
            // Jika user sudah ada, tambahkan ARP ID
            $existingUser->update(['arp_id' => $arpId]);
        } else {
            // Jika user belum ada, buat user baru
            return new User([
                'name' => $row['0'],
                'email' => $row['1'],
                'password' => $defaultPassword,
                'nip' => $row['2'],
                'jabatan' => $row['3'],
                'unit_induk' => $row['4'],
                'unit_pelaksana' => $row['5'],
                'no_hp' => $row['6'],
                'arp_id' => $arpId,
            ]);
        }
    }
}
