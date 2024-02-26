<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    <nav class="navbar bg-body-tertiary">
        <form class="container-fluid justify-content-start">

            <a href="/create" class="btn btn-outline-success me-2">Tambah Karyawan</a>
        </form>
    </nav>

    <div class="m-5">
        <h1 class="text-center">Daftar Karyawan PT ChipiChapa</h1>
    </div>

    <div class="d-flex flex-row justify-content-center gap-4">

        @foreach ($karyawans as $k)
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <p class="card-title">Nama: {{ $k->nama }}</p>
                    <p class="card-text">Umur: {{ $k->umur }}</p>
                    <p class="card-text">Alamat: {{ $k->alamat }}</p>
                    <p class="card-text">Nomor: {{ $k->nomor }}</p>
                    <br>
                    <a href="{{ route('edit', $k->id) }}" class="btn btn-success">Edit</a>
                    <br>
                    <br>
                    <form action="{{ route('delete', $k->id) }}" method="POST">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>

                </div>
            </div>
        @endforeach

    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
