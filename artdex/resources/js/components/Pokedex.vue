<template>
    <div v-if="loadingPokedex">
        Loading
    </div>
    <div v-else>
        <div v-for="pokemon in pokedex" :key="pokemon.id">{{ pokemon.title }}</div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            loadingPokedex: true,
            pokedex: null
        }
    },
    async created() {
        try {
            const res = await fetch('/api/collections/pokemon/entries?limit=2000');
            const { data } = await res.json();
            this.pokedex = data;
            this.loadingPokedex = false;
            console.log(this.pokedex);
        } catch(e) {
            console.log(e);
        }
    }
}
</script>

<style>

</style>
