<?php

namespace App\Http\Controllers;

use App\Models\Gunung;
use App\Models\Jalur;
use App\Models\Pendaki;
use App\Models\User;
use Illuminate\Http\Request;

class PendakiController extends Controller
{
    public function welcome()
    {
        $jumlahPendaki = Pendaki::count();
        $jumlahGunung = Gunung::count();
        $jumlahAdmin = User::count(); // Sesuaikan dengan kolom yang menandakan admin

        return view('/admin/welcome', compact('jumlahPendaki', 'jumlahGunung', 'jumlahAdmin'));
    }
    public function tutorial()
    {
        return view('/user/tutorial');
    }

    public function datapendaki(Request $request)
    {
        $searchTerm = $request->input('search');

        $data = Pendaki::when($searchTerm, function ($query, $searchTerm) {
            return $query->where('nama', 'LIKE', '%' . $searchTerm . '%');
        })->get();


        return  view('admin.datapendaki', compact('data'));
    }

    public function pendataan(Request $request)
    {
        $searchTerm = $request->input('search');

        $data = Pendaki::when($searchTerm, function ($query, $searchTerm) {
            return $query->where('nama', 'LIKE', '%' . $searchTerm . '%');
        })->get();

        return view('admin.pendataan', compact('data'));
    }
    public function admin()
    {
        return view('/layouts/admin');
    }
    public function user()
    {
        return view('/layouts/user');
    }
    public function home()
    {
        return view('user/home');
    }
    public function insert()
    {
        $gunung = Gunung::all();
        return view('user/insert', compact('gunung'));
    }

    public function insertdata(Request $request)
    {
        $data = new Pendaki($request->all());
        if ($request->hasFile('foto_ktp')) {
            $foto_ktp = $request->file('foto_ktp');
            $foto_ktp_name = $foto_ktp->getClientOriginalName();
            $foto_ktp->move('fotoktp/', $foto_ktp_name);
            $data->foto_ktp = $foto_ktp_name;
        }
        $data->save();
        return redirect()->back()->with('success', 'Data berhasil disimpan.');
    }
    public function tampil($id_pendaki)
    {
        $data = Pendaki::find($id_pendaki);
        return view('/admin/fiksturun', compact('data'));
    }

    public function fiksturun(Request $request, $id_pendaki)
    {
        // Temukan data pendaki berdasarkan ID
        $data = Pendaki::find($id_pendaki);

        // Periksa apakah data ditemukan
        if (!$data) {
            return redirect()->route('Pendaki')->with('error', 'Data tidak ditemukan.');
        }

        // Update tanggal turun dengan nilai dari input tanggal_turun
        $data->update([
            'tanggal_turun' => $request->input('tanggal_turun')
        ]);

        // Redirect ke route Pendaki
        return redirect()->route('pendataan')->with('success', 'Tanggal turun berhasil diperbarui.');
    }

    public function deletedt($id_pendaki)
    {
        $data = Pendaki::find($id_pendaki);

        if (!$data) {
            return redirect()->back()->with('error', 'Data not found');
        }

        // Lakukan pengecekan atau validasi tambahan sesuai kebutuhan Anda

        // Hapus data
        $data->delete();

        return redirect()->back()->with('success', 'Data successfully deleted');
    }
    public function deletedat($id_pendaki)
    {
        $data = Pendaki::find($id_pendaki);

        if (!$data) {
            return redirect()->back()->with('error', 'Data not found');
        }

        // Lakukan pengecekan atau validasi tambahan sesuai kebutuhan Anda

        // Hapus data
        $data->delete();

        return redirect()->back()->with('success', 'Data successfully deleted');
    }
    public function tdata($id_pendaki)
    {

        $data = Gunung::find($id_pendaki);

        return view('/admin/tampildata', compact('data'));
    }
}
