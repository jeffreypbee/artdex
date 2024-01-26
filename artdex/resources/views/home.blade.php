<x-app-layout>

    <section class="flex flex-col justify-center items-center">

        <div class="w-3/4 h-64 flex flex-col justify-center items-center"
            style="background: radial-gradient(transparent 10%, rgb(15 23 42) 70%), center no-repeat url('/images/banner.png')">
            <div class="w-full flex flex-col justify-center items-center bg-gradient-to-r from-transparent via-blue-gray">
                <div class="text-3xl font-extrabold leading-none">ARTDEX</div>
                <div class="text-gray-400">by Jeffrey Bee</div>
            </div>

        </div>
    </section>

    <section class="m-10 flex flex-col items-center">
        <x-page-title>
            Latest Art
        </x-page-title>
        @php
            $newestArt = $latestArt->shift();
        @endphp
        <div class="flex flex-col items-center pb-5 rounded-xl bg-gradient-to-b from-transparent to-blue-gray">
            <div class="text-lg">
                #{{$newestArt->artable->getNumber()}} -
                {{$newestArt->artable->getName()}}
            </div>
            <div class="flex gap-5">
                @foreach ($newestArt->artable->getTypes() as $type)
                    <x-type-pill :type="$type" />
                @endforeach
            </div>
            <div>
                {{Carbon\Carbon::parse($newestArt->publish_date)->diffForHumans()}}
            </div>
            <img src="/storage/{{$newestArt->image}}" alt="">


        </div>
        <div class="flex items-center m-5 gap-2">
            @foreach ($latestArt as $art)
                @php
                    $colors = $art->artable->getColors();
                    $background = 'white';
                    if (count($colors) === 1) {
                        $background = $colors[0];
                    } else {
                        $background = 'linear-gradient(to right, ' . implode(', ', $colors) . ')';
                    }
                @endphp
                <div class="flex flex-col items-center rounded-xl"
                    style="background: {{$background}};">
                    <img src="/storage/{{$art->image}}" alt="" class="transition ease-in-out hover:animate-bounce"
                        style="width: 100px;">
                    <div class="w-full p-2 align-middle text-sm border-t-2 border-white rounded-b-lg bg-blue-gray">
                        {{date('M d, Y', strtotime($art->publish_date))}}
                    </div>
                </div>

            @endforeach

        </div>
        <a href="/gallery" class="w-3/4">
            <div class="p-2 flex flex-col items-center rounded-lg bg-blue-gray">
                <div>
                    <i class="fa-solid fa-palette fa-xl"></i>
                </div>
                <div>More Art</div>
            </div>
        </a>
    </section>


    @unless (count($upcomingArt) === 0)
        <section class="m-10 flex flex-col items-center">
            <x-page-title>
                Who's that Pok&eacute;mon?
            </x-page-title>
            <img src="/storage/{{$upcomingArt[0]->image}}" alt="" class="-m-5" style="filter: brightness(0) invert(1)">
            Find Out
            <div class="font-bold">
                {{Carbon\Carbon::parse($upcomingArt[0]->publish_date)->diffForHumans()}}
            </div>
        </section>
    @endunless



</x-app-layout>
