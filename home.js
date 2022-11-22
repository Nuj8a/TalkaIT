
let count = 1;
const exercise = document.getElementById("exercise");
const timer = document.getElementById("timer");
const OnOff = document.getElementById("OnOff");


OnOff.addEventListener("click",()=>{
    if(OnOff.innerHTML=="Start"){
        OnOff.innerHTML = "Stop";
        breatheIn();
    }
    else if(OnOff.innerHTML == "Stop"){
        // clearTimeout(breatheIn);
        return;
       
    }

});

    




function breatheOut() {
    if (count > 0) {
        --count;
        timer.innerHTML = count;
        switch (count) {
            case 6:
                timer.style.height = "150px";
                timer.style.width = "150px";
                exercise.innerHTML = "HOLD"
                timer.innerHTML = "·";
                exercise.style.width = "95px";
                exercise.style.height = "25px";
                break;
            case 5:
                timer.style.height = "150px";
                timer.style.width = "150px";
                timer.style.borderRadius = "125px";
                timer.innerHTML = count;
                exercise.innerHTML = "Breathe Out";
                exercise.style.width = "100px";
                exercise.style.height = "25px";
                break;

            case 4:
                timer.style.height = "125px";
                timer.style.width = "125px";
                timer.style.borderRadius = "100px";
                timer.innerHTML = count;
                exercise.innerHTML = "Breathe Out";
                exercise.style.width = "100px";
                exercise.style.height = "25px";
                break;

            case 3:
                timer.style.height = "100px";
                timer.style.width = "100px";
                timer.style.borderRadius = "75px";
                timer.innerHTML = count;
                exercise.innerHTML = "Breathe Out";
                exercise.style.width = "100px";
                exercise.style.height = "25px";
                break;

            case 2:
                timer.style.height = "75px";
                timer.style.width = "75px";
                timer.style.borderRadius = "50px";
                timer.innerHTML = count;
                exercise.innerHTML = "Breathe Out";
                exercise.style.width = "100px";
                exercise.style.height = "25px";
                break;

            case 1:
                timer.style.height = "50px";
                timer.style.width = "50px";
                timer.style.borderRadius = "37px";
                timer.innerHTML = count;
                exercise.innerHTML = "Breathe Out";
                exercise.style.width = "100px";
                exercise.style.height = "25px";
                break;

            case 0:
                timer.style.height = "50px";
                timer.style.width = "50px";
                timer.style.borderRadius = "37px";
                timer.innerHTML = "·";
                exercise.innerHTML = "Hold";
                exercise.style.width = "100px";
                exercise.style.height = "25px";
                break;


        }
        console.log(count)
        setTimeout(breatheOut, 1000);
    } else {
        breatheIn();
    }

}

function breatheIn() {
    if (count < 7) {
        exercise.style.width = "85px";
        exercise.style.height = "25px";
        console.log(count)
        switch (count) {
            case 1:
                timer.style.height = "50px";
                timer.style.width = "50px";
                timer.style.borderRadius = "25px";
                timer.innerHTML = count;
                exercise.innerHTML = "Breathe In";
                break;

            case 2:
                timer.style.height = "75px";
                timer.style.width = "75px";
                timer.style.borderRadius = "50px";
                timer.innerHTML = count;
                exercise.innerHTML = "Breathe In";
                break;

            case 3:
                timer.style.height = "100px";
                timer.style.width = "100px";
                timer.style.borderRadius = "75px";
                timer.innerHTML = count;
                exercise.innerHTML = "Breathe In";
                break;

            case 4:
                timer.style.height = "125px";
                timer.style.width = "125px";
                timer.style.borderRadius = "100px";
                timer.innerHTML = count;
                exercise.innerHTML = "Breathe In";
                break;

            case 5:
                timer.style.height = "150px";
                timer.style.width = "150px";
                timer.style.borderRadius = "125px";
                timer.innerHTML = count;
                exercise.innerHTML = "Breathe In";
                break;

            case 6:
                timer.style.height = "150px";
                timer.style.width = "150px";
                exercise.innerHTML = "HOLD"
                timer.innerHTML = "·";
                break;

        }
        count++;
        setTimeout(breatheIn, 1000);
    } else {
        breatheOut();
    }
}






