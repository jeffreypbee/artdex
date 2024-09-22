@props(['generation'])

<a href="/dex?gen={{$generation->generation}}">
    <div class="w-28 h-8 flex justify-between items-center p-1 rounded-lg font-extrabold bg-blue-gray hover:scale-105 transition-all shadow-md shadow-black"
        style="background: linear-gradient(-125deg, {{$generation->color}} 38%, rgb(40, 52, 90) 39%)">
        <div class="pl-1">Gen</div>
        <div class="p-1 leading-none rounded-lg font-extrabold text-xl">
            {{-- {{$generation->generation}} --}}
            <i class="fa-solid {{$generation->icon}} fa-fw fa-lg text-slate-900"></i>
        </div>
    </div>
</a>
