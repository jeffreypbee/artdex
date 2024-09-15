<div>
    @foreach ($generations as $generation)
        <div class="my-4 flex flex-wrap gap-1">
            @foreach ($generation->pokemon as $pokemon)
                @if ($pokemon->hasArt())
                    <a href="/pokemon/{{$pokemon->name}}">
                        <div class="bg-white h-2 w-2 hover:cursor-pointer" title="{{$pokemon->getNumber()}} - {{$pokemon->name}}">&nbsp;</div>
                    </a>
                @else
                    <a href="/pokemon/{{$pokemon->name}}">
                        <div class="bg-gray-600 h-2 w-2 hover:cursor-pointer" title="{{$pokemon->getNumber()}} - {{$pokemon->name}}">&nbsp;</div>
                    </a>
                @endif
            @endforeach
        </div>
    @endforeach
</div>
