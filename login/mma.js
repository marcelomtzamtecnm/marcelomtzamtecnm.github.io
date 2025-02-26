const singInBtnLink = document.querySelector(".singInBtn-Link");
const singUpBtn = document.querySelector(".singUpBtn-Link");
const wrapper = document.querySelector(".wrapper");

singUpBtnLink.addEventListener("click",()=>{
    wrapper.classList.toggle("active");
});

singInBtnLink.addEventListener("click",()=>{
    wrapper.classList.toggle("active");
});