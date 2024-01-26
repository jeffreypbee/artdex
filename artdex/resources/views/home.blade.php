<x-app-layout>

    <section class="m-5 flex flex-col items-center">
        <x-page-title>
            Latest Art
        </x-page-title>
        @php
            $newestArt = $latestArt->shift();
        @endphp
        <div>
            <img src="/storage/{{$newestArt->image}}" alt="">
        </div>
        <div class="flex m-5 gap-2">
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
    </section>


    @unless (count($upcomingArt) === 0)
        <section class="m-5 flex flex-col items-center">
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
