<div class="sidebar">
    <ul class="nav flex-column brand-backgound">
        <!-- About Me -->
        <li class="nav-item">Nabnit</li>
    </ul>
    <ul class="nav flex-column" style="margin-top: 2rem;">
        <li class="nav-item">
            <a class="nav-link" href="{{ route('about_me') }}">
                <i class="fas fa-user me-2"></i> About Me
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('skills') }}">
                <i class="fas fa-lightbulb me-2"></i> What I’m good at
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('work') }}">
                <i class="fas fa-briefcase me-2"></i> My Work
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('socical_account') }}">
                <i class="fas fa-share-alt me-2"></i> Social Account
            </a>
        </li>        
        <li class="nav-item">
            <a class="nav-link" href="{{ route('image_upload') }}">
                <i class="fas fa-upload me-2"></i> Image Upload
            </a>
        </li>
    </ul>
</div>
