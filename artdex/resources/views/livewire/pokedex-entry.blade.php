<div class="rounded-lg bg-white" style="
    width: 100px;
    background: {{$background}}
    ">
    @if ($isForm)
        <div>{{$form->name}}</div>
    @endif
    <div>{{$pokemon->name}}</div>
    @unless ($image == null)
        <img src="/storage/{{$image}}" alt="">
    @endunless
</div>
