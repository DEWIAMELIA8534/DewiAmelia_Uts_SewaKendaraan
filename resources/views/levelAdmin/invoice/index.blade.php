@extends('template.app')
@section('content')
<div class="section-header">
    <h1>Halaman Invoice</h1>
    <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
        <div class="breadcrumb-item"><a href="#">Layout</a></div>
        <div class="breadcrumb-item">Default Layout</div>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <a href="{{ route('admin.invoice.create') }}" class="btn btn-md btn-info mb-3">TAMBAH</a>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Deskripsi</th>
                            <th scope="col">Status</th>
                            <th scope="col">Besar DP</th>
                            <th scope="col">ID Reservasi</th>
                            <th scope="col">ACTIONS</th>
                        </tr>
                        @forelse ($invoice as $index => $pengguna)
                        <tr>
                            <td class="text-center">
                                {{ ++$index }}
                            </td>
                            <td>{{ $pengguna->deskripsi }}</td>
                            <td>{{ $pengguna->status }}</td>
                            <td>{{ $pengguna->besar_dp}}</td>
                            <td>{{ $pengguna->id_reservasi }}</td>
                            <td class="text-center">
                                <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('admin.invoice.destroy', $pengguna->id_invoice) }}" method="POST">
                                    <a href="{{ route('admin.invoice.show', $pengguna->id_invoice) }}" class="btn btn-sm btn-primary">SHOW</a>
                                    <a href="{{ route('admin.invoice.edit', $pengguna->id_invoice) }}" class="btn btn-sm btn-primary">EDIT</a> @csrf @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <div class="alert alert-danger">
                            Data User Belum Ada.
                        </div>
                        @endforelse
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection