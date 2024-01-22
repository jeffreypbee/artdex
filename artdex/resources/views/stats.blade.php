<x-app-layout>
    <x-page-title>Stats</x-page-title>

    <div class="flex justify-around">
        <div>
            <div class="text-lg">Types</div>
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
                    <div class="flex items-center gap-2">
                        <i class="fa-solid {{$type->icon}}" style="color: {{$type->color}}"></i>
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
            </div>
        </div>

        <div>
            <div class="text-lg">Generations</div>
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
                    <div class="flex items-center gap-2">
                        <div>{{$generation->generation}}</div>
                        <div class="rounded h-2 bg-black"
                            style="width: 200px">
                            <div class="rounded h-2"
                                style="width: {{floor(200 * $fraction)}}px; background: white"></div>
                        </div>
                        <div>
                            {{floor($fraction * 100)}}% Pokemon Drawn
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

    </div>




</x-app-layout>
