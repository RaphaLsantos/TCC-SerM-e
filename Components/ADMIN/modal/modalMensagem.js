const openModal = document.querySelector(".bx-pencil");
const closeModal = document.querySelector("#fecharModalMensagem");
const modal = document.querySelector("#modalMensagem");
const fade = document.querySelector("#fadeMensagem");

const toggleModal = () => {
    [modal , fade].forEach((el) => el.classList.toggle("hide"));
};

[openModal , closeModal , fade].forEach((el) => {
    el.addEventListener("click", () => toggleModal());
});


const openModalButton = document.querySelector(".bx-trash");
const closeModalButton = document.querySelector("#fechar-modal");
const modalExcluirMensagem = document.querySelector("#modal");
const fadeExcluirMensagem = document.querySelector("#fade");

const toggleModalExcluir = () => {
    [modalExcluirMensagem , fadeExcluirMensagem].forEach((el) => el.classList.toggle("hide"));
};

[openModalButton , closeModalButton , fadeExcluirMensagem].forEach((el) => {
    el.addEventListener("click", () => toggleModalExcluir());
});