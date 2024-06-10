<div class="sidebar">
    <div class="logo-details">
        <span class="logo_name">Sanggar Tari Kusuma</span>
    </div>
    <ul class="nav-links">
        <li>
                <i class="bx bx-grid-alt"></i>
                <span class="links_name">Dashboard</span>
            </a>
        </li>
        <li>
            <a href="{{ route('penari.index') }}" class="{{ Request::is('penaris*') ? 'active' : '' }}">
                <i class="bx bx-user"></i>
                <span class="links_name">Daftar Penari</span>
            </a>
        </li>
        <li>
           
                <i class="bx bx-calendar"></i>
                <span class="links_name">Jadwal</span>
            </a>
        </li>
        <li>
           
                <i class="bx bx-log-out"></i>
                <span class="links_name">Log out</span>
            </a>
        </li>
    </ul>
    <div class="sidebar-button">
        <i class="bx bx-menu sidebarBtn"></i>
    </div>
</div>
