<ul>
    <li>
        <a href="{{ route('profile.show') }}"
            class="mb-1 px-2 py-2 rounded-lg flex items-center text-gray-700 hover:text-blue-600 hover:bg-blue-100 {{ request()->routeIs('profile.show') ? 'bg-blue-100 text-white' : '' }}">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2 inline" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
              </svg>
            Your Profile
        </a>
    </li>

</ul>
