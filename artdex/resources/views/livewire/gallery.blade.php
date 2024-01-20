<div class="flex">
    @foreach ($gallery as $art)
        <div>
            <img src="/storage/{{$art->image}}" alt="" style="width: 100px">
        </div>
    @endforeach
</div>
