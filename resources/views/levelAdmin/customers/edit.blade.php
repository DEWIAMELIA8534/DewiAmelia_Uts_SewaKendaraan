@extends('template.app')
@section('content')
<div class="section-header">
  <h1>Halaman Customer</h1>
  <div class="section-header-breadcrumb">
    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
    <div class="breadcrumb-item"><a href="#">Layout</a></div>
    <div class="breadcrumb-item">Default Layout</div>
  </div>
</div>

<div class="card border-0 shadow-sm rounded">
    <div class="card-body">
        <form action="{{ route('admin.customer.update', $customers->customer_id) }}" method="POST"  >
          @csrf
          @method('PUT')
          <div class="form-group">
            <label for="exampleInputEmail1">NIK</label>
            <input type="number" name="NIK" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter NIK" value="{{ old('nama_barang', $customers->NIK)}}">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            @error('NIK')
            <div class="alert alert-danger mt-2">
                {{ $message }}
            </div>
            @enderror
          </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Nama Customer</label>
          <input type="text" name="nama_customer" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter nama" value="{{ old('nama_barang', $customers->nama_customer)}}">
          <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
          @error('nama_customer')
          <div class="alert alert-danger mt-2">
              {{ $message }}
          </div>
          @enderror
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Email</label>
          <input type="email" name="email" class="form-control" id="exampleInputPassword1" placeholder="Email" value="{{ old('nama_barang', $customers->email)}}">
          @error('email')
          <div class="alert alert-danger mt-2">
              {{ $message }}
          </div>
          @enderror
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Country</label>
          <input type="text" name="country" class="form-control" id="exampleInputPassword1" placeholder="Enter country" value="{{ old('nama_barang', $customers->country)}}">
          @error('country')
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