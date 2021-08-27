<div>
    <tamplate x-data="{ open: false }"
              @alert-success.window="open = true;setTimeout(() => open = false, 5000)">
        <template x-if="true">
            <div x-bind:class="{'notification-popup-active': open }"
                 class="bg-green-500 px-4 py-3 text-white notification-popup">
                {{ $message }}
            </div>
        </template>
    </tamplate>

    <tamplate x-data="{ open: false }"
              @alert-error.window="open = true;setTimeout(() => open = false, 5000)">
        <template x-if="true">
            <div x-bind:class="{'notification-popup-active': open }"
                 class="bg-red-500 px-4 py-3 text-white notification-popup">
                {{ $message }}
            </div>
        </template>
    </tamplate>

</div>
