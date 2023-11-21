<div class="admin">
    <div class="admin-nav">
        <section>
            <a href="/admin">Home</a>
        </section>
        <section>
            <a href="/admin/art">Art</a>
            <a href="/admin/art/create">Add New</a>
        </section>
        <section>
            <a href="/admin/pkmn">Pokemon</a>
            <a href="/admin/pkmn/create">Add New</a>
        </section>        
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
    background: var(--gray);
    border-radius: 20px;
    padding: 20px;
    display: flex;
    flex-direction: column;
}

.admin-nav section {
    display: flex;
    flex-direction: column;
    border-bottom: 1px solid white;
    padding-block: 10px;
}

.admin-main {
    grid-area: admin-main;
    display: flex;
    flex-direction: column;
    align-items: center;
}

</style>
