<section>
    @switch($step)
        @case('edit')
            @livewire('admin.user.edit', ['user' => $editing], key('editing'))
            @break
        @default
            @livewire('admin.user.index', key('index'))
    @endswitch
</section>
