<div class="flex">
    @foreach ($gallery as $art)
        <div>
            <img src="/storage/{{$art->image}}" alt="" style="width: 250px">
        </div>
    @endforeach
</div>
