<x-layout>

@foreach ($art as $piece)
    {{$piece->pokemon->name}}
@endforeach

</x-layout>