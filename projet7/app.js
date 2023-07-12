const joke = document.getElementById('joke')
const jokeBtn = document.getElementById('jokeBtn')

jokeBtn.addEventListener('click', generateJoke)

async function generateJoke() {
    const header = {
        headers: {
            Accept: 'application/json',
        },
    }

    const reponse =  await fetch('https://icanhazdadjoke.com/', header)

    const data = await reponse.json()
    joke.innerHTML = data.joke
    
}