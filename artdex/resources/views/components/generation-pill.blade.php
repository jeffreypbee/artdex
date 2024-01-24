@props(['generation'])

<a href="/dex?gen={{$generation->generation}}">
    <div class="flex justify-between items-center p-1 rounded-lg font-extrabold bg-blue-gray"
        style="width: 150px; background: linear-gradient(-125deg, {{$generation->color}} 35%, rgb(40, 52, 90) 36%)">
        <div class="pl-1">Generation</div>
        <div class="p-2 leading-none rounded-lg font-extrabold text-xl bg-blue-gray" style="color: {{$generation->color}}">{{$generation->generation}}</div>
        {{-- <i class="fa-solid {{$generation->icon}} fa-fw fa-lg" style="color: white"></i> --}}
    </div>
</a>
