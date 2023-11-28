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
    width: 100%;
    background: linear-gradient(var(--darkgray), transparent);
}

.widget .title {
    font-size: 1.5rem;
    font-weight: bold;
    border-bottom: 1px solid white;
}

.widget .content {
    padding: 5px;
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 10px;
}

</style>