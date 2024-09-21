<div class="flex flex-wrap items-center gap-2">
    <div>
        {{floor($fraction * 100)}}% Pok&eacute;mon Drawn
    </div>
    <div class="w-full rounded h-2 bg-black">
        <div class="rounded h-2 bg-white" style="width: {{floor(100 * $fraction)}}%"></div>
    </div>

</div>
