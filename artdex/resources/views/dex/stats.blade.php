<x-layout>

    <h1>The Stats</h1>
    <x-progress-widget text="Pokemon Drawn" :number="count($art)" :total="count($dex)" color="#ffffff" icon="pencil" />

    <h2>Breakdowns</h2>
    <div class="columns">
        <section>
            <x-widget title="Pokemon Types">
                @foreach ($types as $type)
                @php
                    $artCount = 0;
                    foreach($type->pokemon as $pkmn) {
                        if ($pkmn->art !== null) {
                            $artCount++;
                        }
                    }
                @endphp
                <div>
                    <x-progress-widget :text="ucfirst($type->name) . ' Pokemon Drawn'" :number="$artCount" :total="count($type->pokemon)" :color="$type->color1" :icon="$type->icon" />
                </div>        
                @endforeach
            </x-widget>
        </section>

        <section>
            <x-widget title="Generations">
                @foreach ($gens as $gen)
                @php
                    $artCount = 0;
                    foreach($gen->pokemon as $pkmn) {
                        if ($pkmn->art !== null) {
                            $artCount++;
                        }
                    }
                @endphp
                <x-progress-widget text="Generation {{$gen->id}} Pokemon Drawn" :number="$artCount" :total="count($gen->pokemon)" :color="$gen->color" :icon="$gen->id" />
                @endforeach
            </x-widget>
        </section>
    </div>
    
    
</x-layout>

<style>

.stats-columns {
    width: 100%;
    display: flex;
    justify-content: space-evenly;
}

.type-progress-bars, .generation-progress-bars {
    display: flex;
    flex-direction: column;
    gap: 10px;
}

</style>