<x-app-layout>


    Latest Art
    <div class="flex">
        @foreach ($latestArt as $art)
            <img src="/storage/{{$art->image}}" alt="" style="width: 100px">
        @endforeach
    </div>
</x-app-layout>
