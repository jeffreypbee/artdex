<div class="relative">
    <img src="/storage/{{$art->image}}" alt="" class="hover:cursor-pointer" style="width: 250px">
    <div class="p-2 flex flex-col absolute bottom-0 left-0 w-full backdrop-blur-sm rounded-md">
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
