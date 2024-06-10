<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="icon" href="assets/icon.png">
    <link rel="stylesheet" href="{{ asset('css/jadwal.css') }}">
    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet">
    @yield('css')
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sanggar Tari - Admin</title>
    <style>
        /* Style for the widget container */
        .widget-container {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
            padding: 20px;
        }

        /* Style for individual widgets */
        .widget {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            width: 200px;
            height: 150px;
            margin: 20px;
            border-radius: 15px;
            background: #2b595b;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            color: #fff;
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .widget:hover {
            transform: translateY(-10px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3);
        }

        /* Style for widget content */
        .widget h3 {
            margin: 0;
            font-size: 36px;
            font-weight: bold;
        }

        .widget p {
            margin: 10px 0 0;
            font-size: 18px;
        }
    </style>
</head>

<body>
    <header>
        <h1>Sanggar Tari - Daftar Penari</h1>
        <nav>
            <ul>
                <li><a href="{{ route('dashboard') }}" class="{{ Request::is('dashboard') ? 'active':'' }}">Dashboard</a></li>
                <li><a href="{{ url('/penaris') }}" class="{{ Request::is('penaris*') ? 'active':'' }}">Daftar Penari</a></li>
                <li><a href="{{ route('jadwal.index') }}" class="{{ Request::is('jadwal*') ? 'active':'' }}">Jadwal</a></li>
                
            </ul>
        </nav>
    </header>
    <main>
        <section>
            @yield('content')
        </section>
    </main>

    <script>
        /*let sidebar = document.querySelector(".sidebar");
        let sidebarBtn = document.querySelector(".sidebarBtn");
        sidebarBtn.onclick = function () {
            sidebar.classList.toggle("active");
            if (sidebar.classList.contains("active")) {
                sidebarBtn.classList.replace("bx-menu", "bx-menu-alt-right");
            } else sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
        };*/
    </script>
    @stack('script')
</body>

</html>
