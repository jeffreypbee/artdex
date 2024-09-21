<div x-data="{hovering: false}" class="border-b-2 border-white transition-all ease-in-out" :class="hovering ? 'animate-pulse' : ''"
    style="background: center/150% no-repeat url('/images/banner.png')">
    <div class="p-5 md:flex justify-between backdrop-blur-md"
        style="background: linear-gradient(to right, rgb(15 23 42), transparent, rgb(15 23 42))">
        <div class="text-2xl font-extrabold" @mouseenter="hovering=true" @mouseleave="hovering=false">
            <a href="/">{{config('app.name')}}</a>
        </div>

    </div>
</div>

