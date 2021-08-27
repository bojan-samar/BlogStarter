<x-app-layout>

    <x-slot name="meta">
        <title>Blogs - {{ config('app.name') }}</title>
        <meta name="description" content="Blogs - {{ config('app.name') }}">
    </x-slot>

    <section class="my-12 container max-w-5xl mx-auto">

        @if ($blogs->count())
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                @foreach ($blogs as $blog)
                    <a href="{{ route('blog.show', $blog->slug) }}" class="duration-300 hover:shadow-lg overflow-hidden rounded-lg shadow-md transition duration-300 cursor-pointer">

                        <div>
                            <img src="https://around.createx.studio/img/demo/personal-portfolio/portfolio/01.jpg" alt="{{ $blog->title }}">
                        </div>

                        <div class="p-4">
                            <h2 class="font-bold text-center">{{ $blog->title }}</h2>
                            <div class="text-base">{{ Str::limit($blog->meta, 100, '...') }}

                            </div>
                        </div>

                    </a>
                @endforeach
            </div>
        @else
            <div class="text-3xl font-bold text-center">
                <div>
                    <img class="max-w-md mx-auto mb-5" src="{{asset('storage/icons/blog.svg')}}" alt="Amazon PPC Management Agency">
                </div>
                <div>No Blogs Yet</div>
            </div>
        @endif

    </section>





</x-app-layout>
