// modal

const button = document.getElementById("popup");
const modal = document.getElementById("Signup");
const close = document.getElementById("close");

button.addEventListener("click", () => {
    if (modal.style.visibility == "hidden") {
        modal.style.visibility = "visible";
    }else{
        modal.style.visibility = "hidden";
    }
})
close.addEventListener("click",()=>{
    if(modal.style.visibility == "visible"){
        modal.style.visibility = "hidden";
    }
})



// for password hidden or show logic
const eyeOpen = document.getElementById('eyeOpen')
const eyeClose = document.getElementById('eyeClose')
const password = document.getElementById('password');

eyeOpen.addEventListener('click', ()=>{
    eyeOpen.style.display='none';
    eyeClose.style.display='block'
    password.type = 'password'
})
eyeClose.addEventListener('click',()=>{
    eyeOpen.style.display='block';
    eyeClose.style.display='none'
    password.type = 'text'
})