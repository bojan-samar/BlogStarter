<section>

    <div id="auto-delete-search" class="md:max-w-lg mx-auto mb-8">
        <form wire:submit.prevent="searchUsers" action="https://702carwraps.com/admin/lead" method="get"
            class="rounded-lg overflow-hidden flex border">
            <input wire:model.debounce.500ms="search" type=" text" name="search"
                class="leading-snug shadow block w-full appearance-none bg-white text-sm text-gray-600 py-3 outline-none focus:outline-none px-4"
                placeholder="Search...">
            <button type="submit"
                class="inline-flex px-3 items-center text-sm border border-transparent font-semibold text-white tracking-widest bg-gray-800 hover:bg-gray-900 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">Search</button>
        </form>
    </div>

    @if ($users->count())
    <x-table.main>
        <x-slot name='heading'>
            <x-table.header>
                Name
            </x-table.header>
            <x-table.header>
                Role
            </x-table.header>
            <x-table.header></x-table.header>
        </x-slot>

        <x-slot name='body'>
            @foreach($users as $user)
                <x-table.row>
                    <x-table.cell>{{ $user->name }}</x-table.cell>
                    <x-table.cell>{{ \Illuminate\Support\Str::title($user->role) }}</x-table.cell>
                    <x-table.cell>
                        <x-jet-secondary-button wire:click="$emitUp('edit', {{$user->id}});" class="mb-2  md:mb-0 md:mr-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                            </svg>
                        </x-jet-secondary-button>
                    </x-table.cell>
                </x-table.row>
            @endforeach
        </x-slot>
    </x-table.main>
    @else

    <section class="bg-white card text-center text-3xl font-bold py-10">
        No Users
    </section>

    @endif
