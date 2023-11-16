<x-layout>
    <h2>Latest Art</h2>
    <x-dex-card-large :pkmn="$latest->pokemon" />

    <h2>Recent Art</h2>
    <div class="dex-card-container">
    @foreach ($recent as $art)
        @if ($loop->first) @continue @endif
        <x-dex-card :pkmn="$art->pokemon" />
    @endforeach
    </div>
</x-layout>

