@extends('template.app')
@section('content')
<div class="section-header">
    <h1>Halaman Harga Sewa Mobil</h1>
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
                <a href="{{ route('admin.hargasewamobil.create') }}" class="btn btn-md btn-info mb-3">TAMBAH</a>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Harga</th>
                            <th scope="col">Available Mobil</th>
                            <th scope="col">Tanggal</th>
                            <th scope="col">ID Mobil</th>
                            <th scope="col">ACTIONS</th>
                        </tr>
                        @forelse ($hargasewamobil as $index => $sewamobil)
                        <tr>
                            <td class="text-center">
                                {{ ++$index }}
                            </td>
                            <td>{{ $sewamobil->harga }}</td>
                            <td>{{ $sewamobil->available_mobil }}</td>
                            <td>{{ $sewamobil->tanggal }}</td>
                            <td>{{ $sewamobil->id_mobil }}</td>
                            <td class="text-center">
                                <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('admin.hargasewamobil.destroy', $sewamobil->id_harga) }}" method="POST">
                                    <a href="{{ route('admin.hargasewamobil.show', $sewamobil->id_harga) }}" class="btn btn-sm btn-primary">SHOW</a>
                                    <a href="{{ route('admin.hargasewamobil.edit', $sewamobil->id_harga) }}" class="btn btn-sm btn-primary">EDIT</a> 
                                    @csrf 
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <div class="alert alert-danger">
                            Data Harga Sewa Mobil Belum Ada.
                        </div>
                        @endforelse
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
