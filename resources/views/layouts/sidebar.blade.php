<ul class="menu">
    <li class="sidebar-title">Menu</li>
    <li class="sidebar-item">
        <a href="{{ url('/dashboard') }}" class='sidebar-link'>
            <i class="bi bi-speedometer"></i>
            <span>Dashboard</span>
        </a>
    </li>
    <li class="sidebar-item">
        <a href="{{ url('/admin/persyaratan') }}" class='sidebar-link'>
            <i class="bi bi-database-fill-add"></i>
            <span>Persyaratan</span>
        </a>
    </li>
    <li class="sidebar-title">Log</li>
    <li class="sidebar-item">
        <a href="{{ url('/activity') }}" class='sidebar-link'>
            <i class="bi bi-clock-history"></i>
            <span>User Activities</span>
        </a>
    </li>
    <!-- delete on production -->
    <li class="sidebar-title">Example</li>
    <li class="sidebar-item">
        <a href="{{url('/menu')}}" class='sidebar-link'>
            <i class="bi bi-grid-fill"></i>
            <span>Menu</span>
        </a>
    </li>
    <li class="sidebar-item has-sub">
        <a href="#" class='sidebar-link'>
            <i class="bi bi-grid-fill"></i>
            <span>With Submenu</span>
        </a>
        <ul class="submenu ">
            <li class="submenu-item">
                <a href="{{url('/submenu')}}" class="submenu-link">Submenu</a>
            </li>
        </ul>
    </li>
    <!-- delete on production end -->
</ul>