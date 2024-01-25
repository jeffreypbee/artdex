<x-app-layout>

    <div class="font-bold text-lg">
        Latest Art
    </div>
    <div class="flex m-5">
        @foreach ($latestArt as $art)
            <div class="flex flex-col items-center">
                <img src="/storage/{{$art->image}}" alt="" class="transition ease-in-out hover:animate-bounce" style="width: 100px">
                <div class="text-sm">
                    {{date('M d, Y', strtotime($art->publish_date))}}
                </div>
            </div>

        @endforeach
    </div>

    <div class="font-bold text-lg">
        Upcoming Art
    </div>
    <div class="flex m-5">
        @foreach ($upcomingArt as $art)
            <div class="flex flex-col items-center">
                <img src="/storage/{{$art->image}}" alt="" class="transition ease-in-out hover:animate-bounce"
                style="width: 100px; filter: brightness(0) invert(1)">
                <div class="text-sm">
                    {{date('M d, Y', strtotime($art->publish_date))}}
                </div>
            </div>

        @endforeach
    </div>

</x-app-layout>
