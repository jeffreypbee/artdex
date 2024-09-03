@props(['generation'])

<a href="/dex?gen={{$generation->generation}}">
    <div class="flex justify-between items-center p-1 rounded-lg font-extrabold bg-blue-gray"
        style="width: 150px; background: linear-gradient(-125deg, {{$generation->color}} 38%, rgb(40, 52, 90) 39%)">
        <div class="pl-1">Generation</div>
        <div class="p-1 leading-none rounded-lg font-extrabold text-xl bg-blue-gray" style="color: {{$generation->color}}">
            {{-- {{$generation->generation}} --}}
            <i class="fa-solid {{$generation->icon}} fa-fw fa-lg" style="color: {{$generation->color}}"></i>
        </div>
    </div>
</a>
