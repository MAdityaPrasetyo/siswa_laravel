@extends('layouts.main')

@section('content')
    <h2>Edit Siswa</h2>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('siswa.update', $siswa->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nama">Nama:</label>
            <input type="text" name="nama" class="form-control" value="{{ $siswa->nama }}" required>
        </div>
        <div class="form-group">
            <label for="kelas">Kelas:</label>
            <input type="text" name="kelas" class="form-control" value="{{ $siswa->kelas }}" required>
        </div>
        <div class="form-group">
            <label for="no_hp">No HP:</label>
            <input type="text" name="no_hp" class="form-control" value="{{ $siswa->no_hp }}" required>
        </div>
        <div class="form-group">
            <label for="no_hp_orang_tua">No HP Orang Tua:</label>
            <input type="text" name="no_hp_orang_tua" class="form-control" value="{{ $siswa->no_hp_orang_tua }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update Siswa</button>
    </form>
@endsection
