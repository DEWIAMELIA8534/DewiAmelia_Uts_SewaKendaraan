<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Harga_hari_ini;
use App\Models\Invoice;
use App\Models\Pembayaran;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class PembayaranController extends Controller
{
    public function index(): View
    {
        $pembayaran = Pembayaran::latest()->paginate(10);
        return view('levelAdmin.pembayaran.index', compact('pembayaran'));
    }

    public function create()
    {
        $customer = Customer::all();
        $invoice = Invoice::all();
        return view('levelAdmin.pembayaran.create', compact('customer', 'invoice'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'customer_id' => 'required|',
            'tanggal' => 'required',
            'metode_bayar' => 'required',
            'id_invoice' => 'required',
        ]);

        Pembayaran::create($request->all());

        return redirect()->route('admin.pembayaran.index')
            ->with('success', 'pembayaran berhasil ditambahkan.');
    }

    public function show(string $id): View
    {
        $pembayaran = Pembayaran::findOrFail($id);

        return view('levelAdmin.pembayaran.show', compact('pembayaran'));
    }
    public function edit(string $id)
    {
        $pembayaran = Pembayaran::findOrFail($id);
        $customer = Customer::all();
        $invoice = Invoice::all();
        return view('levelAdmin.pembayaran.edit', compact('pembayaran', 'customer', 'invoice'));
    }

    public function update(Request $request, $id): RedirectResponse
    {
        $request->validate([
            'customer_id' => 'required|',
            'tanggal' => 'required',
            'metode_bayar' => 'required',
            'id_invoice' => 'required',
        ]);

        $pembayaran = Pembayaran::findOrFail($id);
        $pembayaran->update($request->all());

        return redirect()->route('admin.pembayaran.index')
            ->with('success', 'Data pembayaran berhasil diubah!.');
    }

    public function destroy($id): RedirectResponse
    {
        $pembayaran = Pembayaran::findOrFail($id);
        $pembayaran->delete();
        return redirect()->route('admin.pembayaran.index')->with(['success' => 'Data pembayaran Berhasil Dihapus!']);
    }
}
