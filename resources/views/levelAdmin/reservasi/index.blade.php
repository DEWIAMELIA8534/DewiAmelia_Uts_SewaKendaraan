@extends('template.app')
@section('content')
<div class="section-header">
    <h1>Halaman Reservasi</h1>
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
                <a href="{{ route('admin.reservasi.create') }}" class="btn btn-md btn-info mb-3">TAMBAH</a>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Customer ID</th>
                            <th scope="col">Tanggal</th>
                            <th scope="col">Tanggal Mulai</th>
                            <th scope="col">Tanggal Akhir</th>
                            <th scope="col">ID Hotel</th>
                            <th scope="col">ACTIONS</th>
                        </tr>
                        @forelse ($reservasi as $index => $pengguna)
                        <tr>
                            <td class="text-center">
                                {{ ++$index }}
                            </td>
                            <td>{{ $pengguna->customer_id }}</td>
                            <td>{{ $pengguna->tanggal }}</td>
                            <td>{{ $pengguna->tanggal_mulai}}</td>
                            <td>{{ $pengguna->tanggal_akhir }}</td>
                            <td>{{ $pengguna->id_hotel }}</td>
                            <td class="text-center">
                                <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('admin.reservasi.destroy', $pengguna->id_reservasi) }}" method="POST">
                                    <a href="{{ route('admin.reservasi.show', $pengguna->id_reservasi) }}" class="btn btn-sm btn-primary">SHOW</a>
                                    <a href="{{ route('admin.reservasi.edit', $pengguna->id_reservasi) }}" class="btn btn-sm btn-primary">EDIT</a> @csrf @method('DELETE')
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