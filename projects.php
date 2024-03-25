<?php
//rozpoczecie sesji
session_start();
//sprawdzanie czy zalogowany
if (!isset($_SESSION['czyZalogowany'])){
    header('Location: index.php');
    $_SESSION['blad'] = '<span style="color:red">Musisz być zalogowany aby uzyskać dostęp do tej strony!</span>';

    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Projekty - Piotr Żamojta | INERIS</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet" />
        <link href="css/bs.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body class="d-flex flex-column h-100 bg-light">
        <main class="flex-shrink-0">
            <nav class="navbar navbar-expand-lg navbar-light bg-white py-3">
                <div class="container px-5">
                    <a class="navbar-brand" href="index.html"><span class="fw-bolder text-primary">Piotr Żamojta | INERIS</span></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0 small fw-bolder">
                            <li class="nav-item"><a class="nav-link" href="panel.php">Home</a></li>
                            <li class="nav-item"><a class="nav-link" href="resume.php">O mnie</a></li>
                            <li class="nav-item"><a class="nav-link" href="projects.php">Projekty</a></li>
                            <li class="nav-item"><a class="nav-link" href="logout.php">Wyloguj się</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
            <section class="py-5">
                <div class="container px-5 mb-5">
                    <div class="text-center mb-5">
                        <h1 class="display-5 fw-bolder mb-0"><span class="text-gradient d-inline">Projekty</span></h1>
                    </div>
                    <div class="row gx-5 justify-content-center">
                        <div class="col-lg-11 col-xl-9 col-xxl-8">
                            <div class="card overflow-hidden shadow rounded-4 border-0 mb-5">
                                <div class="card-body p-0">
                                    <div class="d-flex align-items-center">
                                        <div class="p-5">
                                            <h2 class="fw-bolder">Admas</h2>
                                            <p>Strona admas.pl to wyjątkowy projekt, który w pełni oddaje charakter i umiejętności Piotra Żamojty jako twórcy, programisty i specjalisty od marketingu. </p>
                                        </div>
                                        <img class="img-fluid" src="https://i.imgur.com/vjyftw8.png" alt="admas zdjecie stronty" />
                                    </div>
                                </div>
                            </div>
                            <div class="card overflow-hidden shadow rounded-4 border-0">
                                <div class="card-body p-0">
                                    <div class="d-flex align-items-center">
                                        <div class="p-5">
                                            <h2 class="fw-bolder">ExchangeHUB</h2>
                                            <p>Strona exchangehub.pl stanowi znakomite wcielenie moich umiejętności oraz wiedzy jako utalentowanego twórcy, programisty i specjalisty od marketingu.</p>
                                        </div>
                                        <img class="img-fluid" src="https://i.imgur.com/2CFequN.png" alt="Strona exchangehub zdjecie" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="py-5 bg-gradient-primary-to-secondary text-white">
                <div class="container px-5 my-5">
                    <div class="text-center">
                        <h2 class="display-4 fw-bolder mb-4">Zróbmy wspólny projekt!</h2>
                        <a class="btn btn-outline-light btn-lg px-5 py-3 fs-6 fw-bolder" href="https://help.ineris.pl/hc/pl/requests/new">Kontakt</a>
                    </div>
                </div>
            </section>
        </main>
        <footer class="bg-white py-4 mt-auto">
            <div class="container px-5">
                <div class="row align-items-center justify-content-between flex-column flex-sm-row">
                    <div class="col-auto"><div class="small m-0">Copyright &copy; Piotr Żamojta from INERIS 2023</div></div>
                    <div class="col-auto">
                        <a class="small" href="https://www.ineris.pl/index.php/polityka-prywatnosci/">Polityka Prywatności</a>
                        <span class="mx-1">&middot;</span>
                        <a class="small" href="https://www.ineris.pl/index.php/regulaminy/">Regulamin</a>
                        <span class="mx-1">&middot;</span>
                        <a class="small" href="https://pomoc.ineris.pl/hc/pl/requests/new">Kontakt</a>
                    </div>
                </div>
            </div>
        </footer>
        <script src="js/main.js"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
