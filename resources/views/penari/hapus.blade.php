@extends('layouts.app')

@section('content')
    <section>
        <h2>Hapus Penari</h2>
        <p>Apakah Anda yakin ingin menghapus penari ini?</p>
        <form action="{{ route('penari.destroy', $id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" name="delete">Ya, Hapus</button>
        </form>
        <a href="{{ route('penari.index') }}">Batal</a>
    </section>
@endsection
