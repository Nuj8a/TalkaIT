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



// show password

const show = document.getElementById("show");
const password = document.getElementById("password");

show.addEventListener("click",() => {
    if(password.type == "password"){
        password.type = "text";
    }else{
        password.type = "password";
    }
})

