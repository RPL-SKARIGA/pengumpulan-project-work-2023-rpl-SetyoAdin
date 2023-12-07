<?php

namespace App\Http\Controllers;

use App\Models\Pendaki;
use Illuminate\Http\Request;

class StatusPendakianController extends Controller
{
    public function editStatus($id_pendaki)
    {
        $pendaki = Pendaki::find($id_pendaki);

        // Logika untuk menentukan opsi status sesuai kebutuhan
        $statusOptions = ['Belum Mendaki', 'Mendaki', 'Sudah Turun'];

        return view('pendaki.editStatus', compact('pendaki', 'statusOptions'));
    }

    public function updateStatus(Request $request, $id_pendaki)
    {
        $pendaki = Pendaki::find($id_pendaki);

        // Validasi data yang diterima dari formulir jika diperlukan
        $request->validate([
            'status' => 'required|in:Belum Mendaki,Mendaki,Sudah Turun',
        ]);

        // Ubah status pendakian
        $pendaki->status = $request->input('status');
        $pendaki->save();

        // Redirect atau kirim respons sesuai kebutuhan
        return redirect()->route('pendaki.index')->with('success', 'Status pendakian berhasil diperbarui.');
    }
}
