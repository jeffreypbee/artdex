<div class="rounded-lg relative" style="width: 120px; height: 150px">
    <div class="rounded-lg h-full flex flex-col" style="background: linear-gradient(to bottom, transparent, rgb(40, 52, 90))">
        <div class="h-1/2 rounded-t-lg" style="background: {{$background}}">

        </div>
        @unless ($image == null)
            <img class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2" src="/storage/{{$image}}" alt="" style="width: 120px; margin-block: -20px">
        @endunless
        <div class="h-1/2 flex flex-col justify-end">
            @if ($isForm)
                <div>{{$form->name}}</div>
            @endif
            <div class="p-1">{{$pokemon->name}}</div>
            <div class="flex justify-center">
                @foreach ($types as $type)
                    <div>
                        {{-- <i class="fa-solid {{$type->icon}}"></i> --}}
                        <span style="color: {{$type->color}}">X</span>
                    </div>
                @endforeach
            </div>
        </div>


    </div>

</div>
