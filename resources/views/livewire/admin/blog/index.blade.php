<section>

    @if($blogs->count())


    <x-table.main>
        <x-slot name='heading'>
            <x-table.header>ID</x-table.header>
            <x-table.header>Title</x-table.header>
            <x-table.header>Status</x-table.header>
            <x-table.header>Created At</x-table.header>
            <x-table.header></x-table.header>
        </x-slot>

        <x-slot name='body'>
            @foreach($blogs as $blog)
                <x-table.row>
                    <x-table.cell>{{ $blog->id }}</x-table.cell>
                    <x-table.cell>{{ $blog->title }}</x-table.cell>
                    <x-table.cell>
                        @if($blog->status)
                            <span class="bg-green-200 text-sm rounded-full px-4 py-1">Published</span>
                        @else
                            <span class="bg-red-200 text-sm rounded-full px-4 py-1">Unpublished</span>
                        @endif
                    </x-table.cell>
                    <x-table.cell>{{ $blog->created_at->diffForHumans() }}</x-table.cell>
                    <x-table.cell>
                        <x-jet-secondary-button wire:click="$emitUp('edit', {{$blog->id}});" class="mr-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                            </svg>
                        </x-jet-secondary-button>
                        <a href="{{ route('blog.show', $blog->slug) }}">
                            <x-jet-secondary-button>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                  </svg>
                            </x-jet-secondary-button>
                        </a>
                    </x-table.cell>
                </x-table.row>
            @endforeach
        </x-slot>
    </x-table.main>

    @else

        <section class="bg-white card container">
            <div>
                <img src="/storage/icons/empty.svg" alt="Auto Delete Import" class="max-w-xs mx-auto mb-5">
            </div>
            <h1 class="text-center text-3xl font-bold">No Blogs</h1>
        </section>

    @endif

</section>
