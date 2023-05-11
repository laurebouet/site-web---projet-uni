let Cases = document.getElementsByClassName('case');

let date = new Date('01/01/2023');
let month = date.getMonth();
let options = {weekday : 'long'};
let day = date.toLocaleDateString('fr-FR',options);
let daynb = date.getDate();

const monthName = ["Janvier", "Février", "Mars", "Avril", "Mai", "Juin", "Juillet", "Aout", "Septembre", "Octobre", "Novembre", "Décembre"];

let cldT = document.getElementById("cldT");
cldT.innerHTML = monthName[month];

function CALENDRIER_UP() {
        if(month < 11) month++;
        else month = 0;
        console.log(month);
        cldT.innerHTML = monthName[month];
   

    }

function CALENDRIER_DOWN() {
    if (month > 0) month--;
    else month = 11;
    console.log(month);
    cldT.innerHTML = monthName[month];
 
}

console.log(date);

function jourdumois() {
    if(month == 3 || month == 5 || month == 8 || month == 10){
        for(i=0;i<30;i++){
            Cases[i].innerHTML = i+1;
            Cases[30].innerHTML = "";
        }
    }
    else if (month!=1){
        for(i=0;i<31;i++){
            Cases[i].innerHTML = i+1;
        }
    }
    else {
        for(i=0;i<28;i++){
            Cases[i].innerHTML = i+1;
            Cases[28].innerHTML = "";
            Cases[29].innerHTML = "";
             Cases[30].innerHTML = "";
   
        }
    }
}

function janvier(){
    for(i=0;i<31;i++){
        Cases[i].innerHTML = i+1;
    }
}

window.onload = janvier();

function test(element){
    var jourReserv = element.innerHTML;
    var moisReserv = monthName[month];
    console.log(jourReserv);
    console.log(moisReserv);
}
