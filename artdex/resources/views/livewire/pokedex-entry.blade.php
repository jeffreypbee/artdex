<div class="rounded-lg relative" style="width: 120px; height: 150px">
    <div class="rounded-lg h-full flex flex-col" style="background: linear-gradient(to bottom, transparent, rgb(40, 52, 90))">
        <div class="h-1/2 rounded-t-lg" style="background: {{$background}}">
            <div class="text-sm text-slate-800 font-bold pl-1">
                <span class="text-slate-600">#</span>{{$pokemon->getNumber()}}
            </div>
        </div>
        @unless ($image == null)
            <img class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2" src="/storage/{{$image}}" alt="" style="width: 120px; margin-block: -20px">
        @endunless
        <div class="h-1/2 flex flex-col justify-end">

            <div class="pl-1 flex flex-col gap-0 leading-none">
                @if ($isForm)
                    <div class="font-normal text-sm text-gray-300">{{$form->name}}</div>
                @endif
                <div class="font-bold">{{$pokemon->name}}</div>
            </div>
            <div class="flex justify-center pb-1">
                @foreach ($types as $type)
                    <i class="fa-solid {{$type->icon}} p-1" style="color: {{$type->color}}"></i>
                @endforeach
            </div>
        </div>


    </div>

</div>
