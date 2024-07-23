<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Harga_hari_ini;
use App\Models\Harga_sewa_mobil;
use App\Models\Reservasi;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ReservasiController extends Controller
{
    public function index(): View
    {
        $reservasi = Reservasi::latest()->paginate(10);
        return view('levelAdmin.reservasi.index', compact('reservasi'));
    }

    public function create()
    {
        $customer = Customer::all();
        $hargahariini = Harga_sewa_mobil::all();
        return view('levelAdmin.reservasi.create', compact('customer', 'hargahariini'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'customer_id' => 'required|',
            'tanggal' => 'required',
            'tanggal_mulai' => 'required',
            'tanggal_akhir' => 'required',
            'id_hotel' => 'required',
        ]);

        Reservasi::create($request->all());

        return redirect()->route('admin.reservasi.index')
            ->with('success', 'Reservasi berhasil ditambahkan.');
    }

    public function show(string $id): View
    {
        $reservasi = Reservasi::findOrFail($id);

        return view('levelAdmin.reservasi.show', compact('reservasi'));
    }
    public function edit(string $id)
    {
        $reservasi = Reservasi::findOrFail($id);
        $customer = Customer::all();
        $hargahariini = Harga_sewa_mobil::all();
        return view('levelAdmin.reservasi.edit', compact('reservasi', 'customer', 'hargahariini'));
    }

    public function update(Request $request, $id): RedirectResponse
    {
        $request->validate([
            'customer_id' => 'required|',
            'tanggal' => 'required',
            'tanggal_mulai' => 'required',
            'tanggal_akhir' => 'required',
            'id_hotel' => 'required',
        ]);

        $reservasi = Reservasi::findOrFail($id);
        $reservasi->update($request->all());

        return redirect()->route('admin.reservasi.index')
            ->with('success', 'Data reservasi berhasil diubah!.');
    }

    public function destroy($id): RedirectResponse
    {
        $reservasi = Reservasi::findOrFail($id);
        $reservasi->delete();
        return redirect()->route('admin.reservasi.index')->with(['success' => 'Data reservasi Berhasil Dihapus!']);
    }
}
