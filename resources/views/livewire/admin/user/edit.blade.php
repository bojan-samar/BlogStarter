<section>
    <x-jet-secondary-button wire:click="$emitUp('back')" wire:loading.attr="disabled" class="mb-5">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 15l-3-3m0 0l3-3m-3 3h8M3 12a9 9 0 1118 0 9 9 0 01-18 0z" />
        </svg>
        Back
    </x-jet-secondary-button>
       

    @livewire('admin.user.profile-update', ['user' => $user], key('profile'))

</section>
