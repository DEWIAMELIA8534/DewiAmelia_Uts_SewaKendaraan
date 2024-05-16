<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Penyewa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background: white">

<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <div>
                <h3 class="text-center my-4">Detail Penyewa</h3>
                <hr>
            </div>
            <div class="card border-0 shadow-sm rounded">
                <div class="card-body">
                    <div class="mb-3">
                        <label for="nama_penyewa" class="form-label">Nama Penyewa:</label>
                        <p>{{ $penyewa->nama_penyewa }}</p>
                    </div>
                    <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat:</label>
                        <p>{{ $penyewa->alamat }}</p>
                    </div>
                    <div class="mb-3">
                        <label for="no_hp" class="form-label">Nomor HP:</label>
                        <p>{{ $penyewa->no_hp }}</p>
                    </div>
                    <a href="{{ route('penyewa.index') }}" class="btn btn-secondary">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>