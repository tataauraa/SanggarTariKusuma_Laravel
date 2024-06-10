@extends('layouts.app')

@section('content')
    <section>
        <h2>Daftar Penari</h2>
        <table id="penariList">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Nama Penari</th>
                    <th>Umur</th>
                    <th>Alamat</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($penaris as $penari)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $penari->Nama }}</td>
                        <td>{{ $penari->Umur }}</td>
                        <td>{{ $penari->Alamat }}</td>
                        <td>
                            <form action="{{ route('edit_penari', $penari->ID_Penari) }}" method="post" style="display:inline-block;">
                                @csrf
                                <button type="submit" name="edit">Edit</button>
                            </form>
                            <form action="{{ route('penari_proses', $penari->ID_Penari) }}" method="post" style="display:inline-block;">
                                @csrf
                                <button type="submit" name="hapus">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <a href="{{ route('tambah_penari') }}"><button>Tambah Penari</button></a>
        <a href="{{ route('generate_pdf') }}"><button>Unduh PDF</button></a>
    </section>
@endsection

@section('styles') <!-- Menambahkan bagian untuk menyertakan CSS -->
    <link rel="stylesheet" href="{{ asset('css/penari.css') }}"> <!-- Ganti dengan path CSS yang sesuai -->
@endsection


@section('content')
    <section>
        <h2>Daftar Penari</h2>
        <table id="penariList">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Nama Penari</th>
                    <th>Umur</th>
                    <th>Alamat</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($penaris as $penari)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $penari->Nama }}</td>
                        <td>{{ $penari->Umur }}</td>
                        <td>{{ $penari->Alamat }}</td>
                        <td>
                            <form action="{{ route('edit_penari', $penari->ID_Penari) }}" method="post" style="display:inline-block;">
                                @csrf
                                <button type="submit" name="edit">Edit</button>
                            </form>
                            <form action="{{ route('penari_proses', $penari->ID_Penari) }}" method="post" style="display:inline-block;">
                                @csrf
                                <button type="submit" name="hapus">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <a href="{{ route('tambah_penari') }}"><button>Tambah Penari</button></a>
        <a href="{{ route('generate_pdf') }}"><button>Unduh PDF</button></a>
    </section>
@endsection

@section('styles') <!-- Menambahkan bagian untuk menyertakan CSS -->
    <link rel="stylesheet" href="{{ asset('css/penari.css') }}"> <!-- Ganti dengan path CSS yang sesuai -->
@endsection
