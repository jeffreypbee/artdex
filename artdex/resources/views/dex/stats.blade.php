<x-layout>

    {{count($art)}} / {{count($dex)}} Pokemon Drawn

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
            {{$artCount}} / {{$type->pokemon->count()}} {{$type->name}} Pokemon Drawn
        </div>        
    @endforeach

</x-layout>