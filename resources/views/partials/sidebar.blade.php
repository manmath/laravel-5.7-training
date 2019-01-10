<div class="sidebar">
    <nav class="sidebar-nav">
        <ul class="nav">
            <li class="nav-title">Navigation</li>
            <li class="nav-item">
                <a href="{{ route('home') }}" class="nav-link  {{ Request::is('home') ? 'active' : '' }}">
                    <i class="fas fa-tachometer-alt"></i> Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a href="index.html" class="nav-link {{ Request::is(['employee', 'employee/*']) ? 'active' : '' }}">
                    <i class="fas fa-users"></i> Employees
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('department.index') }}" class="nav-link {{ Request::is(['department', 'department/*']) ? 'active' : '' }}">
                    <i class="fas fa-cube"></i> Departments
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link {{ Request::is(['position', 'position/*']) ? 'active' : '' }}">
                    <i class="fas fa-briefcase"></i> Positions
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('role.index') }}" class="nav-link {{ Request::is(['role', 'role/*']) ? 'active' : '' }}">
                    <i class="fas fa-tags"></i> Roles
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('user.index') }}" class="nav-link {{ Request::is(['user', 'user/*']) ? 'active' : '' }}">
                    <i class="fas fa-user"></i> Users
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </li>
        </ul>
    </nav>
</div>
