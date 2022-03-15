
function jourTravaille (date) {
   let jourFeries = [
       '2021-01-01',
       '2021-04-13',
       '2021-05-01',
       '2021-05-08',
       '2021-05-21',
       '2021-06-01',
       '2021-07-14',
       '2021-09-15',
       '2021-11-01',
       '2021-11-11',
       '2021-12-25'];
   let dateType = new Date(date);
   console.log("DATE = " + date);

   //définition du jour
   let jour = new Intl.DateTimeFormat('fr',{ weekday: 'long'}).format(dateType);
   console.log("JOUR DE LA SEMAINE = " + jour);

   //définition du n° du jour dans le mois
   let numeroday = new Intl.DateTimeFormat('fr',{ day: 'numeric'}).format(dateType);
   console.log("Numero du jour dans le mois = " + numeroday);

   //definition du mois
   let mois = new Intl.DateTimeFormat('fr',{ month: 'long'}).format(dateType);
   console.log("Le mois = " + mois);

   //définition année
   let annee = new Intl.DateTimeFormat('fr',{ year: 'numeric'}).format(dateType);
   console.log("annee = " + annee);



   if (jourFeries.includes(date)) {
       console.log("Le " + jour + " " + numeroday + " " + mois + " " + annee + " est un jour férié")
   }
   else if(jour === "samedi" || jour === "dimanche") {
       console.log("Non, le " + jour + " " + numeroday + " " + mois + " " + annee + " est un weekend")
   }
   else if(!jourFeries.includes(date)) {
       console.log("Oui, le " + jour + " " + numeroday + " " + mois + " " + annee + " est un jour travaillé")
   }
}
console.log(jourTravaille('2021-01-12'));