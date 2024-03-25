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
    <title>O mnie - Piotr Żamojta | INERIS</title>
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
    <div class="container px-5 my-5">
        <div class="text-center mb-5">
            <h1 class="display-5 fw-bolder mb-0"><span class="text-gradient d-inline">O mnie</span></h1>
        </div>
        <div class="row gx-5 justify-content-center">
            <div class="col-lg-11 col-xl-9 col-xxl-8">
                <section>
                    <div class="d-flex align-items-center justify-content-between mb-4">
                    </div>
                    <section>
                        <h2 class="text-secondary fw-bolder mb-4">Edukacja</h2>
                        <div class="card shadow border-0 rounded-4 mb-5">
                            <div class="card-body p-5">
                                <div class="row align-items-center gx-5">
                                    <div class="col text-center text-lg-start mb-4 mb-lg-0">
                                        <div class="bg-light p-4 rounded-4">
                                            <div class="text-secondary fw-bolder mb-2">2022 - teraz</div>
                                            <div class="mb-2">
                                                <div class="small fw-bolder">Teb Edukacja</div>
                                                <div class="small text-muted">Gorzów Wielkopolski, Polska</div>
                                            </div>
                                            <div class="fst-italic">
                                                <div class="small text-muted"></div>
                                                <div class="small text-muted">Technik Programista</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-8"><div>W latach 2022 do teraz, uczęszczam do Teb Edukacja w Gorzowie Wielkopolskim, gdzie kształcę się na technika programistę. To okres, który jest dla mnie niezwykle wartościowy, ponieważ umożliwia mi zdobycie głębokiej wiedzy oraz praktycznych umiejętności w obszarze programowania.</div></div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <div class="pb-5"></div>
                    <section>
                        <div class="card shadow border-0 rounded-4 mb-5">
                            <div class="card-body p-5">
                                <div class="mb-5">
                                    <div class="d-flex align-items-center mb-4">
                                        <div class="feature bg-primary bg-gradient-primary-to-secondary text-white rounded-3 me-3"><i class="bi bi-tools"></i></div>
                                        <h3 class="fw-bolder mb-0"><span class="text-gradient d-inline">Umiejętności</span></h3>
                                    </div>
                                    <div class="row row-cols-1 row-cols-md-3 mb-4">
                                        <div class="col mb-4 mb-md-0"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">SEO/SEM Marketing</div></div>
                                        <div class="col mb-4 mb-md-0"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100"> Analiza statystyczna</div></div>
                                        <div class="col"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">Tworzenie stron internetowych</div></div>
                                    </div>
                                    <div class="row row-cols-1 row-cols-md-3">
                                        <div class="col"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">UI Design</div></div>
                                    </div>
                                </div>
                                <div class="mb-0">
                                    <div class="d-flex align-items-center mb-4">
                                        <div class="feature bg-primary bg-gradient-primary-to-secondary text-white rounded-3 me-3"><i class="bi bi-code-slash"></i></div>
                                        <h3 class="fw-bolder mb-0"><span class="text-gradient d-inline">Języki programowania</span></h3>
                                    </div>
                                    <div class="row row-cols-1 row-cols-md-3 mb-4">
                                        <div class="col mb-4 mb-md-0"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">HTML</div></div>
                                        <div class="col mb-4 mb-md-0"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">CSS</div></div>
                                        <div class="col"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">JavaScript</div></div>
                                    </div>
                                    <div class="row row-cols-1 row-cols-md-3">
                                        <div class="col mb-4 mb-md-0"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">Python</div></div>
                                        <div class="col"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">Node.js</div></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
            </div>
        </div>
    </div>
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