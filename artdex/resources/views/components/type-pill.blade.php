@props(['type'])

<a href="/dex?type={{$type->name}}">
    <div class="flex justify-between items-center p-1 rounded-lg font-extrabold"
        style="width: 100px; background: linear-gradient(125deg, {{$type->color}} 35%, rgb(40, 52, 90) 36%)">
        <i class="fa-solid {{$type->icon}} fa-fw"></i>
        <div class="pr-1">{{$type->name}}</div>
    </div>
</a>

