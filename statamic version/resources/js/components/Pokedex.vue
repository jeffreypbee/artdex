<template>
    <div class="bg-gray">
        <div class="flex">
            <div v-for="type in types" :key="type.id">
                <i class="fa-solid p-1" :class="type.icon" :style="{ color: type.color }"></i>
            </div>
        </div>

    </div>
    <div>
        <div v-if="loadingPokedex">
            Loading
        </div>
        <div v-else>
            <div class="flex flex-wrap justify-center">
                <PokemonCard v-for="pokemon in pokedex" :key="pokemon.id" :pokemon="pokemon" />
            </div>
        </div>
    </div>

</template>

<script>
import PokemonCard from './PokemonCard.vue'

export default {
    components: {
        PokemonCard
    },
    props: ['pokedex', 'types', 'tags'],
    data() {
        return {
            // loadingPokedex: true,
            // loadingFilters: true,
            // types: null,
            // pokedex: null
        }
    },
    methods: {
        getTypes(pokemon) {
            let types = null;
            pokemon.types.forEach(element => {
                types.push(this.types.find(type => {
                    element.slug == type.slug;
                }));
            });
            return types;
        }
    },
    mounted() {
        console.log(this.types);
    }
    // async created() {
    //     try {
    //         const res = await fetch('/api/taxonomies/types/terms');
    //         const { data } = await res.json();
    //         this.types = data;
    //         this.loadingFilters = false;
    //     } catch(e) {
    //         console.log(e);
    //     }
    //     try {
    //         const res = await fetch('/api/collections/pokemon/entries?limit=2000');
    //         const { data } = await res.json();
    //         this.pokedex = data;
    //         this.loadingPokedex = false;
    //     } catch(e) {
    //         console.log(e);
    //     }
    // }
}
</script>

<style>

</style>
