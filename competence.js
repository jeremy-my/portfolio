let competenceProgression = document.querySelector(".competence-Progression"),
ProgressionValue = document.querySelector(".progression-value");

let ProgressionStartValue = 0,    
ProgressionEndValue = 70,    
speed = 1000;

let Progression = setInterval(() => {
ProgressionStartValue++;

ProgressionValue.textContent = `${ProgressionStartValue}%`
competenceProgression.style.background = `conic-gradient(#29F6DD ${ProgressionStartValue * 3.6}deg, #ededed 0deg)`

if(ProgressionStartValue == ProgressionEndValue){
    clearInterval(Progression);
}    
}, speed);