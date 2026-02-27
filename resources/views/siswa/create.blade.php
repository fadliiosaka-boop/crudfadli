<!DOCTYPE html>
<html>
<head>
    <title>Tambah Siswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
<div class="card shadow p-4">

<h2 class="mb-4 text-center">Tambah Data Siswa</h2>

<form action="{{ route('siswa.store') }}" method="POST">
@csrf

<div class="mb-3">
    <label class="form-label">Nama</label>
    <input type="text" name="nama" class="form-control">
</div>

<div class="mb-3">
    <label class="form-label">Umur</label>
    <input type="number" name="umur" class="form-control">
</div>

<div class="mb-3">
    <label class="form-label">Nilai</label>
    <input type="text" name="nilai" class="form-control">
</div>

<button type="submit" class="btn btn-success">Simpan</button>
<a href="{{ route('siswa.index') }}" class="btn btn-secondary">Kembali</a>

</form>

</div>
</div>

</body>
</html>