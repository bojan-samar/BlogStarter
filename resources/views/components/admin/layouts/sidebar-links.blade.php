<ul>

    @if(request()->user()->hasRole('superadmin'))
        <li>
            <a href="{{ route('admin.blog.index') }}"
               class="mb-1 px-2 py-2 rounded-lg flex items-center text-gray-700 hover:text-blue-600 hover:bg-blue-100 {{ request()->routeIs('admin.blog.*') ? 'bg-blue-100 text-white' : '' }}">
               <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" viewBox="0 0 512 512"><title>Newspaper</title><path d="M368 415.86V72a24.07 24.07 0 00-24-24H72a24.07 24.07 0 00-24 24v352a40.12 40.12 0 0040 40h328" fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="32"/><path d="M416 464h0a48 48 0 01-48-48V128h72a24 24 0 0124 24v264a48 48 0 01-48 48z" fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="32"/><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M240 128h64M240 192h64M112 256h192M112 320h192M112 384h192"/><path d="M176 208h-64a16 16 0 01-16-16v-64a16 16 0 0116-16h64a16 16 0 0116 16v64a16 16 0 01-16 16z"/></svg>
                Blogs
            </a>
        </li>

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
