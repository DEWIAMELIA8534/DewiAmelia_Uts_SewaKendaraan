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

<div class="card border-0 shadow-sm rounded">
    <div class="card-body">
        <form action="{{ route('admin.kamar.store') }}" method="POST"  >
          @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Nama Kamar</label>
                <input type="text" name="nama_kamar" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter nama kamar">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                @error('nama_kamar')
                <div class="alert alert-danger mt-2">
                    {{ $message }}
                </div>
                @enderror
              </div>
              <div class="form-group">
                <label for="exampleFormControlSelect1">Jenis Kamar</label>
                <select class="form-control" name="jenis_kamar" id="exampleFormControlSelect1">
                  <option value="deluxe">deluxe</option>
                  <option value="superior">superior</option>
                  <option value="president">president</option>
                 </select>
                 @error('jenis_kamar')
                 <div class="alert alert-danger mt-2">
                     {{ $message }}
                 </div>
                 @enderror
              </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Ukuran kamar</label>
              <input type="number" name="ukuran_kamar" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter ukuran kamar">
              <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
              @error('ukuran_kamar')
              <div class="alert alert-danger mt-2">
                  {{ $message }}
              </div>
              @enderror
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Harga</label>
              <input type="number" name="harga" class="form-control" id="exampleInputPassword1" placeholder="Enter harga">
              @error('harga')
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