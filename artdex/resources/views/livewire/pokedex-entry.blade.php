<div class="rounded-lg bg-white p-1"
    style="
        width: 120px;
        background: {{$background}}
    ">
    <div class="rounded-lg h-full flex flex-col justify-end" style="background: linear-gradient(to bottom, transparent, rgb(40, 52, 90))">
        @unless ($image == null)
            <img src="/storage/{{$image}}" alt="">
        @endunless
        @if ($isForm)
            <div>{{$form->name}}</div>
        @endif
        <div>{{$pokemon->name}}</div>
        <div class="flex justify-between">
            @foreach ($types as $type)
                <div class="w-40" style="background: {{$type->color}}">
                    <i class="fa-solid {{$type->icon}}"></i>
                    {{$type->name}}
                </div>
            @endforeach
        </div>

    </div>

</div>
