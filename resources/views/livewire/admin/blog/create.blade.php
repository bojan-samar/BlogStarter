<section>
    <x-jet-secondary-button class="mb-5" wire:click="$emitUp('back')" wire:loading.attr="disabled">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 15l-3-3m0 0l3-3m-3 3h8M3 12a9 9 0 1118 0 9 9 0 01-18 0z" />
        </svg>
        Back
    </x-jet-secondary-button>

        <div class="card bg-white">

            <form wire:submit.prevent="store" class="w-full">

                <div class="flex flex-wrap md:-mx-2">
                    <div class="w-full md:flex-1 md:p-2 mb-5">
                        <x-jet-label value="{{ __('Title') }}" />
                        <x-jet-input id="title" class="block mt-1 w-full" type="text" name="title" wire:model.defer="blog.title" required />
                        <div class="mt-1 text-right text-xs">
                            <span id="title-length"></span> out of 60 characters
                        </div>
                        @error('blog.title')
                            <div class="text-red-600 text-sm mt-1">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="w-full md:flex-1 md:p-2 mb-5">
                        <x-jet-label value="{{ __('Slug') }}" />
                        <x-jet-input class="block mt-1 w-full" type="text" name="slug" wire:model.defer="blog.slug" required />
               
                        @error('blog.slug')
                            <div class="text-red-600 text-sm mt-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="mb-5">
                    <x-jet-label value="{{ __('Meta') }}" />
                    <x-jet-input id="meta" class="block mt-1 w-full" type="text" name="meta" wire:model.defer="blog.meta" />
                    <div class="mt-1 text-right text-xs">
                        <span id="meta-length"></span> out of 160 characters
                    </div>
                    @error('blog.meta')
                        <div class="text-red-600 text-sm mt-1">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-5">
                    <x-jet-label value="{{ __('Notes') }}" />
                    <textarea wire:model.defer="blog.notes" rows="5" class="form-input w-full"></textarea>
                    @error('blog.notes')
                        <div class="text-red-600 text-sm mt-1">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-5">
                    <x-jet-label value="{{ __('Body') }}" />
                    <textarea wire:model.defer="blog.body" rows="5" class="form-input w-full"></textarea>
                    @error('blog.body')
                        <div class="text-red-600 text-sm mt-1">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-5">
                    <x-jet-label value="{{ __('Status') }}" />
                    <input type="checkbox" name="status" class="h-5 w-5 rounded mt-2" wire:model.defer="blog.status">
                    @error('blog.status')
                        <div class="text-red-600 text-sm mt-1">{{ $message }}</div>
                    @enderror
                </div>

                <x-jet-button wire:loading.attr="disabled">
                    Save
                </x-jet-button>

            </form>

            bojan

        </div>

        <script>
            input_length('title', 60)
            input_length('meta', 130)
        </script>
</section>



