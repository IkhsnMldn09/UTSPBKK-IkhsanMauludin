<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detail Kepala Surat</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background: white">

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div>
                    <h3 class="text-center my-4">Detail Kepala Surat</h3>
                    <hr>
                </div>
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <div class="card-body">
                            <h3>{{ $kepalaSurat->nama_kepala_surat }}</h3>
                            <p><strong>Alamat:</strong> {{ $kepalaSurat->alamat }}</p>
                            <p><strong>Telepon:</strong> {{ $kepalaSurat->telepon }}</p>
                            <p><strong>Email:</strong> {{ $kepalaSurat->email }}</p>
                            <p><strong>Keterangan:</strong> {{ $kepalaSurat->keterangan }}</p>
                        </div>
                        <a href="{{ route('kepalasurat.index') }}" class="btn btn-secondary">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
