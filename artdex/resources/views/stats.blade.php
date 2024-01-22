<x-app-layout>
    <x-page-title>Stats</x-page-title>

    @foreach ($types as $type)
        @php
            $artCount = 0;
            foreach($type->getPokemon() as $pokemon) {
                if ($pokemon->hasArt()) {
                    $artCount++;
                }
            }
            $fraction = $artCount / count($type->getPokemon())
        @endphp
        <div class="flex items-center gap-2">
            <div class="rounded h-2 bg-black"
                style="width: 200px">
                <div class="rounded h-2"
                    style="width: {{floor(200 * $fraction)}}px; background: {{$type->color}}"></div>
            </div>
            <div>
                {{floor($fraction * 100)}}% Pokemon Drawn
            </div>
        </div>
    @endforeach
</x-app-layout>
