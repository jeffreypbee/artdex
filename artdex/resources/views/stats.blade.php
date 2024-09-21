<x-app-layout>
    <x-page-title>Stats</x-page-title>

    <div class="md:flex justify-around gap-10">
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
                    @endphp
                    <a href="/dex?type={{$type->name}}">
                        <x-completion-bar :title="$type->name" :icon="$type->icon" :color="$type->color" :number="$artCount" :total="count($type->getPokemon())"/>
                    </a>
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
                    @endphp
                    <a href="/dex?gen={{$generation->generation}}">
                        <x-completion-bar :title="'Generation ' . $generation->generation" :icon="$generation->icon" :color="$generation->color" :number="$artCount" :total="count($generation->pokemon)" />
                    </a>
                @endforeach
            </div>
        </x-collapsible-widget>
    </div>




</x-app-layout>
