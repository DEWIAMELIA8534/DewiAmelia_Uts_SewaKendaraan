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
        <form action="{{ route('admin.pembayaran.update', $pembayaran->id_payment) }}" method="POST"  >
          @csrf
          @method('PUT')
          <div class="form-group">
            <label for="exampleFormControlSelect1">Customer ID</label>
            <select class="form-control" name="customer_id" id="exampleFormControlSelect1">
              <option value="{{ old('nama_barang', $pembayaran->customer_id)}}">{{ old('nama_barang', $pembayaran->customer_id)}}</option>
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
            <input type="date" name="tanggal" class="form-control" id="exampleInputPassword1" placeholder="Tanggal" value="{{ old('nama_barang', $pembayaran->tanggal)}}">
            @error('tanggal')
            <div class="alert alert-danger mt-2">
                {{ $message }}
            </div>
            @enderror
          </div>
          <div class="form-group">
            <label for="exampleFormControlSelect1">Metode Bayar</label>
            <select class="form-control" name="metode_bayar" id="exampleFormControlSelect1">
              <option value="{{ old('nama_barang', $pembayaran->metode_bayar)}}">{{ old('nama_barang', $pembayaran->metode_bayar)}}</option>
              <option value="cash">Cash</option>
              <option value="transfer">Transfer</option>
             </select>
             @error('metode_bayar')
             <div class="alert alert-danger mt-2">
                 {{ $message }}
             </div>
             @enderror
          </div>
          <div class="form-group">
            <label for="exampleFormControlSelect1">ID Invoice</label>
            <select class="form-control" name="id_invoice" id="exampleFormControlSelect1">
              <option value="{{ old('nama_barang', $pembayaran->id_invoice)}}">{{ old('nama_barang', $pembayaran->id_invoice)}}</option>
              @foreach ($invoice as $v)
              <option value="{{ $v->id_invoice }}">{{ $v->id_invoice }}</option>
              @endforeach
             </select>
             @error('id_invoice')
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