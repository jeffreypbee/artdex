<x-layout>

    <h1>The Stats</h1>
    <x-progress-widget text="Pokemon Drawn" :number="count($art)" :total="count($dex)" color="#ffffff" icon="pencil" />

    <h2>Breakdowns</h2>
    <div class="stats-columns">
        <section class="type-progress-bars">
            <h3>Pokemon Types</h3>
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
        </section>

        <section class="generation-progress-bars">
            <h3>Generations</h3>
            <x-progress-widget text="Generation 1 Pokemon Drawn" number="3" total="151" color="#ff0000" icon="1" />
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