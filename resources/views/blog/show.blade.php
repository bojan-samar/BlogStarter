<x-app-layout class="py-12">

    <x-slot name="meta">
        <title>{{ $blog->title }} - {{ config('app.name') }}</title>
        <meta name="description" content="{{ $blog->title }} - {{ config('app.name') }}">
        <style>
            body{
                background: #fff!important;
            }
        </style>
    </x-slot>

    <section class="container mx-auto">
        <section>
            <h1 class="text-2xl md:text-4xl font-black leading-tight text-center">{{ $blog->title }}</h1>
        </section>
    
        <section class="pb-12 pt-6">
            {!! $blog->body !!}
        </section>
    </section>




    <section>
        @livewire('comment.comments', ['model' => $blog], key('comments'))
    </section>


</x-app-layout>
