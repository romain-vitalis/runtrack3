<!doctype html>
<html lang="en">
<head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>Jour 07</title>
</head>
<body style="background-color: lightgray">

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">LPTF</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link active" aria-current="page" href="https://laplateforme.io/">Accueil</a>
                    <a class="nav-link" href="#">Units</a>
                    <a class="nav-link" href="#">Jobs</a>
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Skills</a>
                </div>
            </div>
        </div>
    </nav>
    <h1 class="m-1 text-center">LaPlateforme_</h1>
    <div class="d-flex m-2 justify-content-around">
        <!-- Card Papillon -->
        <div class="card m-1" style="width: 18rem;">
            <img src="tout-savoir-sur-le-papillon.jpeg" class="card-img-top" alt="papillon">
            <div class="card-body">
                <h5 class="card-title">Un papillon</h5>
                <p class="card-text">Un papillon c'est un peu comme une chenille, mais avec des ailes. Ne pas ingérer.</p>
                <!-- MODAL -->
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Commander votre papillon
                </button>
              
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Confirmez votre achat ?</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                Etes-vous sur de vouloir acheter un papillon ?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                                <button type="button" class="btn btn-primary">Oui</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       
            <div class="card m-1 bg-light text-dark">
                <div class="card-body">
                    <p class="fs-1">Bonjour Monde !<p>
                  
                    <div class="quote">
                        <span id="quote" class="text"></span>
                        <br>
                        <br>
                    </div>
                    <div id="paragraphe">
                        <p class="card-text">Il existe plusieurs versions du theme :</p>
                        <p class="card-text">le monde est la matière,  l'espace et les phéromones qui nous sont accessibles
                        par les sens, l'expérience ou la raison.</p>
                        <p class="card-text">le sens le plus courant désigne notre planète, la Terre, avec ses habitants,
                         et son environnement plus ou moins naturel.</p>
                    </div>
                    <hr>
                    <p class="fs-6">le Sens étendu désigne l'univers dans son ensemble.</p>
                    <!-- Bouton rouge -->
                    <button id="new-quote-button" class="btn btn-danger" type="button">Rebooter le monde</button>
                    <!-- Spinner -->
                    <div class="spinner-border text-info" role="status">
                        <span class="visually-hidden">Loading...</span>
                    </div>
                    <!-- Pagination -->
                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-end">
                            <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">Next</a></li>
                        </ul>
                    </nav>
                </div>
            </div>

        <div class="list-group m-1" id="list-tab" role="tablist">
            <button type="button" class="list-group-item list-group-item-action active" aria-current="true" data-bs-toggle="list">Limbes</button>
            <button type="button" class="list-group-item list-group-item-action" data-bs-toggle="list" >Luxure</button>
            <button type="button" class="list-group-item list-group-item-action" data-bs-toggle="list" >Gourmandise</button>
            <button type="button" class="list-group-item list-group-item-action" data-bs-toggle="list" >Avarice</button>
            <button type="button" class="list-group-item list-group-item-action" data-bs-toggle="list">Colère</button>
            <button type="button" class="list-group-item list-group-item-action" data-bs-toggle="list">Heresie</button>
            <button type="button" class="list-group-item list-group-item-action" data-bs-toggle="list">Violence</button>
            <button type="button" class="list-group-item list-group-item-action" data-bs-toggle="list">Ruse et tromperie</button>
            <button type="button" class="list-group-item list-group-item-action" data-bs-toggle="list">Trahison</button>
            <button type="button" class="list-group-item list-group-item-action" data-bs-toggle="list">Internet Explorer</button>
        </div>
    </div>
    <div class="m-5 p-5">
       
        <p class="text-center fw-bolder">Installation de AI 9000</p>
        <div style="padding: 1em;">
            <div class="progress">
                <div id="progressbar" class="progress-bar progress-bar-striped progress-bar-animated active bg-warning" style="width: 5%"></div>
            </div>
            <button id="moins">-</button>
            <button id="plus">+</button>
        </div>
    </div>
    <div class="d-flex justify-content-around mb-5">
       
        <div>
            <label for="basic-url" class="form-label">Recevez votre copie gratuite d'internet 2 ! </label>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">@</span>
                <input type="text" class="form-control" placeholder="Login" aria-label="Username" aria-describedby="basic-addon1">
            </div>
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Mot de passe" aria-label="Recipient's username" aria-describedby="basic-addon2">
                <span class="input-group-text" id="basic-addon2">@example.com</span>
            </div>
            <label for="basic-url" class="form-label">Url des Internet 2 et 2.1 Beta</label>
            <div class="input-group mb-3">
                <span class="input-group-text">DogeCoin</span>
                <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                <span class="input-group-text">.00</span>
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon3">https://example.com/users/</span>
                <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
            </div>
        </div>
     
        <form>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
<script type="text/javascript" src="script.js"></script>
</body>
</html>
