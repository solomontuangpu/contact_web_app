let createContactBtn = document.querySelector("#createContactBtn");
let formContent = document.querySelector(".form-content");
let closeFormBtn = document.querySelector(".close-form");

createContactBtn.addEventListener("click", ()=> {
    formContent.classList.remove('display-none');
    formContent.classList.add('display-block');
})

closeFormBtn.addEventListener("click", ()=> {
    formContent.classList.remove('display-block');
    formContent.classList.add('display-none');
})

function go(url) {
    setTimeout(function () {
        location.href = `${url}`;
    },500);
}