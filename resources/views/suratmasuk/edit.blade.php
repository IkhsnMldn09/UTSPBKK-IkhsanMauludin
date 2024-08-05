<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Surat Masuk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background: white">

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div>
                    <h3 class="text-center my-4">Edit Surat Masuk</h3>
                    <hr>
                </div>
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <form action="{{ route('suratmasuk.update', $suratmasuk->id) }}" method="POST">
                          @csrf
                          @method('PUT')
                            <div class="form-group">
                                <label for="nomorSurat">Nomor Surat</label>
                                <input type="text" name="nomor_surat" class="form-control" placeholder="Enter nomor surat" value="{{ old('nomor_surat', $suratmasuk->nomor_surat) }}">
                                @error('nomor_surat')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="tanggalSurat">Tanggal Surat</label>
                                <input type="date" name="tanggal_surat" class="form-control" value="{{ old('tanggal_surat', $suratmasuk->tanggal_surat) }}">
                                @error('tanggal_surat')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="pengirim">Pengirim</label>
                                <input type="text" name="pengirim" class="form-control" placeholder="Enter pengirim" value="{{ old('pengirim', $suratmasuk->pengirim) }}">
                                @error('pengirim')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="perihal">Perihal</label>
                                <textarea class="form-control" name="perihal" rows="3">{{ old('perihal', $suratmasuk->perihal) }}</textarea>
                                @error('perihal')
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
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
