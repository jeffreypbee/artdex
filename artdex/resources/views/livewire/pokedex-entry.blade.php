<div class="rounded-lg relative" style="height: 120px; width: 200px; background: rgb(40, 52, 90)">
    <div class="h-1/4 rounded-t-lg border-b-2 border-white" style="background: {{$background}}">

    </div>
    <div>
        @if ($image == null)
            <img src="/images/pokeball_gray.png" alt="" class="absolute top-1/2 transform -translate-y-1/2 opacity-50">
            {{-- <i class="fa-solid fa-question fa-2xl absolute left-12 text-gray-500"></i> --}}
        @else
            <img src="/storage/{{$image}}" alt="" style="width: 150px" class="absolute top-1/2 -left-5 transform -translate-y-1/2">
        @endif
    </div>
    <div class="h-3/4 flex flex-col items-end justify-around pb-1 pr-2 leading-none">
        <div class="text-sm">
            <span class="text-gray-400">#</span>{{$pokemon->getNumber()}}
        </div>
        <div class="flex flex-col items-end">
            <div class="text-sm -mb-1">
                @if ($isForm)
                    {{$form->name}}
                @endif
            </div>
            <div class="font-bold">
                {{$pokemon->name}}
            </div>
        </div>
        <div>
            @foreach ($types as $type)
                <i class="fa-solid {{$type->icon}} p-1" style="color: {{$type->color}}"></i>
            @endforeach
        </div>

    </div>
</div>
