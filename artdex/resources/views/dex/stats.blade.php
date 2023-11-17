<x-layout>

    <x-progress-widget text="Pokemon Drawn" :number="count($art)" :total="count($dex)" color="#ffffff" icon="circle" />

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
    
</x-layout>

<style>

.type-progress-bars {
    display: flex;
    flex-direction: column;
    gap: 10px;
}

</style>