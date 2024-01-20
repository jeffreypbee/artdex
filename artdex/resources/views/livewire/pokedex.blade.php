<div>
    <div class="flex flex-wrap gap-10">
        @foreach ($pokedex as $pkmn)
            <div class="w-50 bg-white">
                {{$pkmn->name}}
                @unless (count($pkmn->art) === 0)
                    <img src="/storage/{{$pkmn->art[0]->image}}" alt="" style="width: 100px">
                @endunless
            </div>
        @endforeach
    </div>
</div>
