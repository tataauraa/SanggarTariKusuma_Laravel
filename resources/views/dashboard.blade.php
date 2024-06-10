@extends('layouts.app')
@section('content')
<h1>Hi Admin!</h1>
    <h2>Selamat datang, <?php echo auth()->user()->name ?? 'Admin' ?>!</h2>
    <div class="widget-container">
        <!-- Widget akan ditampilkan di sini -->
        <div class="widget">
            <h3 id="totalPenari">{{ $penari }}</h3>
            <p>Total Penari</p>
        </div>
        <div class="widget">
            <h3 id="totalJadwal">0</h3>
            <p>Total Jadwal</p>
        </div>
    </div>
</div>
@endsection
@push('script')
<script>
    function fetchStats() {
        fetch('get_stats.php')
            .then(response => response.json())
            .then(data => {
                document.getElementById('totalPenari').innerText = data.totalPenari;
                document.getElementById('totalJadwal').innerText = data.totalJadwal;
            })
            .catch(error => console.error('Error fetching stats:', error));
    }

    // Panggil fungsi fetchStats saat halaman dimuat
    fetchStats();
</script>
@endpush