@extends('layouts.app')
@section('css')
<link rel="stylesheet" href="{{ asset('css/jadwal.css') }}">
@endsection
@section('content')
    <h1>Daftar Jadwal</h1>
    <table class="table-data">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Umur</th>
                <th>Alamat</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($jadwal as $j)
                <tr>
                    <td>{{ $j->ID_jadwal }}</td>
                    <td>{{ $j->Nama }}</td>
                    <td>{{ $j->Umur }}</td>
                    <td>{{ $j->Alamat }}</td>
                    <td>
                        <a href="{{ route('jadwal.edit', $j->ID_jadwal) }}">Edit</a>
                        <form action="{{ route('jadwal.destroy', $j->ID_jadwal) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="tambah_jadwal.php"><button>Tambah Jadwal</button></a>
@endsection