<a href="/pokemon/{{$path}}">
<div x-data="{showInfo: false}"
    @mouseenter="showInfo = true"
    @mouseleave="showInfo = false"
    class="relative hover:cursor-pointer hover:bg-blue-gray">
    <img src="/storage/{{$art->image}}" alt="" class="">
    <div
        x-show="showInfo"
        class="w-full h-full p-2 flex flex-col justify-between items-center absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
        <div class="w-full text-2xl backdrop-blur-sm">
            <span>{{$number}}</span>&nbsp;
            <span class="font-bold">{{$title}}</span>
        </div>
        <div class="w-full flex justify-end backdrop-blur-sm">
            {{date('M d, Y', strtotime($art->publish_date))}}
        </div>
    </div>
</div>
</a>
