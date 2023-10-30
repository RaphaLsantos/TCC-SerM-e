const openModalButton = document.querySelector(".bx-trash");
const closeModalButton = document.querySelector("#fechar-modal");
const modal = document.querySelector("#modal");
const fade = document.querySelector("#fade");

const toggleModal = () => {
    [modal , fade].forEach((el) => el.classList.toggle("hide"));
};

[openModalButton , closeModalButton , fade].forEach((el) => {
    el.addEventListener("click", () => toggleModal());
});