<form wire:submit.prevent="submit">
    <style>
        .hahaha{
            display: none;
        }
    </style>
    <div>
        <x-jet-label value="{{ __('Name') }}" />
        <x-jet-input class="block mt-1 w-full" type="text" name="name" wire:model.defer="state.name" required
                     autocomplete="name" />
    </div>

    <div class="mt-4">
        <x-jet-label value="{{ 'Email' }}" />
        <x-jet-input class="block mt-1 w-full" type="email" name="email" wire:model.defer="state.email" required
                     autocomplete="email" />
        @error('state.email')
        <div class="text-red-600 text-sm mt-1">{{ $message }}</div>
        @enderror
    </div>

    <div class="mt-4 hahaha">
        <label class="block font-medium text-sm text-gray-700">URL</label>
        <x-jet-input class="block mt-1 w-full" type="text" name="url" autocomplete="off" wire:model.defer="state.hahaha"/>
    </div>

    <div class="mt-4">
        <label for="message" class="form-label">Message</label>
        <textarea name="message" id="message" rows="5" class="block w-full form-input"
                  wire:model.defer="state.message" required></textarea>
        @error('state.message')
        <div class="text-red-600 text-sm mt-1">{{ $message }}</div>
        @enderror
    </div>

    <x-jet-action-message class="mt-4" on="submitted">
            <span class="max-w-xs bg-green-500 p-2 text-white rounded-lg">
                Message Submitted
            </span>
    </x-jet-action-message>


    <div class="mt-4">
        <x-jet-button class="bg-primary hover:bg-primary" wire:loading.attr="disabled">
            Submit
        </x-jet-button>
    </div>

</form>
