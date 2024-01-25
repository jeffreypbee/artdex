<x-app-layout>


    Latest Art
    <div class="flex">
        @foreach ($latestArt as $art)
            <img src="/storage/{{$art->image}}" alt="" class="transition ease-in-out hover:animate-bounce" style="width: 100px">
        @endforeach
    </div>

    Upcoming Art
    <div class="flex">
        @foreach ($upcomingArt as $art)
            <img src="/storage/{{$art->image}}" alt="" class="transition ease-in-out hover:animate-bounce" style="width: 100px">
        @endforeach
    </div>

</x-app-layout>
