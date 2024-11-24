<nav class="navbar navbar-expand-lg shadow-sm custom-navbar">
    <div class="container-fluid">
        <a class="navbar-brand text-white" href="#">
            <i class="fas fa-cogs me-2"></i>Admin Panel
        </a>
        <ul class="navbar-nav ms-auto">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-white" href="#" id="userDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="{{ asset('css/assets/images/left-image.jpg') }}" alt="User" class="rounded-circle user-avatar">
                    Admin
                </a>
                <ul class="dropdown-menu dropdown-menu-end custom-dropdown" aria-labelledby="userDropdown">
                    <li><a class="dropdown-item" href="#"><i class="fas fa-user me-2"></i>Profile</a></li>
                    <li><a class="dropdown-item" href="#"><i class="fas fa-cog me-2"></i>Settings</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#"><i class="fas fa-sign-out-alt me-2"></i>Logout</a></li>
                </ul>
            </li>
        </ul>
    </div>
</nav>


