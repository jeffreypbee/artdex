<template>
    <div v-if="loaded">
        <div v-for="pokemon in pokedex" :key="pokemon.id">* {{ title }}</div>
    </div>
</template>

<script setup>
import { onMounted } from 'vue'
defineProps(['pokedex'])
let loaded = false

onMounted(() => {
    loaded=true
    console.log('Mounted!')
})
</script>

<style>

</style>
