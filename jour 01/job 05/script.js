function afficherjourssemaines (){
    var jourssemaines = ["Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi", "Dimanche"];
    for (var i = 0 ; i<jourssemaines.length; i++)
    {
        console.log('Nous sommes ' +jourssemaines[i]+ ' aujourd hui')
    }
}

afficherjourssemaines();