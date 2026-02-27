<!DOCTYPE html>
<html>
<head>
    <title>Data Siswa</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: #f4f6f9;
        }
        .card {
            border-radius: 15px;
        }
        .btn {
            border-radius: 8px;
        }
        table {
            vertical-align: middle !important;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-dark bg-dark shadow">
    <div class="container">
        <span class="navbar-brand mb-0 h1">CRUD Data Siswa</span>
    </div>
</nav>

<div class="container mt-5">

<div class="card shadow-lg p-4">

<div class="d-flex justify-content-between align-items-center mb-4">
    <h3 class="mb-0">Data Siswa</h3>
    <a href="{{ route('siswa.create') }}" class="btn btn-primary">
        + Tambah
    </a>
</div>

<table class="table table-hover table-bordered text-center">
    <thead class="table-dark">
        <tr>
            <th>Nama</th>
            <th>Umur</th>
            <th>Nilai</th>
            <th width="200">Aksi</th>
        </tr>
    </thead>

    <tbody>
    @forelse($data as $row)
        <tr>
            <td>{{ $row->nama }}</td>
            <td>{{ $row->umur }}</td>
            <td>{{ $row->nilai }}</td>
            <td>
                <a href="{{ route('siswa.edit', $row->id) }}" class="btn btn-warning btn-sm me-1">
                    Edit
                </a>

                <form action="{{ route('siswa.destroy', $row->id) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm">
                        Delete
                    </button>
                </form>
            </td>
        </tr>
    @empty
        <tr>
            <td colspan="4" class="text-muted">Belum ada data</td>
        </tr>
    @endforelse
    </tbody>
</table>

</div>
</div>

</body>
</html>