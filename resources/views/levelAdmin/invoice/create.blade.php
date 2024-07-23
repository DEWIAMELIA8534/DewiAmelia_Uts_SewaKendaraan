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

<div class="card border-0 shadow-sm rounded">
    <div class="card-body">
        <form action="{{ route('admin.invoice.store') }}" method="POST"  >
          @csrf
      
          <div class="form-group">
            <label for="exampleInputPassword1">Deskripsi</label>
            <input type="text" name="deskripsi" class="form-control" id="exampleInputPassword1" placeholder="Deskripsi">
            @error('deskripsi')
            <div class="alert alert-danger mt-2">
                {{ $message }}
            </div>
            @enderror
          </div>
          <div class="form-group">
            <label for="exampleFormControlSelect1">Status</label>
            <select class="form-control" name="status" id="exampleFormControlSelect1">
              <option value="bayar">Bayar</option>
              <option value="dp">DP</option>
              <option value="lunas">Lunas</option>
             </select>
             @error('status')
             <div class="alert alert-danger mt-2">
                 {{ $message }}
             </div>
             @enderror
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Besar DP</label>
            <input type="number" name="besar_dp" class="form-control" id="exampleInputPassword1" placeholder="enter">
            @error('besar_dp')
            <div class="alert alert-danger mt-2">
                {{ $message }}
            </div>
            @enderror
          </div>
          <div class="form-group">
            <label for="exampleFormControlSelect1">ID Reservasi</label>
            <select class="form-control" name="id_reservasi" id="exampleFormControlSelect1">
              @foreach ($reservasi as $kamars)
              <option value="{{ $kamars->id_reservasi }}">{{ $kamars->id_reservasi }}</option>
              @endforeach
             </select>
             @error('id_reservasi')
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