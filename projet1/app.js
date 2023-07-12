const text = document.querySelector('#text')
const speed = document.querySelector('#speed')
const content = "I love this game"
console.log(speed)
let index = 1
let fast = 300 / speed.value

console.log(content.slice(0,1))

function typeWriter() {
    if(index <= content.length) {
        text.innerHTML = content.slice(0, index)
        index++
        if(index > content.length){
            index = 1
        }
        setTimeout(typeWriter, fast)
    }
}

speed.addEventListener("input", (event) => {
    fast = 300 / event.target.value
})

typeWriter()