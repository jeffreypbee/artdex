<x-layout>
    <x-admin-panel>
        <h2>Art</h2>
        @foreach ($art as $piece)
            <div>
                {{$piece->pokemon->name}}
            </div>
        @endforeach
    </x-admin-panel>
</x-layout>