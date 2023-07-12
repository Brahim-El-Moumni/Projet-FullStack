const pokeContainer = document.querySelector("#poke-container")
const numPokemon = 151
const colors = {
    fire: '#FDDFDF',
    grass: '#DEFDE0',
	electric: '#FCF7DE',
	water: '#DEF3FD',
    ice: '#ADD8E6',
    // ice: '#96D9D6',
	ground: '#f4e7da',
	rock: '#d5d5d4',
	fairy: '#fceaff',
	poison: '#98d7a5',
	bug: '#f8d5a3',
	dragon: '#97b3e6',
	psychic: '#eaeda1',
	flying: '#F5F5F5',
	fighting: '#E6E0D4',
    ghost: '#735797',
	normal: '#F5F5F5'
}

const fetchPokemons = async () => {
    for( let i = 1; i <= numPokemon; i++) {
        await getPokemon(i)
    }
}


const getPokemon = async (id) => {
    const url = `https://pokeapi.co/api/v2/pokemon/${id}`
    const response = await fetch(url)
    const data = await response.json()
    createPokemon(data)
}

const createPokemon = (pokemon) => {
    const pokemonCard = document.createElement('div')
    pokemonCard.classList.add("pokemon")

    const name = pokemon.name[0].toUpperCase() + pokemon.name.slice(1)
    const id = pokemon.id.toString().padStart(3, "0")
    const type = pokemon.types[0].type.name
    const color = colors[type]
    console.log(name, type, color)

    pokemonCard.style.backgroundColor = color

    const pokemonHTML = `<div class="img-container">
    <img src="https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/${pokemon.id}.png">
    </div>
    <div class="info"> 
        <span class="number">#${id}</span>
        <h3 class="name">${name}</h3>
        <small class="type">Type:<span> ${type}</span></small>
    </div>
    `
    console.log(pokemon.id, id)

    pokemonCard.innerHTML = pokemonHTML
    pokeContainer.appendChild(pokemonCard)
}
fetchPokemons()
