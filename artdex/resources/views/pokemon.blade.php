<x-app-layout>
    <x-page-title>#{{$pokemon->getNumber()}} - {{$pokemon->name}}</x-page-title>

    <div class="my-4 w-full flex justify-center gap-4">
        <a href="#forms"><button class="p-2 rounded-xl hover:bg-blue-gray">Forms</button></a>
        <a href="#gallery"><button class="p-2 rounded-xl hover:bg-blue-gray">Gallery</button></a>
    </div>

    <div class="w-full grid grid-cols-2">
        @php
            $prev = $pokemon->previous();
            $next = $pokemon->next();
        @endphp
        <div class="flex justify-start">
            @unless ($prev == null)
            <a href="/pokemon/{{$prev->name}}">
                <button class="p-2 rounded-xl hover:bg-blue-gray">< #{{$prev->getNumber()}} - {{$prev->name}}</button>
            </a>
            @endunless
        </div>

        <div class="flex justify-end">
            @unless ($next == null)
            <a href="/pokemon/{{$next->name}}">
                <button class="p-2 rounded-xl hover:bg-blue-gray">#{{$next->getNumber()}} - {{$next->name}} ></button>
            </a>
            @endunless
        </div>
    </div>

    @php
        $colors = $pokemon->getColors();
        if (count($colors) > 1) {
            $background = 'linear-gradient(to right';
            foreach ($pokemon->getColors() as $color) {
                $background .= ', ' . $color;
            }
        } else {
            $background = $colors[0];
        }

    @endphp

    <div class="flex flex-col items-center">

        <section class="md:flex">
            <div>
                @if ($pokemon->hasArt())
                <img src="/storage/{{$pokemon->art[0]->image}}" alt="">
                @endif
            </div>
            <div class="w-96 rounded-t-2xl bg-gradient-to-b from-blue-gray">
                <div class="w-full flex justify-end px-4 rounded-t-2xl border-b-2 border-white text-2xl" style="background: {{$background}}">
                    <span class="text-blue-gray">{{$pokemon->getNumber()}}</span>&nbsp;
                    <span class="text-slate-900 font-bold">{{$pokemon->name}}</span>
                </div>
                <div class="mt-10 flex flex-col gap-4 items-center">
                    <x-generation-pill :generation="$pokemon->generation" />
                    <div class="flex m-2 gap-2">
                        <x-type-pill :type="$pokemon->type1" />
                        @unless ($pokemon->type2 == null)
                        <x-type-pill :type="$pokemon->type2" />
                        @endunless
                    </div>
                </div>
            </div>
        </section>


        <section class="w-full m-10">
            <a id="forms"></a>
            <x-page-title>Forms</x-page-title>
        </section>

        <section class="w-full">
            <a id="gallery"></a>
            <x-page-title>Gallery</x-page-title>
            @foreach ($pokemon->art as $art)
                @if ($art->isPublished())
                    <img src="/storage/{{$art->image}}" alt="">
                @endif
            @endforeach
        </section>

    </div>





</x-app-layout>
