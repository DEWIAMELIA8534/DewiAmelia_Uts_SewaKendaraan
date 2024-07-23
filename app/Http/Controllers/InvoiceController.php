<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use App\Models\Reservasi;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    public function index(): View
    {
        $invoice = Invoice::latest()->paginate(10);
        return view('levelAdmin.invoice.index', compact('invoice'));
    }

    public function create()
    {
        $reservasi = Reservasi::all();
        return view('levelAdmin.invoice.create', compact('reservasi'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'deskripsi' => 'required',
            'status' => 'required',
            'besar_dp' => 'required',
            'id_reservasi' => 'required',
        ]);

        Invoice::create($request->all());

        return redirect()->route('admin.invoice.index')
            ->with('success', 'invoice berhasil ditambahkan.');
    }

    public function show(string $id): View
    {
        $invoice = Invoice::findOrFail($id);

        return view('levelAdmin.invoice.show', compact('invoice'));
    }
    public function edit(string $id)
    {
        $invoice = Invoice::findOrFail($id);
        $reservasi = Reservasi::all();
        return view('levelAdmin.invoice.edit', compact('invoice', 'reservasi'));
    }

    public function update(Request $request, $id): RedirectResponse
    {
        $request->validate([
            'deskripsi' => 'required',
            'status' => 'required',
            'besar_dp' => 'required',
            'id_reservasi' => 'required',
        ]);

        $invoice = Invoice::findOrFail($id);
        $invoice->update($request->all());

        return redirect()->route('admin.invoice.index')
            ->with('success', 'Data invoice berhasil diubah!.');
    }

    public function destroy($id): RedirectResponse
    {
        $invoice = Invoice::findOrFail($id);
        $invoice->delete();
        return redirect()->route('admin.invoice.index')->with(['success' => 'Data invoice Berhasil Dihapus!']);
    }
}
