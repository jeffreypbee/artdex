// This is all you.
import { createApp } from 'vue'
import Pokedex from './components/Pokedex.vue'

const app = createApp()

app.component('pokedex', Pokedex)

app.mount('#app')
