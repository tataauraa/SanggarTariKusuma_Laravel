@extends('layouts.app')

@section('content')
    <h1>Tambah Penari</h1>
    <form action="{{ route('penari.store') }}" method="POST">
        @csrf
        <label for="Nama">Nama:</label>
        <input type="text" id="Nama" name="Nama" required>
        <label for="Umur">Umur:</label>
        <input type="number" id="Umur" name="Umur" required>
        <label for="Alamat">Alamat:</label>
        <input type="text" id="Alamat" name="Alamat" required>
        <button type="submit">Tambah</button>
    </form>
@endsection
