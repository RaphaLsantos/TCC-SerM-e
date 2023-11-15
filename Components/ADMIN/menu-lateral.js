let sidebar = document.querySelector(".sidebar");
let sidebarBtn = document.querySelector(".bxl-c-plus-plus");
console.log(sidebarBtn);
sidebarBtn.addEventListener("click", () =>{
    sidebar.classList.toggle("open");
});