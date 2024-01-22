<x-app-layout>
    <x-page-title>Stats</x-page-title>

    <div class="flex justify-around gap-10">
        <x-collapsible-widget title="Type Breakdown">
            <div>
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
                    <x-completion-bar :icon="$type->icon" :color="$type->color" :fraction="$fraction" />
                @endforeach
            </div>
        </x-collapsible-widget>

        <x-collapsible-widget title="Generation Breakdown">
            <div>
                @foreach ($generations as $generation)
                    @php
                        $artCount = 0;
                        foreach($generation->pokemon as $pokemon) {
                            if ($pokemon->hasArt()) {
                                $artCount++;
                            }
                        }
                        $fraction = $artCount / count($generation->pokemon)
                    @endphp
                    <x-completion-bar :icon="$generation->icon" :color="$generation->color" :fraction="$fraction" />
                @endforeach
            </div>
        </x-collapsible-widget>
    </div>




</x-app-layout>
