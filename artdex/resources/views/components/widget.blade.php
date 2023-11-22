@props(['title'])

<div class="widget">
    <div class="title">{{$title}}</div>

    <div class="content">
        {{$slot}}
    </div>
</div>

<style>

.widget {
    display: flex;
    flex-direction: column;
    border-radius: 20px;
    padding: 10px;
    background: var(--gray);
}

.widget .title {
    font-weight: bold;
    border-bottom: 1px solid white;
}

.widget .content {
    padding: 5px;
}

</style>