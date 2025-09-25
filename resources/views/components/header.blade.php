<header class="h-[var(--header-height)] flex items-center justify-between padding--header">
    <div>
        <a href="/">
        <p class="text-base">LOGO</p>
        </a>
    </div>
    <nav>
        <ul class="text-base flex items-center justify-around w-100">
            <li><a href="/stages">Stages</a></li>
            @auth
                <li><a href="/logout">Logout</a></li>
            @endauth
            @guest
                <li><a href="/login">Login</a></li>
            @endguest
        </ul>
    </nav>
</header>