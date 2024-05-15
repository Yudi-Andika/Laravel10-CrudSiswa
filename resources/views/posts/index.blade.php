<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="https://icons8.com/icon/hUvxmdu7Rloj/laravel">
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    <script src="./node_modules/preline/dist/preline.js"></script>
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> -->

    <title>My Data</title>
</head>

<body class="">
    <div class="container mx-auto py-4 ">
        <!-- <div class=""> -->
        <div class="col-md-12">
            <div>
                <h3 class=" text-center text-4xl font-bold tracking-widest">
                    HALAMAN <span class="before:block before:absolute before:-inset-2 before:-skew-y-3 before:bg-pink-500 relative inline-block">
                        <span class="relative text-white"> ADMIN😱</span>
                    </span>
                </h3>
                <hr>
            </div>
            <div class="card border-0 shadow-sm rounded">
                <div class="card-body">
                    <a href="{{ route('posts.create') }}" class="text-lg font-bold text-blue-500 tracking-widest">TAMBAH POST </a>
                </div>
                <div class="flex flex-col">
                    <div class="-m-1.5 overflow-x-auto">
                        <div class="p-1.5 min-w-full inline-block align-middle">
                            <div class="border border-slate-950 rounded-lg shadow overflow-hidden">
                                <table class="min-w-full divide-y divide-slate-950 ">
                                    <thead class="bg-gray-100">
                                        <tr class="divide-x divide-slate-950">
                                            <th scope="col" class="px-6 py-3 text-center text-xs font-semibold text-gray-800 uppercase">Nama</th>
                                            <th scope="col" class="px-6 py-3 text-center text-xs font-semibold text-gray-800 uppercase">Jurusan</th>
                                            <th scope="col" class="px-6 py-3 text-center text-xs font-semibold text-gray-800 uppercase">No Hp</th>
                                            <th scope="col" class="px-6 py-3 text-center text-xs font-semibold text-gray-800 uppercase">Email</th>
                                            <th scope="col" class="px-6 py-3 text-center text-xs font-semibold text-gray-800 uppercase">Alamat</th>
                                            <th scope="col" class="px-6 py-3 text-center text-xs font-semibold text-gray-800 uppercase">Foto</th>
                                            <th scope="col" class="px-6 py-3 text-center text-xs font-semibold text-gray-800 uppercase">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody class="divide-y  border-slate-950  divide-slate-950">
                                        @forelse ($posts as $post)
                                        <tr class="divide-x divide-slate-950">
                                            <td class="px-6 py-4 whitespace-nowrap text-center  text-sm text-gray-800 ">{{ $post->Nama }}</td>
                                            <td class="px-6 py-4 whitespace-nowrap text-center  text-sm text-gray-800 ">{{ $post->Jurusan }}</td>
                                            <td class="px-6 py-4 whitespace-nowrap text-center  text-sm text-gray-800 ">{{ $post->NoHp }}</td>
                                            <td class="px-6 py-4 whitespace-nowrap text-center  text-sm text-gray-800 ">{{ $post->Email }}</td>
                                            <td class="px-6 py-4 whitespace-nowrap text-center  text-sm text-gray-800 ">{!! $post->Alamat !!}</td>
                                            <td class="px-6 py-4 whitespace-nowrap  text-sm font-medium text-gray-800 "><img src="{{ asset('/storage/posts/'.$post->image)}}" alt="" class="rounded-lg w-40 items-center hover:scale-110 transition-transform duration-300 ease-in-out"></td>
                                            <td class="px-6 py-4 whitespace-nowrap text-center  font-medium">
                                                <form onsubmit="return confirm('Apkah Anda Yakin?')" action="{{ route('posts.destroy' , $post->id) }}" method="POST">
                                                    <a href="{{ route('posts.show', $post->id) }}" class="inline-flex items-center mx-2 px-2 py-1 text-sm font-semibold rounded-md border border-slate-950 bg-slate-400 text-gray-10  hover:scale-125 hover:-translate-y-1 hover:bg-slate-500 text-slate-50 transition-transform duration-50 ease-in-out">show</a>
                                                    <a href="{{ route('posts.edit', $post->id) }}" class="inline-flex items-center mx-2 px-2 py-1 text-sm font-semibold rounded-md border border-slate-950 bg-sky-500 text-gray-100 hover:scale-125 hover:-translate-y-1 hover:bg-sky-600 text-slate-50 transition-transform duration-50 ease-in-out">edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="inline-flex items-center mx-2 px-2 py-1 text-sm font-semibold rounded-md border border-slate-950  bg-red-500 text-gray-100 hover:scale-125 hover:-translate-y-1 hover:bg-red-600 text-slate-50 transition-transform duration-50 ease-in-out">hapus</button>
                                                </form>
                                            </td>
                                        </tr>
                                        @empty
                                        <div class="alert alert-danger">
                                            Data Post belum Tersedia.
                                        </div>
                                        @endforelse
                                    </tbody>
                                </table>
                                {{ $posts->links() }}
                            </div>
                        </div>
                    </div>
                </div>

                <!-- <table class="min-w-full divide-y divide-gray-200 dark:divide-neutral-700">
                    <thead>
                        <tr>
                            <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">Gambar</th>
                            <th scope="col">Judul</th>
                            <th scope="col">Content</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($posts as $post)
                        <tr>
                            <td>
                                <img src="{{ asset('/storage/posts/'.$post->image)}}" class="rounded" style="width: 150px;" alt="">
                            </td>
                            <td>{{ $post->title }}</td>
                            <td>{!! $post->content !!}</td>
                            <td class="text-center">
                                <form onsubmit="return confirm('Apkah Anda Yakin?')" action="{{ route('posts.destroy' , $post->id) }}" method="POST">
                                    <a href="{{ route('posts.show', $post->id) }}" class="btn btn-sm btn-dark">show</a>
                                    <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-sm btn-primary">edit</a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger">hapus</button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <div class="alert alert-danger">
                            Data Post belum Tersedia.
                        </div>
                        @endforelse
                    </tbody>
                </table> -->
                <!-- {{ $posts->links() }} -->
            </div>
        </div>
        <!-- </div> -->
    </div>
</body>

</html>