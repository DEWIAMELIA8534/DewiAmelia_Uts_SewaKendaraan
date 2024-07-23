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

<div class="card border-0 shadow-sm rounded">
    <div class="card-body">
        <form action="{{ route('admin.reservasi.update', $reservasi->id_reservasi) }}" method="POST"  >
          @csrf
          @method('PUT')
          <div class="form-group">
            <label for="exampleFormControlSelect1">Customer ID</label>
            <select class="form-control" name="customer_id" id="exampleFormControlSelect1">
              <option value="{{ old('nama_barang', $reservasi->customer_id)}}">{{ old('nama_barang', $reservasi->customer_id)}}</option>
              @foreach ($customer as $cus)
              <option value="{{ $cus->customer_id }}">{{ $cus->customer_id }}</option>
              @endforeach
             </select>
             @error('customer_id')
             <div class="alert alert-danger mt-2">
                 {{ $message }}
             </div>
             @enderror
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Tanggal</label>
            <input type="date" name="tanggal" class="form-control" id="exampleInputPassword1" placeholder="Tanggal" value="{{ old('nama_barang', $reservasi->tanggal)}}">
            @error('tanggal')
            <div class="alert alert-danger mt-2">
                {{ $message }}
            </div>
            @enderror
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Tanggal Mulai</label>
            <input type="date" name="tanggal_mulai" class="form-control" id="exampleInputPassword1" placeholder="Tanggal" value="{{ old('nama_barang', $reservasi->tanggal_mulai)}}">
            @error('tanggal_mulai')
            <div class="alert alert-danger mt-2">
                {{ $message }}
            </div>
            @enderror
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Tanggal Akhir</label>
            <input type="date" name="tanggal_akhir" class="form-control" id="exampleInputPassword1" placeholder="Tanggal" value="{{ old('nama_barang', $reservasi->tanggal_akhir)}}">
            @error('tanggal_akhir')
            <div class="alert alert-danger mt-2">
                {{ $message }}
            </div>
            @enderror
          </div>
              <div class="form-group">
                <label for="exampleFormControlSelect1">ID Hotel</label>
                <select class="form-control" name="id_hotel" id="exampleFormControlSelect1">
                  <option value="{{ old('nama_barang', $reservasi->id_hotel)}}">{{ old('nama_barang', $reservasi->id_hotel)}}</option>
                  @foreach ($hargahariini as $hotel)
                  <option value="{{ $hotel->id_hotel }}">{{ $hotel->id_hotel }}</option>
                  @endforeach
                 </select>
                 @error('id_hotel')
                 <div class="alert alert-danger mt-2">
                     {{ $message }}
                 </div>
                 @enderror
              </div>
              <br/>
              <div class="form-group">
                <button type="submit" class="btn btn-primary">Simpan</button>
              </div>
          </form>

        
        {{-- {{ $user->links() }} --}}
    </div>
</div>

@endsection