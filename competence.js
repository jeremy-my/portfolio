let competenceProgression = document.querySelector(".competence-Progression"),
ProgressionValue = document.querySelector(".Progression-value");

let ProgressionStartValue = 0,    
ProgressionEndValue = 90,    
speed = 100;

let Progression = setInterval(() => {
ProgressionStartValue++;

ProgressionValue.textContent = `${ProgressionStartValue}%`
competenceProgression.style.background = `conic-gradient(#7d2ae8 ${ProgressionStartValue * 3.6}deg, #ededed 0deg)`

if(ProgressionStartValue == ProgressionEndValue){
    clearInterval(Progression);
}    
}, speed);