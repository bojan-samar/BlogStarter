<section>

        <div class="flex justify-between mb-5">

            <x-jet-secondary-button wire:click="$emitUp('back')" wire:loading.attr="disabled">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 15l-3-3m0 0l3-3m-3 3h8M3 12a9 9 0 1118 0 9 9 0 01-18 0z" />
                </svg>
                Back
            </x-jet-secondary-button>


            <div>
                <a href="{{ route('blog.show', $blog['slug']) }}">
                    <x-jet-secondary-button class="mr-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                          </svg>
                          View
                    </x-jet-secondary-button>
                </a>
                <x-jet-danger-button wire:click="$set('confirmingDeletion', true)">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                    </svg>
                    Delete
                </x-jet-danger-button>
            </div>

        </div>


        <div class="card bg-white">

            <form wire:submit.prevent="update" class="w-full">

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

                {{--Photo Update--}}
                <div x-data="{photoName: null, photoPreview: null}" class="col-span-6 mt-5 sm:col-span-4">
                    <!-- Profile Photo File Input -->
                    <input type="file" class="hidden"
                           wire:model="photo"
                           x-ref="photo"
                           x-on:change="
                                    photoName = $refs.photo.files[0].name;
                                    const reader = new FileReader();
                                    reader.onload = (e) => {
                                        photoPreview = e.target.result;
                                    };
                                    reader.readAsDataURL($refs.photo.files[0]);
                            " />

                    <x-jet-label for="photo" value="{{ __('Photo') }}" />


                    <!-- Current Profile Photo -->
                    @if($blog['photo'])
                        <div class="mt-2" x-show="! photoPreview">
                            <img src="{{ Storage::url($blog['photo']) }}" alt="{{ $blog['title'] }}" class="rounded-full h-20 w-20 object-cover">
                        </div>
                    @endif


                <!-- New Profile Photo Preview -->
                    <div class="mt-2" x-show="photoPreview">
                    <span class="block rounded-full w-20 h-20"
                          x-bind:style="'background-size: cover; background-repeat: no-repeat; background-position: center center; background-image: url(\'' + photoPreview + '\');'">
                    </span>
                    </div>

                    <x-jet-secondary-button class="mt-5 mr-2" type="button" x-on:click.prevent="$refs.photo.click()">
                        {{ __('Select A New Photo') }}
                    </x-jet-secondary-button>

                    @if ($blog['photo'])
                        <x-jet-secondary-button type="button" class="mt-2" wire:click="deletePhoto">
                            {{ __('Remove Photo') }}
                        </x-jet-secondary-button>
                    @endif

                    <x-jet-input-error for="photo" class="mt-2" />
                </div>


                <div class="my-5">
                    <x-jet-label value="{{ __('Published') }}" />
                    <input type="checkbox" class="h-5 w-5 rounded mt-2" name="status" wire:model.defer="blog.status">
                    @error('blog.status')
                        <div class="text-red-600 text-sm mt-1">{{ $message }}</div>
                    @enderror
                </div>

                <x-jet-button wire:loading.attr="disabled">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-3m-1 4l-3 3m0 0l-3-3m3 3V4" />
                      </svg>
                    Save
                </x-jet-button>

            </form>
        </div>


    <x-jet-confirmation-modal wire:model="confirmingDeletion">
        <x-slot name="title">
            {{ __('Delete Blog') }}
        </x-slot>

        <x-slot name="content">
            Delete <b>{{ $blog ? $blog['title'] : '' }}</b>?
        </x-slot>

        <x-slot name="footer">
            <x-jet-secondary-button wire:click="$toggle('confirmingDeletion')" wire:loading.attr="disabled">
                {{ __('Nevermind') }}
            </x-jet-secondary-button>

            <x-jet-danger-button class="ml-2" wire:click="destroy" wire:loading.attr="disabled">
                {{ __('Delete') }}
            </x-jet-danger-button>
        </x-slot>
    </x-jet-confirmation-modal>


    <script>
        input_length('title', 60)
        input_length('meta', 130)
    </script>

</section>



