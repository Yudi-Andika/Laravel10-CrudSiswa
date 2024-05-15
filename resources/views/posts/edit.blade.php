!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css 
">
</head>

<body style="background: lightgray">
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <form action="{{ route('posts.update', $post->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                          
                            <div class="form-group">
                                <label class="font-weight-bold">Nama</label>
                                <input type="text" class="form-control 
@error('Nama') is-invalid @enderror" name="Nama" value="{{ old('Nama',
$post->Nama) }}" placeholder="Masukkan Judul Post">
                                <!-- error message untuk Nama -->
                                @error('Nama')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">Jurusan</label>
                                <input type="text" class="form-control 
@error('Jurusan') is-invalid @enderror" name="Jurusan" value="{{ old('Jurusan',
$post->Jurusan) }}" placeholder="Masukkan Judul Post">
                                <!-- error message untuk Jurusan -->
                                @error('Jurusan')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">NoHp</label>
                                <input type="text" class="form-control 
@error('NoHp') is-invalid @enderror" name="NoHp" value="{{ old('NoHp',
$post->NoHp) }}" placeholder="Masukkan Judul Post">
                                <!-- error message untuk NoHp -->
                                @error('NoHp')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">Email</label>
                                <input type="text" class="form-control 
@error('Email') is-invalid @enderror" name="Email" value="{{ old('Email',
$post->Email) }}" placeholder="Masukkan Judul Post">
                                <!-- error message untuk Email -->
                                @error('Email')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">Alamat</label>
                                <input type="text" class="form-control 
@error('Alamat') is-invalid @enderror" name="Alamat" value="{{ old('Alamat',
$post->Alamat) }}" placeholder="Masukkan Judul Post">
                                <!-- error message untuk Alamat -->
                                @error('Alamat')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                          
                            <div class="form-group">
                                <label class="font-weight-bold">GAMBAR</label>
                                <input type="file" class="form-control" name="image">
                            </div>
                            <button type="submit" class="btn btn-md btn-primary">UPDATE</button>
                            <button type="reset" class="btn btn-md btn-warning">RESET</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('content');
    </script>
</body>

</html>