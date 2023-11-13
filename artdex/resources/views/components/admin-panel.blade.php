<div class="admin">
    <div class="admin-nav">
        <a href="/admin">Home</a>
        <hr>
        <a href="/admin/art">Art</a>
        <a href="/admin/art/create">Add New</a>
        <hr>
        <a href="/admin/pkmn">Pokemon</a>
        <a href="/admin/pkmn/create">Add New</a>
    </div>

    <div class="admin-main">
        {{$slot}}
    </div>
    
</div>

<style>

.admin {
    width: 100%;
    display: grid;
    grid-template-columns: 200px 1fr;
    grid-template-areas: "admin-nav admin-main"
}

.admin-nav {
    grid-area: admin-nav;
    display: flex;
    flex-direction: column;
}

.admin-nav hr {
    width: 100%;
}

.admin-main {
    grid-area: admin-main;
    display: flex;
    flex-direction: column;
    align-items: center;
}

</style>
