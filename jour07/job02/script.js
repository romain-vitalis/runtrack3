
var totalQuestions = 8;
var currentQuestion = 0;
var $progressbar = $("#progressbar");

$("#moins").on("click", function(){
    if (currentQuestion >= totalQuestions){ return; }
    currentQuestion--;
    $progressbar.css("width", Math.round(100 * currentQuestion / totalQuestions) + "%");
});
$("#plus").on("click", function(){
    if (currentQuestion >= totalQuestions){ return; }
    currentQuestion++;
    $progressbar.css("width", Math.round(100 * currentQuestion / totalQuestions) + "%");
});



$(document).ready(function()
    {
        $("#quote").hide();

        $("#new-quote-button").on("click",function() {
            $("#paragraphe").hide();
            $("#quote").show();

            function Quote(text) {
                this.text = text
            }

            var currentIndex = 0;

            var quote2 = new Quote('"Tous ces moments se perdront dans l’oubli, comme des larmes dans la pluie."');
            var quote3 = new Quote('"T’endors pas c’est l’heure de mourir."');

            var quote5 = new Quote('"Wake up, time to die."');
            var quote6 = new Quote('“- C’est dur de pas pouvoir se gratter là où ça démange.\n' +
                '- Ça c’est vrai.”');
            var quote7 = new Quote('"Un flic quand il quitte le métier il n’est plus personne."');
            var quote8 = new Quote('"I’d rather be a killer than a victim."');
            var quote9 = new Quote('"Avez-vous déjà désactivé un humain par erreur ?"');
            var quote10 = new Quote('"C’est dommage qu’elle doive mourir, mais on en est tous là !"');
            var quote11 = new Quote('"Étrange sensation que de vivre dans la peur… voila ce que c’est d’être un esclave."');
            var quoteCollection = [quote2, quote3, quote5, quote6, quote7, quote8, quote9, quote10, quote11];

            function generateRandomQuote() {
                var randomQuoteIndex = getRandomIntInclusive(0, quoteCollection.length);

              
                while (randomQuoteIndex === currentIndex) {
                    randomQuoteIndex = getRandomIntInclusive(0, quoteCollection.length)
                }

               
                currentIndex = randomQuoteIndex;

               
                var randomQuote = quoteCollection[randomQuoteIndex];

           
                return randomQuote
            }


            function showRandomQuote(randomQuote) {
                document.getElementById('quote').innerHTML = randomQuote.text
            }


            function getRandomIntInclusive(min, max) {
                return Math.floor(Math.random() * (max - min + 1)) + min
            }

            function getRandomQuote() {
                var randomQuote = generateRandomQuote();
                showRandomQuote(randomQuote)
            }



            document.addEventListener('DOMContentLoaded', getRandomQuote);
            document.getElementById('new-quote-button').addEventListener('click', getRandomQuote)
        })
    }
)
