@props(['text', 'icon', 'color', 'number', 'total'])

@php
    if ($color === null) {
        $color === '#ffffff';
    }
@endphp

<div class="progress-widget">
    <div class="icon">
        @unless ($icon === null)
        <i class="fa-solid fa-{{$icon}}" style="font-size: 2rem; color: {{$color}};"></i>
        @endunless
    </div>
    <div class="info">
        <div class="text">{{$text}}</div>
        <div class="progress-bar-bg">
            <div class="progress-bar" style="
                width: {{floor(($number / $total) * 100)}}%;
                background-color: {{$color}};
                ">&nbsp;</div>
        </div>
        <div class="numbers">
            <div>{{$number}}</div>
            <div>{{floor(($number / $total) * 100)}}%</div>
            <div>{{$total}}</div>
        </div>
    </div>
</div>

<style>

.progress-widget {
    display: flex;
    justify-content: space-between;
    background-color: var(--gray);
    padding: 10px;
    width: 250px;
    border-radius: 20px;
    gap: 5px;
}

.progress-widget .icon {
    display: flex;
    width: 70%;
    justify-content: center;
    align-items: center;
}

.progress-widget .progress-bar-bg {
    width: 200px;
    height: 10px;
    border-radius: 5px;
    background-color: var(--darkgray);
    padding: 2px;
}

.progress-widget .progress-bar-bg .progress-bar {
    height: 100%;
    border-radius: 5px;
}

.progress-widget .info {
    display: flex;
    flex-direction: column;
}

.progress-widget .info .numbers {
    display: flex;
    justify-content: space-between;
}

</style>