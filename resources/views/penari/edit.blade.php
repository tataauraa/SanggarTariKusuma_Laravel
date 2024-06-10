@extends('layouts.app')

@section('content')
    <section>
        <h2>Edit Penari</h2>
        <form action="{{ route('penari.update', $penari->ID_Penari) }}" method="post">
            @csrf
            <input type="hidden" name="id" value="{{ $penari->ID_Penari }}">
            <label for="nama">Nama:</label>
            <input type="text" id="nama" name="Nama" value="{{ $penari->Nama }}" required>
            <label for="umur">Umur:</label>
            <input type="number" id="umur" name="Umur" value="{{ $penari->Umur }}" required>
            <label for="alamat">Alamat:</label>
            <input type="text" id="alamat" name="Alamat" value="{{ $penari->Alamat }}" required>
            <button type="submit" name="update">Update</button>
        </form>
    </section>
@endsection
