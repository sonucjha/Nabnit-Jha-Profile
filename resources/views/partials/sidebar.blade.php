<div class="bg-dark text-white p-3" style="width: 250px;">
    <h5 class="text-center">Admin Menu</h5>
    <ul class="nav flex-column">
        <!-- Dashboard -->
        <li class="nav-item">
            <a class="nav-link text-white d-flex align-items-center" href="#">
                <i class="fas fa-tachometer-alt me-2"></i> Dashboard
            </a>
        </li>
        <!-- Users Dropdown -->
        <li class="nav-item dropdown">
            <a class="nav-link text-white d-flex align-items-center dropdown-toggle" href="#" id="userMenu" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fas fa-users me-2"></i> Users
            </a>
            <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="userMenu">
                <li><a class="dropdown-item" href="#">All Users</a></li>
                <li><a class="dropdown-item" href="#">Add User</a></li>
                <li><a class="dropdown-item" href="#">User Roles</a></li>
            </ul>
        </li>
        <!-- Settings -->
        <li class="nav-item">
            <a class="nav-link text-white d-flex align-items-center" href="#">
                <i class="fas fa-cog me-2"></i> Settings
            </a>
        </li>
    </ul>
</div>