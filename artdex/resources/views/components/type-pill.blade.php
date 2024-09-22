@props(['type'])

<a href="/dex?type={{$type->name}}">
    <div class="w-28 h-8 flex justify-between items-center p-1 rounded-lg font-extrabold shadow-md shadow-black hover:scale-105 transition-all"
        style="background: linear-gradient(125deg, {{$type->color}} 35%, rgb(40, 52, 90) 36%)">
        <i class="fa-solid {{$type->icon}} fa-fw text-slate-900"></i>
        <div class="pr-1">{{$type->name}}</div>
    </div>
</a>

