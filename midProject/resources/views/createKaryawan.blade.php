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

    <div class="m-5">

        <h1 class="text-center">Karyawan Baru</h1>

        <form action="{{ route('store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="" class="form-label">Nama karyawan</label>
                <input type="text" class="form-control" id="" name="nama">
            </div>
            @error('nama')
                <div class="alert alert-danger" role="alert">{{ $message }}</div>
            @enderror

            <div class="mb-3">
                <label for="" class="form-label">Umur karyawan</label>
                <input type="number" class="form-control" id="" name="umur">
            </div>
            @error('umur')
                <div class="alert alert-danger" role="alert">{{ $message }}</div>
            @enderror

            <div class="mb-3">
                <label for="" class="form-label">Alamat karyawan</label>
                <input type="text" class="form-control" id="" name="alamat">
            </div>
            @error('alamat')
                <div class="alert alert-danger" role="alert">{{ $message }}</div>
            @enderror

            <div class="mb-3">
                <label for="" class="form-label">Nomor telp. karyawan</label>
                <input type="number" class="form-control" id="" name="nomor">
            </div>
            @error('nomor')
                <div class="alert alert-danger" role="alert">{{ $message }}</div>
            @enderror

            <div class="mb-3">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
