<x-app-layout>

    <x-slot name="meta">
        <title>Pricing - {{ config('app.name') }}</title>
        <meta name="description" content="Pricing - {{ config('app.name') }}">
    </x-slot>

    <section class="container mx-auto py-12 px-4">

        <h2 class="text-3xl md:text-5xl font-black text-center">Choose the plan that’s right for you.</h2>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-10 mt-16">

            <section  class="bg-white p-4 shadow-lg rounded-2xl border flex flex-col justify-between">
                <h2 class="text-lg text-center">1 Job Post</h2>

                <div class="price text-4xl text-center mt-5">$200</div>

                <div>
                    <a class="bg-gray-800 block font-semibold hover:bg-gray-700 max-w-xs mx-auto no-underline px-4 py-3 rounded-md text-center text-white tracking-widest transition w-full"
                       href="{{ route('checkout.index', ['plan' => '1-job-credit']) }}">
                        Buy 1 Job
                    </a>
                </div>
            </section>

            <section  class="bg-white shadow-lg rounded-2xl border overflow-hidden flex flex-col justify-between pb-4">
                <div>
                    <div class="px-4 py-2 uppercase text-sm bg-red-500 text-white text-center font-semibold tracking-wider">Most Popular</div>
                    <h2 class="text-lg text-center pt-3">
                        3 Job Posts
                    </h2>
                </div>

                <div class="my-12">
                    <div class="price text-4xl text-center">$540</div>
                    <div class="text-center font-black tracking-wider">Save $60 (10%)</div>
                </div>

                <div>
                    <a class="bg-gray-800 block font-semibold hover:bg-gray-700 max-w-xs mx-auto no-underline px-4 py-3 rounded-md text-center text-white tracking-widest transition w-full"
                       href="{{ route('checkout.index', ['plan' => '3-job-credits']) }}">
                        Buy 3 Jobs
                    </a>
                </div>

            </section>

            <section  class="bg-white p-4 shadow-lg rounded-2xl border flex flex-col justify-between">
                <h2 class="text-lg text-center">5 Job Posts</h2>

                <div>
                    <div class="price text-4xl text-center mt-5">$750</div>
                    <div class="text-center font-black tracking-wider mt-1">Save $250 (25%)</div>
                </div>

                <div>
                    <a class="bg-gray-800 block font-semibold hover:bg-gray-700 max-w-xs mx-auto no-underline px-4 py-3 rounded-md text-center text-white tracking-widest transition w-full"
                       href="{{ route('checkout.index', ['plan' => '5-job-credits']) }}">
                        Buy 5 Job
                    </a>
                </div>
            </section>

        </div>

    </section>

</x-app-layout>


