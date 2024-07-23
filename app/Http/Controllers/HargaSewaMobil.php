<?php

namespace App\Http\Controllers;

use App\Models\Harga_sewa_mobil;
use App\Models\Kamar;
use App\Models\Mobil;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class HargaSewaMobilController extends Controller
{
    public function index(): View
    {
        $hargasewamobil = Harga_sewa_mobil::latest()->paginate(10);
        return view('levelAdmin.hargasewamobil.index', compact('hargasewamobil'));
    }

    public function create()
    {
        $kamar = Mobil::all();
        return view('levelAdmin.hargasewamobil.create', compact('kamar'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'harga' => 'required',
            'available_room' => 'required',
            'tanggal' => 'required',
            'id_kamar' => 'required',
        ]);

        Harga_sewa_mobil::create($request->all());

        return redirect()->route('admin.hargasewamobil.index')
            ->with('success', 'Harga sewa mobil berhasil ditambahkan.');
    }

    public function show(string $id): View
    {
        $hargasewamobil = Harga_sewa_mobil::findOrFail($id);

        return view('levelAdmin.hargasewamobil.show', compact('hargasewamobil'));
    }

    public function edit(string $id)
    {
        $hargasewamobil = Harga_sewa_mobil::findOrFail($id);
        $kamar = Mobil::all();
        return view('levelAdmin.hargasewamobil.edit', compact('hargasewamobil', 'kamar'));
    }

    public function update(Request $request, $id): RedirectResponse
    {
        $request->validate([
            'harga' => 'required',
            'available_room' => 'required',
            'tanggal' => 'required',
            'id_kamar' => 'required',
        ]);

        $hargasewamobil = Harga_sewa_mobil::findOrFail($id);
        $hargasewamobil->update($request->all());

        return redirect()->route('admin.hargasewamobil.index')
            ->with('success', 'Data harga sewa mobil berhasil diubah!.');
    }

    public function destroy($id): RedirectResponse
    {
        $hargasewamobil = Harga_sewa_mobil::findOrFail($id);
        $hargasewamobil->delete();
        return redirect()->route('admin.hargasewamobil.index')->with(['success' => 'Data harga sewa mobil Berhasil Dihapus!']);
    }
}
