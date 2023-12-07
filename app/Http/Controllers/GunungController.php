<?php

namespace App\Http\Controllers;

use App\Models\Gunung;
use Illuminate\Http\Request;


class GunungController extends Controller
{
    public function gunung(Request $request)
    {
        $searchTerm = $request->input('search');

        $data = Gunung::when($searchTerm, function ($query, $searchTerm) {
            return $query->where('nama', 'LIKE', '%' . $searchTerm . '%');
        })->get();

        return view('admin.gunung', compact('data'));
    }
    public function tambah_gn(Request $request)
    {
        return view('admin/tambahgn');
    }
    public function tambahgn(Request $request)
    {
        Gunung::create([
            'nama' => $request->input('nama'),
            'lokasi' => $request->input('lokasi'),
            'ketinggian' => $request->input('ketinggian'),
            'deskripsi' => $request->input('deskripsi'),
        ]);

        return redirect()->route('gunung')->with('success', 'Data Gunung berhasil disimpan!');
    }
    public function tampilkandata($id_gunung)
    {

        $data = Gunung::find($id_gunung);

        return view('/admin/tampildata', compact('data'));
    }
    public function updatedata(Request $request, $id_gunung)
    {
        $data = Gunung::find($id_gunung);
        $data->update($request->all());
        return redirect()->route('gunung');
    }
    public function delete($id_gunung)
    {
        $data = Gunung::find($id_gunung);

        if (!$data) {
            return redirect()->route('gunung')->with('error', 'Data tidak ditemukan.');
        }

        $data->delete();

        return redirect()->route('gunung')->with('success', 'Data berhasil dihapus.');
    }
}
