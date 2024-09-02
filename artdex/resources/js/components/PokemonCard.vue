<template>
    <a :href="pokemon.url" class="m-4">
        <div class="h-28 w-52 rounded-lg relative hover:cursor-pointer bg-slate-800 shadow-md shadow-black">
            <div class="h-1/4 rounded-t-lg border-b-2 border-white" style="background: {{ background }}">

            </div>
            <div>

            </div>
            <div class="h-3/4 flex flex-col items-end justify-around pb-1 pr-2 leading-none">
                <div><span class="opacity-50"># </span>{{ pokemon.formatted_number }}</div>
                <div>{{ pokemon.title }}</div>
                <div v-if="!loadingTypes">
                    <!-- <i v-for="type in pokemon.types" :key="pokemon.id + '-' + type.id" :class="'fa-solid' + type-icon + 'p-1'" :style="{ color: type.color }"></i> -->
                </div>
            </div>
        </div>
    </a>
</template>

<script>
export default {
    props: ['pokemon'],
    data() {
        return {
            types: [],
            loadingTypes: true
        }
    },
    async created() {
        let filterArray = [];
        this.pokemon.types.forEach(element => {
            filterArray.push(element.slug);
        });
        const filters = filterArray.join('|');

        try {
            const res = await fetch('/api/taxonomies/types/terms?filter[slug]=' + filters);
            const { data } = await res.json();
            this.types = data;
        } catch(e) {
            console.log(e);
        }
    }
}
</script>

<style>

</style>
