<x-app-layout>
    <x-page-title>#{{$pokemon->getNumber()}} - {{$pokemon->name}}</x-page-title>
    <div class="flex flex-col items-center">
        <div class="flex gap-2">
            <x-type-pill :type="$pokemon->type1" />
            @unless ($pokemon->type2 == null)
            <x-type-pill :type="$pokemon->type2" />
            @endunless
        </div>

        @foreach ($pokemon->art as $art)
            @if ($art->isPublished())
                <img src="/storage/{{$art->image}}" alt="">
            @endif
        @endforeach
    </div>

</x-app-layout>
