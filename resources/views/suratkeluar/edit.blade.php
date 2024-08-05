<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Surat Keluar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background: white">

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div>
                    <h3 class="text-center my-4">Edit Surat Keluar</h3>
                    <hr>
                </div>
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <form action="{{ route('suratkeluar.update', $suratKeluar->id) }}" method="POST">
                          @csrf
                          @method('PUT')
                            <div class="form-group mb-3">
                                <label for="nomor_surat">Nomor Surat</label>
                                <input type="text" name="nomor_surat" id="nomor_surat" class="form-control" placeholder="Masukkan nomor surat" value="{{ old('nomor_surat', $suratKeluar->nomor_surat) }}">
                                @error('nomor_surat')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group mb-3">
                                <label for="tanggal_surat">Tanggal Surat</label>
                                <input type="date" name="tanggal_surat" id="tanggal_surat" class="form-control" placeholder="Pilih tanggal surat" value="{{ old('tanggal_surat', $suratKeluar->tanggal_surat) }}">
                                @error('tanggal_surat')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group mb-3">
                                <label for="tujuan">Tujuan</label>
                                <input type="text" name="tujuan" id="tujuan" class="form-control" placeholder="Masukkan tujuan surat" value="{{ old('tujuan', $suratKeluar->tujuan) }}">
                                @error('tujuan')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group mb-3">
                                <label for="perihal">Perihal</label>
                                <input type="text" name="perihal" id="perihal" class="form-control" placeholder="Masukkan perihal surat" value="{{ old('perihal', $suratKeluar->perihal) }}">
                                @error('perihal')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group mb-3">
                                <label for="lampiran">Lampiran</label>
                                <input type="text" name="lampiran" id="lampiran" class="form-control" placeholder="Masukkan lampiran" value="{{ old('lampiran', $suratKeluar->lampiran) }}">
                                @error('lampiran')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
