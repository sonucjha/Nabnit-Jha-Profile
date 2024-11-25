<div class="sidebar">
    <ul class=" brand-background nav flex-column">
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

        <li class="nav-item {{ request()->routeIs('cv_uploads.index') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('cv_uploads.index') }}">
                <i class="fas fa-file-alt me-2"></i>Upload CV
            </a>
        </li>
        
    </ul>
</div>

<style>
    .brand-background{
          background: linear-gradient(135deg, #205593, #283e51);
    transform: skew(10deg, 10deg) !important;
    font-size: 2rem !important;
    font-weight: bold !important;
    text-transform: uppercase !important;
    letter-spacing: 11.5px !important;
    border-radius: 8px !important;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1) !important;
    display: flex !important;
    justify-content: center !important;
    align-items: center !important;
    /* height: 100px !important; */
    background-color: #333 !important;
    }
</style>
