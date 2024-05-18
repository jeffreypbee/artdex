<a href="/pokemon/{{$path}}">
<div x-data="{showInfo: false}"
    @mouseenter="showInfo = true"
    @mouseleave="showInfo = false"
    class="relative hover:cursor-pointer hover:bg-blue-gray rounded-lg">
    <img src="/storage/{{$art->image}}" alt="" class="" style="width: 250px">
    <div
        x-show="showInfo"
        class="p-2 flex flex-col absolute bottom-0 left-0 w-full backdrop-blur-sm rounded-lg">
        <div>
            #{{$number}}
        </div>
        <div>
            {{$title}}
        </div>
        <div>
            {{date('M d, Y', strtotime($art->publish_date))}}
        </div>
    </div>
</div>
</a>
