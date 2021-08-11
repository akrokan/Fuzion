<header class="flex justify-between items-center py-4 bg-white shadow">
<div class="container mx-auto" x-data="">

    <nav class="flex">
        <a href="{{ route('home') }}"    class="mr-6">Home</a>
        <a href="{{ route('blog') }}"    class="mr-6">Blog</a>
        <a href="{{ route('contact') }}" class="mr-6">Contact</a>
        @guest
            <a href="{{ route('login') }}"    class="mr-6">Login</a>
            <a href="{{ route('register') }}" class="mr-6">Register</a>
        @else
            <a href="{{ route('logout') }}"     class="mr-6" 
                onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">Logout</a>
            <form id="logout-form" method="POST" action="{{ route('logout') }}" style="display:none">@csrf</form>
        @endguest
        @auth
            @can('admin')
                <a href="{{ route('dashboard') }}" class="mr-6">Dashboard</a>
                <a href="{{ url('/dashboard/post/create') }}" class="mr-6">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 text-green-600 -my-2 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </a>
            @endcan
        @endauth
    </nav>

</div>
</header>