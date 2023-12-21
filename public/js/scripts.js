console.log("Está funcionando!")
/*  Js de Carrosel de Noticias */
document.addEventListener('DOMContentLoaded', function() {
    console.log("Está funcionando!");

    let count = 1;

    document.getElementById("radio1").checked = true;

    function nextImage() {
        count++;
        if (count > 4) {
            count = 1;
        }

        document.getElementById("radio" + count).checked = true;
    }

    setInterval(nextImage, 3000);
});
