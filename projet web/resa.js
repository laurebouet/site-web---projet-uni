// function pause(ms){
//     return nex Promise(resolve => setTimeout(resolve.ms));
// }

// async function afficherdate() {
//     while(true){
//         x
//     }
// }



var indice = 0;

var now = new Date();
    
function today(){
    var now = new Date();
    var month= new Date().getMonth();
    var number= new Date().getDate();
    var day= new Date().getDay("fr-FR");
    
    var mois = ['Janvier','Février','Mars','Avril','Mai','Juin','Juillet','Aout','Septembre','Octobre','Novembre','Décembre']
    var jour=['Lun','Mar','Mer','Jeu','Ven','Sam','Dim']
    var jour2=['Lundi','Mardi','Mecredi','Jeudi','Vendredi','Samedi','Dimanche']
    for(i=0;i<jour.length;i++){
        if (i == day) {
            day = jour[i];   
        }
    }    
    for(j=0;j<mois.length;j++){
        if (j == month){
            month = mois[j];
        }
    }
    return day+ " " +number+ " "+month;
}

console.log("today " +today());

console.log("ici" + today().split(" "));

function prochain_mois() {
	
    if(now.getMonth()==11){
        current = new Date(now.getFullYear()+indice,0.1);
    }
    else{
        current = new Date(now.getFullYear(),now.getMonth()+indice,1);

    }
    return current;
}
console.log(prochain_mois());

// 	function suivante() {
// 		indice= indice+1;
// 		if (indice == sources.length)
// 			indice = 0;
// 		document.getElementById("show").src="./images/" + sources[indice]
		
// 	}

// 	// affiche l'image précédente
// 	function precedente() {
// 		indice = indice -1;
// 		if(indice==-1)
// 			indice=sources.length-1;
// 		document.getElementById("show").src="./images/" + sources[indice]
// 	}

// 	// ici, il faut relier le JS à l'évènement "onclick" sur
// 	// les deux "flèches" (les images)
// 	document.getElementsByClassName("fleche")[1].onclick=next;
// 	document.getElementsByClassName("fleche")[0].onclick=previous;
	
// };
