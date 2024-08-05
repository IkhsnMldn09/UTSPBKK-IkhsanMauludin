<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Kepala Surat</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background: white">

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div>
                    <h3 class="text-center my-4">Edit Kepala Surat</h3>
                    <hr>
                </div>
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <form action="{{ route('kepalasurat.update', $kepalaSurat->id) }}" method="POST">
                          @csrf
                          @method('PUT')
                            <div class="form-group mb-3">
                                <label for="nama_kepala_surat">Nama Kepala Surat</label>
                                <input type="text" name="nama_kepala_surat" id="nama_kepala_surat" class="form-control" placeholder="Masukkan nama kepala surat" value="{{ old('nama_kepala_surat', $kepalaSurat->nama_kepala_surat) }}">
                                @error('nama_kepala_surat')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group mb-3">
                                <label for="alamat">Alamat</label>
                                <input type="text" name="alamat" id="alamat" class="form-control" placeholder="Masukkan alamat" value="{{ old('alamat', $kepalaSurat->alamat) }}">
                                @error('alamat')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group mb-3">
                                <label for="telepon">Telepon</label>
                                <input type="text" name="telepon" id="telepon" class="form-control" placeholder="Masukkan nomor telepon" value="{{ old('telepon', $kepalaSurat->telepon) }}">
                                @error('telepon')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group mb-3">
                                <label for="email">Email</label>
                                <input type="email" name="email" id="email" class="form-control" placeholder="Masukkan email" value="{{ old('email', $kepalaSurat->email) }}">
                                @error('email')
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
