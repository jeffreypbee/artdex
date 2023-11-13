<div class="admin">
    <div class="admin-nav">
        <a href="/admin">Home</a>
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
}

.admin-main {
    grid-area: admin-main;
    display: flex;
    flex-direction: column;
    align-items: center;
}

</style>
