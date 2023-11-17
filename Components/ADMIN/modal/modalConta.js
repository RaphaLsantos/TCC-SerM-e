const openModalButton = document.getElementById("abrirModalConta");
const closeModalButton = document.querySelector("#fechar-modal");
const modal = document.querySelector("#modalConta");
const fade = document.querySelector("#fade");

const toggleModal = () => {
    [modal , fade].forEach((el) => el.classList.toggle("hide"));
};

[openModalButton , closeModalButton , fade].forEach((el) => {
    el.addEventListener("click", () => toggleModal());
});