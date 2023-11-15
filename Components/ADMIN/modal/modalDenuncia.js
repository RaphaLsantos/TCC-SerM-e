const openModal = document.querySelector(".bxs-check-circle");
const closeModal = document.querySelector("#fecharModalDenuncia");
const modal = document.querySelector("#modalDenuncia");
const fade = document.querySelector("#fadeDenuncia");

const toggleModal = () => {
    [modal , fade].forEach((el) => el.classList.toggle("hide"));
};

[openModal , closeModal , fade].forEach((el) => {
    el.addEventListener("click", () => toggleModal());
});


// Modal Filho
const openChildModalBtn = document.getElementById('openChildModal');
const closeChildModalBtn = document.getElementById("closeModalBtn");
const modalChild = document.querySelector("#modalAninhadoDenuncia");
const fadeChild = document.querySelector("#fadeChild");


const toggleModalChild = () => {
    [modalChild , fadeChild].forEach((el) => el.classList.toggle("hide"));
};

[openChildModalBtn , closeChildModalBtn , fadeChild].forEach((el) => {
    el.addEventListener("click", () => toggleModalChild());
});


const openModalButton1 = document.querySelector(".bx-trash");
const closeModalButton1 = document.querySelector("#fechar-modal");
const modal1 = document.querySelector("#modal");
const fade1 = document.querySelector("#fade");
 
const toggleModal1 = () => {
    [modal1 , fade1].forEach((el) => el.classList.toggle("hide"));
};

[openModalButton1 , closeModalButton1 , fade1].forEach((el) => {
    el.addEventListener("click", () => toggleModal1());
});