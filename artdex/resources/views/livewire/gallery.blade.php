<div>
    Gallery
    @foreach ($gallery as $art)
        <div wire:key='{{$art->id}}'>{{$art->artable->name}}</div>
    @endforeach
</div>
