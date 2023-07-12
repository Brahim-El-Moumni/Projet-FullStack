let bg = $('#particles-js');
let audio = null 


$(document).keydown( () => {
    $(bg).css("background-color", getRandomColor())
})

$(".img").on("click", function () {
    let name = $(this).attr("name");
    const firstLetter = name.charAt(0).toUpperCase();
    const capitalizedName = firstLetter + name.slice(1) 
    $("#titre").text(capitalizedName)


    $(this).toggleClass("flash")

    let music = "sound/" + name + ".mp3"
    playMusic(music)

})

$("#btn").click( function () {
    let artiste = $("#input").val()
    const firstLetter = artiste.charAt(0).toUpperCase();
    const capitalizedName = firstLetter + artiste.slice(1) 
    $("#titre").text(capitalizedName)

    let music = "sound/" + artiste + ".mp3"
    playMusic(music)

})


function getRandomColor() {
    let letters = "0123456789ABCDEF";

    let color = "#";
    for(let i = 1; i <= 6; i++){
        color = color + letters[Math.floor(Math.random() * letters.length)]
    }
    return color
}


function playMusic(music) {
    if(audio !== null ) {
        audio.pause();
    }

    audio = new Audio(music);
    audio.play();
}