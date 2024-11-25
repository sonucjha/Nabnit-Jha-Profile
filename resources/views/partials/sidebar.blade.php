<div class="sidebar">
    <ul class="nav flex-column brand-background">
        <!-- About Me -->
        <li class="nav-item">Nabnit</li>
    </ul>
    <ul class="nav flex-column" style="margin-top: 2rem;">
        <li class="nav-item {{ request()->routeIs('about_me.index') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('about_me.index') }}">
                <i class="fas fa-user me-2"></i> About Me
            </a>
        </li>
        <li class="nav-item {{ request()->routeIs('skills.index') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('skills.index') }}">
                <i class="fas fa-lightbulb me-2"></i> Skills
            </a>
        </li>
        <li class="nav-item {{ request()->routeIs('works.index') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('works.index') }}">
                <i class="fas fa-briefcase me-2"></i> My Work
            </a>
        </li>
        <li class="nav-item {{ request()->routeIs('social_account.index') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('social_account.index') }}">
                <i class="fas fa-share-alt me-2"></i> Social Account
            </a>
        </li>        
        <li class="nav-item {{ request()->routeIs('image_upload.index') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('image_upload.index') }}">
                <i class="fas fa-upload me-2"></i> Image Upload
            </a>
        </li>
    </ul>
</div>
