<ul>

    @if(request()->user()->hasRole('superadmin'))
        <li>
            <a href="{{ route('admin.blog.index') }}"
               class="mb-1 px-2 py-2 rounded-lg flex items-center text-gray-700 hover:text-blue-600 hover:bg-blue-100 {{ request()->routeIs('admin.blog.*') ? 'bg-blue-100 text-white' : '' }}">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z" />
                </svg>
                Blogs
            </a>
        </li>
    @endif



    @if(request()->user()->hasRole('superadmin'))
        <li>
            <a href="{{ route('admin.user.index') }}"
               class="mb-1 px-2 py-2 rounded-lg flex items-center text-gray-700 hover:text-blue-600 hover:bg-blue-100 {{ request()->routeIs('admin.user.*') ? 'bg-blue-100 text-white' : '' }}">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                    <path d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z" />
                </svg>
                Users
            </a>
        </li>
    @endif

</ul>
