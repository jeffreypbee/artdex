@props(['type'])

<div class="flex justify-between items-center p-1 rounded-lg font-extrabold"
    style="width: 100px; background: linear-gradient(135deg, {{$type->color}} 40%, rgb(40, 52, 90) 40%)">
    <i class="fa-solid {{$type->icon}} fa-fw"></i>
    <div class="pr-1">{{$type->name}}</div>
</div>
