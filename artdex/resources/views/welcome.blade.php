<x-layout>
    <h2>Latest Art</h2>
    <x-dex-card :pkmn="$latest->pokemon" />

    <h2>Recent Art</h2>
    @foreach ($recent as $art)
        @if ($loop->first) @continue @endif
        <x-dex-card :pkmn="$art->pokemon" />
    @endforeach
</x-layout>

