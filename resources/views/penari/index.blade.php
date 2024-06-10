@extends('layouts.app')
@section('content')
    <h1>Daftar Penari</h1>
    <!-- <a href="{{ route('penari.create') }}" class="btn btn-tambah">Tambah Penari</a> -->
    <table class="table-data">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Umur</th>
                <th>Alamat</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($penaris as $x => $penari)
                <tr>
                    <td>{{ $x+1 }}</td>
                    <td>{{ $penari->Nama }}</td>
                    <td>{{ $penari->Umur }}</td>
                    <td>{{ $penari->Alamat }}</td>
                    <td>
                        <a href="{{ route('penari.edit', $penari->ID_Penari) }}" class="btn">Edit</a>
                        <form action="{{ route('penari.destroy', $penari->ID_Penari) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ url('/penaris/create') }}"><button>Tambah Penari</button></a>
    <a href="generate_pdf.php"><button>Unduh PDF</button></a>
@endsection