<x-app-layout>
    <x-page-title>Stats</x-page-title>

    {{-- <div class="md:flex justify-around gap-10">
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
    </div> --}}


    <section class="w-full flex flex-col items-center">
        <table class="">
            <tr>
                <td></td>
                @foreach ($generations as $gen)
                    <th><i class="fa-solid {{$gen->icon ?? 'fa-circle'}} fa-fw" style="color: {{$gen->color ?? 'white'}}" title="Gen {{$gen->generation}}"></i></th>
                @endforeach
                <th>Total</th>
            </tr>
            @foreach ($types as $type)
                <tr style="background: linear-gradient(to bottom, transparent, {{$type->color}}55)">
                @php
                    $typeArtCount = 0;
                @endphp
                    <td class="p-4">
                        <i class="fa-solid {{$type->icon ?? 'fa-circle'}} fa-fw" style="color: {{$type->color ?? 'white'}}" title="{{$type->name}}"></i>
                        <div>{{$type->name}}</div>
                    </td>
                    @foreach ($generations as $gen)
                        @php
                            $count = 0;
                            $artCount = 0;
                            foreach ($type->getPokemon() as $pkmn) {
                                if ($pkmn->generation == $gen) {
                                    $count++;
                                    if ($pkmn->hasArt()) {
                                        $artCount++;
                                        $typeArtCount++;
                                    }
                                }
                            }
                            $divider = 1;
                            if ($count > 0) {
                                $divider = $count;
                            }
                        @endphp
                        <td class="p-4"
                            style="border-right: .25rem solid {{$gen->color}}66">
                            <div>{{$artCount}} / {{$count}}</div>
                            <div class="font-bold">{{floor($artCount * 100 / $divider)}}%</div>
                        </td>
                    @endforeach
                    @php
                        $fraction = $typeArtCount / count($type->getPokemon());
                        @endphp
                    <td class="p-4">
                        <div>{{$typeArtCount}} / {{count($type->getPokemon())}}</div>
                        <div class="font-bold">{{floor($fraction * 100)}}%</div>
                    </td>
                </tr>
                <tr>
                    <td colspan="{{count($generations) + 2}}" class="h-2 bg-blue-gray">

                        <div class="h-2" style="background: {{$type->color}}; width: {{floor($fraction * 100)}}%">&nbsp;</div>
                    </td>
                </tr>
            @endforeach
        </table>
    </section>


</x-app-layout>
