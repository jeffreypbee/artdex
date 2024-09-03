<x-app-layout>
    <x-page-title>#{{$pokemon->getNumber()}} - {{$pokemon->name}}</x-page-title>
    <div class="w-full relative">
        @php
            $prev = $pokemon->previous();
            $next = $pokemon->next();
        @endphp
        @unless ($prev == null)
            <a href="/pokemon/{{$prev->name}}">
                <button class="absolute left-10 p-2 rounded-xl hover:bg-blue-gray">< #{{$prev->getNumber()}} - {{$prev->name}}</button>
            </a>
        @endunless

        @unless ($next == null)
            <a href="/pokemon/{{$next->name}}">
                <button class="absolute right-10 p-2 rounded-xl hover:bg-blue-gray">#{{$next->getNumber()}} - {{$next->name}} ></button>
            </a>
        @endunless
    </div>

    @php
        $background = 'linear-gradient(to right';
        foreach ($pokemon->getColors() as $color) {
            $background .= ', ' . $color;
        }
    @endphp

    <div class="flex flex-col items-center">
        <div class="h-96 w-2/5 rounded-2xl relative shadow-md shadow-black"
            style="background: rgb(40, 52, 90)">
            <div class="flex justify-end px-4 items-center h-1/6 rounded-t-2xl border-b-2 border-white text-darkgray font-bold text-2xl"
                style="background: {{$background}}">
                {{$pokemon->name}}
            </div>
            <div>
                @if ($pokemon->hasArt())
                    <img class="w-64 lg:absolute lg:w-auto z-10 -bottom-16 -left-5 transition-all"
                    src="/storage/{{$pokemon->art[0]->image}}" alt="">
                @endif
            </div>
            <div class="h-5/6 flex flex-col items-end justify-between leading-none text-lg">
                <div class="w-full h-full p-4 flex flex-col items-end justify-evenly leading-none rounded-b-2xl"
                    style="background: rgb(40, 52, 90)">
                    <div><span class="opacity-50"># </span>{{$pokemon->getNumber()}}</div>

                    <x-generation-pill :generation="$pokemon->generation" />

                    <div class="flex m-2 gap-2">
                        <x-type-pill :type="$pokemon->type1" />
                        @unless ($pokemon->type2 == null)
                        <x-type-pill :type="$pokemon->type2" />
                        @endunless
                    </div>
                </div>
            </div>
        </div>

        Art
        @foreach ($pokemon->art as $art)
            @if ($art->isPublished())
                <img src="/storage/{{$art->image}}" alt="">
            @endif
        @endforeach
    </div>





</x-app-layout>
