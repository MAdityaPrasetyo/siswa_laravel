@extends('layouts.main')

@section('content')
    <h2>Tambah Siswa</h2>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('siswa.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nama">Nama:</label>
            <input type="text" name="nama" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="kelas">Kelas:</label>
            <input type="text" name="kelas" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="no_hp">No HP:</label>
            <input type="text" name="no_hp" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="no_hp_orang_tua">No HP Orang Tua:</label>
            <input type="text" name="no_hp_orang_tua" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Tambah Siswa</button>
    </form>
@endsection
