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

<div class="container mt-5">
  <div class="row">
      <div class="col-md-12">
          <div class="card border-0 shadow-sm rounded">
              <div class="card-body">
                  <div class="card-body">
                      <h3>{{ $reservasi->customer_id }}</h3>
                      <p>{{ $reservasi->tanggal }}</p>
                      <p>{{ $reservasi->tanggal_mulai }}</p>
                      <p>{{ $reservasi->tanggal_akhir }}</p>
                      <p>{{ $reservasi->id_hotel }}</p>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>

@endsection



