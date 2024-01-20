<div class="rounded-lg bg-white" style="width: 100px">
    @unless ($form == null)
        <div>{{$form->name}}</div>
    @endunless
    <div>{{$pokemon->name}}</div>
    @unless ($image == null)
        <img src="/storage/{{$image}}" alt="">
    @endunless
</div>
