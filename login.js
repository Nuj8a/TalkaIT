const LoginsignUp = document.getElementsByClassName("LoginsignUp");
const Signup = document.getElementById("Signup");

LoginsignUp.addEventListener("onclick", () => {
    if (Signup.style.visibility == "hidden") {
        Signup.style.visibility = "visible";
    }
    else {
        Signup.style.visibility = "hidden";
    }
})