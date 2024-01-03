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

function openModal(imageSrc, title, description) {
    var modal = document.getElementById('modal');
    var modalContent = document.querySelector('.modal-content');

    document.getElementById('modal-image').src = imageSrc;
    document.getElementById('modal-title').innerText = title;
    document.getElementById('modal-description').innerText = description;

    modal.classList.add('show');
    modalContent.classList.add('show');
}

function closeModal() {
    var modal = document.getElementById('modal');
    var modalContent = document.querySelector('.modal-content');

    modal.classList.remove('show');
    modalContent.classList.remove('show');
}