<div class="admin">
    <div class="admin-nav">
        <h3>Admin Panel</h3>
        <section>
            <a href="/admin">Home</a>
        </section>
        <section>
            <h4>Art</h4>
            <a href="/admin/art">All</a>
            <a href="/admin/art/create">Add New</a>
        </section>
        <section>
            <h4>Pokemon</h4>
            <a href="/admin/pkmn">All</a>
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
