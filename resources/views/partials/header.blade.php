<div class="header">
    <div class="user-dropdown">
        <button class="dropdown-toggle">Welcome, {{ Auth::user()->name }} ▼</button>
        <ul class="dropdown-menu">
            <li><a href="/profile">Profile</a></li>
            <li><a href="/logout">Logout</a></li>
        </ul>
    </div>
</div>

<style>
    .user-dropdown {
        position: relative;
        display: inline-block;
    }

    .dropdown-menu {
        display: none;
        position: absolute;
        top: 100%;
        right: 0;
        background: #fff;
        border: 1px solid #ddd;
        padding: 10px;
        list-style: none;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    .user-dropdown:hover .dropdown-menu {
        display: block;
    }
</style>
