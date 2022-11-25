const on = document.getElementById("On");
const off = document.getElementById("Off");

//Initialize first number
let TimerNumber = 0;

// when btn on click
const start = () => {
    startTimeInterval = setInterval(breatheIn, 1000);
    on.style.visibility = "hidden";
    off.style.visibility = "visible";
}
//when btn off click
const stop = () => {
    clearInterval(startTimeInterval);
    on.style.visibility = "visible";
    off.style.visibility = "hidden";
}

// settimeInterval function
let count = 1;

function breatheOut() {
    if (count > 0) {
        --count;
        timer.innerHTML = count;
        // setTimeout(breatheOut, 1000);
    } else {
        breatheIn();
    }

}

function breatheIn() {
    if (count < 7) {
        count++;
        // setTimeout(breatheIn, 1000);
    } else {
        breatheOut();
    }
}



on.addEventListener('click', start)
off.addEventListener('click', stop)

