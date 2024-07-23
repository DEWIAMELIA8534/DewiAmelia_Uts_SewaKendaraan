<?php

namespace App\Http\Controllers;

use App\Models\Kamar;
use App\Models\Mobil;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class KamarController extends Controller
{
    
    public function index(): View
    {
        $mobil = Mobil::latest()->paginate(10);
        return view('levelAdmin.kamar.index', compact('kamar'));
    }

    public function create()
    {
        $mobil = Mobil::all();
        return view('levelAdmin.kamar.create', compact('kamar'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_kamar' => 'required|string|max:100',
            'jenis_kamar' => 'required',
            'ukuran_kamar' => 'required',
            'harga' => 'required',
        ]);

        Mobil::create($request->all());

        return redirect()->route('admin.kamar.index')
            ->with('success', 'Kamar berhasil ditambahkan.');
    }

    public function show(string $id): View
    {
        $mobil = Mobil::findOrFail($id);

        return view('levelAdmin.kamar.show', compact('kamar'));
    }
    public function edit(string $id)
    {
        $kamar = Mobil::findOrFail($id);

        return view('levelAdmin.kamar.edit', compact('kamar'));
    }

    public function update(Request $request, $id): RedirectResponse
    {
        $request->validate([
            'nama_kamar' => 'required|string|max:100',
            'jenis_kamar' => 'required',
            'ukuran_kamar' => 'required',
            'harga' => 'required',
        ]);

        $mobil = Mobil::findOrFail($id);
        $mobil->update($request->all());

        return redirect()->route('admin.kamar.index')->with('success', 'Data kamar berhasil diubah!.');
    }

    public function destroy($id): RedirectResponse
    {
        $mobil = Mobil::findOrFail($id);
        $mobil->delete();
        return redirect()->route('admin.customer.index')->with(['success' => 'Data Kamar Berhasil Dihapus!']);
    }
}
