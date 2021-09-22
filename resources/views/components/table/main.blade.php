<div class="bg-white mt-5 overflow-hidden rounded-lg">
    <div class="overflow-x-auto" style="overflow-x: auto;">
        <table class="w-full whitespace-no-wrap bg-white overflow-hidden table-striped">
            @isset($heading)
                <thead>
                    <tr class="text-left">
                        {{$heading}}
                    </tr>
                </thead>
            @endisset
            <tbody>
                {{$body}}
            </tbody>
        </table>
    </div>
</div>