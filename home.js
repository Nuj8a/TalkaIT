
let count = 1;

function breatheOut() {
    if (count > 1) {
        count--;
        document.getElementById("exercise").innerHTML = "Breathe Out";
        document.getElementById("timer").innerHTML = count;
        setTimeout(breatheOut, 1000)
    } else {
        breatheIn();
    }

}

function breatheIn() {
    if (count < 6) {
        document.getElementById("timer").innerHTML = count;
        document.getElementById("exercise").innerHTML = "Breathe In";
        count++;
        setTimeout(breatheIn, 1000);
    } else {
        breatheOut();
    }
}

breatheIn();


