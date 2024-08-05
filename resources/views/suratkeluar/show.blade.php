<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detail Surat Keluar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background: white">

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div>
                    <h3 class="text-center my-4">Detail Surat Keluar</h3>
                    <hr>
                </div>
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <div class="mb-3">
                            <h5><strong>Nomor Surat:</strong> {{ $suratKeluar->nomor_surat }}</h5>
                            <h5><strong>Tanggal Surat:</strong> {{ $suratKeluar->tanggal_surat }}</h5>
                            <h5><strong>Tujuan:</strong> {{ $suratKeluar->tujuan }}</h5>
                            <h5><strong>Perihal:</strong> {{ $suratKeluar->perihal }}</h5>
                            <h5><strong>Isi Surat:</strong></h5>
                            <p>{{ $suratKeluar->isi_surat }}</p>
                            <h5><strong>Pengirim:</strong> {{ $suratKeluar->pengirim }}</h5>
                        </div>
                        <a href="{{ route('suratkeluar.index') }}" class="btn btn-secondary">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
