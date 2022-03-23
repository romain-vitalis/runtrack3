<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>Jour 07</title>
</head>
<body style="background-color: lightgray">
<!-- NAV BAR -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">LPTF</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link active" aria-current="page" href="#">Accueil</a>
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
                <a href="#" class="btn btn-primary">Commander votre papillon</a>
            </div>
        </div>
        <!-- GROSSE DIV -->
            <div class="card m-1 bg-light text-dark">
                <div class="card-body">
                    <p class="fs-1">Bonjour Monde !<p>
                    <p class="card-text">Il existe plusieurs versions du theme :</p>
                    <p class="card-text">le monde est la matière,  l'espace et les phéromones qui nous sont accessibles
                    par les sens, l'expérience ou la raison.</p>
                    <p class="card-text">le sens le plus courant désigne notre planète, la Terre, avec ses habitants,
                     et son environnement plus ou moins naturel.</p>
                    <hr>
                    <p class="fs-6">le Sens étendu désigne l'univers dans son ensemble.</p>
                    <!-- Bouton rouge -->
                    <button type="button" class="btn btn-danger">Rebooter le monde</button>
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
        <!-- Liste group -->
        <div class="list-group m-1">
            <button type="button" class="list-group-item list-group-item-action active" aria-current="true">Limbes</button>
            <button type="button" class="list-group-item list-group-item-action">Luxure</button>
            <button type="button" class="list-group-item list-group-item-action">Gourmandise</button>
            <button type="button" class="list-group-item list-group-item-action">Avarice</button>
            <button type="button" class="list-group-item list-group-item-action">Colère</button>
            <button type="button" class="list-group-item list-group-item-action">Heresie</button>
            <button type="button" class="list-group-item list-group-item-action">Violence</button>
            <button type="button" class="list-group-item list-group-item-action">Ruse et tromperie</button>
            <button type="button" class="list-group-item list-group-item-action">Trahison</button>
            <button type="button" class="list-group-item list-group-item-action">Internet Explorer</button>
        </div>
    </div>
    <div class="m-5 p-5">
        <!-- Progress bar -->
        <p class="text-center fw-bolder">Installation de AI 9000</p>
        <div class="progress">
            <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="50" style="width: 90%"></div>
        </div>
    </div>
    <div class="d-flex justify-content-around mb-5">
        <!-- Form 1-->
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
        <!-- Form 2-->
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
</html>