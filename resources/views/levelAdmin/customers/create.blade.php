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
        <form action="{{ route('admin.hargahariini.store') }}" method="POST"  >
          @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">NIK</label>
                <input type="number" name="NIK" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter NIK">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                @error('NIK')
                <div class="alert alert-danger mt-2">
                    {{ $message }}
                </div>
                @enderror
              </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Nama Customer</label>
              <input type="text" name="nama_customer" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter nama">
              <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
              @error('nama_customer')
              <div class="alert alert-danger mt-2">
                  {{ $message }}
              </div>
              @enderror
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Email</label>
              <input type="email" name="email" class="form-control" id="exampleInputPassword1" placeholder="Email">
              @error('email')
              <div class="alert alert-danger mt-2">
                  {{ $message }}
              </div>
              @enderror
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Country</label>
              <input type="text" name="country" class="form-control" id="exampleInputPassword1" placeholder="Enter country">
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