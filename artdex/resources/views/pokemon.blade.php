<x-app-layout>
    <x-page-title>#{{$pokemon->getNumber()}} - {{$pokemon->name}}</x-page-title>
    <div class="w-full relative">
        @php
            $prev = $pokemon->previous();
            $next = $pokemon->next();
        @endphp
        @unless ($prev == null)
            <a href="/pokemon/{{$prev->id}}">
                <button class="absolute left-10 p-2 rounded-xl hover:bg-blue-gray">< #{{$prev->getNumber()}} - {{$prev->name}}</button>
            </a>
        @endunless

        @unless ($next == null)
            <a href="/pokemon/{{$next->id}}">
                <button class="absolute right-10 p-2 rounded-xl hover:bg-blue-gray">#{{$next->getNumber()}} - {{$next->name}} ></button>
            </a>
        @endunless
    </div>
    <div class="flex flex-col items-center">

        <x-generation-pill :generation="$pokemon->generation" />

        <div class="flex m-2 gap-2">
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
