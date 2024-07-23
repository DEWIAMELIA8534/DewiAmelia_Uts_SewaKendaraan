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

<div class="card border-0 shadow-sm rounded">
    <div class="card-body">
        <form action="{{ route('admin.hargasewamobil.store') }}" method="POST">
          @csrf
            <div class="form-group">
                <label for="harga">Harga</label>
                <input type="number" name="harga" class="form-control" id="harga" placeholder="Enter harga">
                @error('harga')
                <div class="alert alert-danger mt-2">
                    {{ $message }}
                </div>
                @enderror
              </div>
            <div class="form-group">
              <label for="available_mobil">Available Mobil</label>
              <input type="number" name="available_mobil" class="form-control" id="available_mobil" placeholder="Enter available mobil">
              @error('available_mobil')
              <div class="alert alert-danger mt-2">
                  {{ $message }}
              </div>
              @enderror
            </div>
            <div class="form-group">
              <label for="tanggal">Tanggal</label>
              <input type="date" name="tanggal" class="form-control" id="tanggal" placeholder="Tanggal">
              @error('tanggal')
              <div class="alert alert-danger mt-2">
                  {{ $message }}
              </div>
              @enderror
            </div>
            <div class="form-group">
              <label for="id_mobil">ID Mobil</label>
              <select class="form-control" name="id_mobil" id="id_mobil">
                @foreach ($mobil as $mobils)
                <option value="{{ $mobils->id_mobil }}">{{ $mobils->id_mobil }} - {{ $mobils->nama_mobil }}</option>
                @endforeach
               </select>
               @error('id_mobil')
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
    </div>
</div>

@endsection
