@extends('template.app')
@section('content')
<div class="section-header">
    <h1>Halaman Kamar</h1>
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
                <a href="{{ route('admin.kamar.create') }}" class="btn btn-md btn-info mb-3">TAMBAH</a>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama Kamar</th>
                            <th scope="col">Jenis Kamar</th>
                            <th scope="col">ukuran Kamar</th>
                            <th scope="col">Harga</th>
                            <th scope="col">ACTIONS</th>
                        </tr>
                        @forelse ($kamar as $index => $pengguna)
                        <tr>
                            <td class="text-center">
                                {{ ++$index }}
                            </td>
                            <td>{{ $pengguna->nama_kamar }}</td>
                            <td>{{ $pengguna->jenis_kamar }}</td>
                            <td>{{ $pengguna->ukuran_kamar}}</td>
                            <td>{{ $pengguna->harga }}</td>
                            <td class="text-center">
                                <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('admin.kamar.destroy', $pengguna->id_kamar) }}" method="POST">
                                    <a href="{{ route('admin.kamar.show', $pengguna->id_kamar) }}" class="btn btn-sm btn-primary">SHOW</a>
                                    <a href="{{ route('admin.kamar.edit', $pengguna->id_kamar) }}" class="btn btn-sm btn-primary">EDIT</a> @csrf @method('DELETE')
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