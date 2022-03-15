
var button = document.getElementById("button");
var article = document.getElementById('citation');

// apparition,disparition
function showhide () {

    document.getElementById("citation").innerHTML = "L'important n'est pas la chute, mais l'atterrissage.";

    if (getComputedStyle(article).display != "none") {
        article.style.display ="none";
    } else  {
        article.style.display = "block";
    }
}

button.addEventListener('click', showhide);