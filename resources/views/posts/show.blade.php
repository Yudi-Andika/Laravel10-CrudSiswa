<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5 mb-5">
        <div class="mt-4 p-5 bg-purple-500 text-black rounded">
            <img src="{{ asset('storage/posts/'.$post->image) }}" class="w-100 rounded" alt="">
            <hr>
            <h4>{{ $post->Nama }}</h4>
            <h4>{{ $post->Jurusan }}</h4>
            <h4>{{ $post->NoHp }}</h4>
            <h4>{{ $post->Email }}</h4>
            <h4>{{ $post->Alamat }}</h4>
            <p class="tmt-3">
                {!! $post->content !!}
            </p>
            <a href="/posts" class="btn btn-dark">Back</a>
        </div>
    </div>
</body>
</html>