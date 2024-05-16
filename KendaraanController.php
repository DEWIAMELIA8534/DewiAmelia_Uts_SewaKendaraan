<?php

namespace App\Http\Controllers;

use App\Models\Kendaraan;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class KendaraanController extends Controller
{
    public function index(): View
    {
        $kendaraan = kendaraan::latest()->paginate(10);
        return view('kendaraan.index', compact('kendaraan'));
    }

    public function create(): View
    {
        return view('kendaraan.create');
    }

    public function store(Request $request): RedirectResponse
    {
        // Validate form data
        $request->validate([
            'no_pol'      => 'required|string|max:10',
            'no_mesin'    => 'required|string|max:20',
            'jnis_mobil'  => 'required|in:mpv,city,suv',
            'nama_mobil'  => 'required|string|max:40',
            'merk'        => 'required|in:honda,toyota,daihatsu',
            'kapasitas'   => 'required|string|max:5',
            'tarif'       => 'required|integer',
        ]);

        // Create a new Kendaraan instance
        Kendaraan::create([
            'no_pol'      => $request->no_pol,
            'no_mesin'    => $request->no_mesin,
            'jnis_mobil'  => $request->jnis_mobil,
            'nama_mobil'  => $request->nama_mobil,
            'merk'        => $request->merk,
            'kapasitas'   => $request->kapasitas,
            'tarif'       => $request->tarif,
        ]);

        // Redirect to index route with success message
        return redirect()->route('kendaraan.index')->with('success', 'Data Kendaraan berhasil disimpan!');
    }

    public function destroy($id): RedirectResponse
    {
        $kendaraan = User::findOrFail($id);
        $kendaraan->delete();
        return redirect()->route('kendaraan.index')->with(['success' => 'Data Kendaraan berhasil dihapus!']);
    }
}