<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion du Cabinet de Placement</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" href="/chemin/vers/votre-logo.ico" type="image/x-icon">
    <link rel="shortcut icon" href="./favicon.ico" type="image/x-icon">

    <style>
        * {
            font-family: Poppins, sans-serif;
            list-style: none;
            text-decoration: none;
        }

        .hero {
            background: url('hero-background.jpg') no-repeat center center;
            background-size: cover;
            color: white;
            text-align: center;
            padding: 60px 0;
        }

        .features .icon {
            font-size: 48px;
            margin-bottom: 20px;
            color: #007bff;
        }

        .navbar {
            background: rgb(7, 41, 77);
            color: rgb(7, 41, 77);
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            gap: 225px;
        }

        .logo {

            font-size: 25px;
            font-weight: bold;
        }

        .logo:hover {
            text-decoration: none;
            color: #f8f9fa;
        }

        ul {
            display: flex;
            margin: 0px 15px;
            border: 2px solid rgb(254, 202, 0);
            border-radius: 5px;
            background-color: rgb(254, 202, 0);
        }

        li a {
            color: rgb(7, 41, 77);
        }

        #abc {
            border: 15px solid rgb(7, 41, 77);
            background: rgb(7, 41, 77);
            color: white;
            border-radius: 50px;
        }

        #abcd {
            border: 15px solid rgb(254, 202, 0);
            background: rgb(254, 202, 0);
            color: rgb(7, 41, 77);
            border-radius: 50px;
            font-weight: 200;
        }

        #abce {
            border: 15px solid rgb(7, 41, 77);
            background: rgb(7, 41, 77);
            color: white;
            border-radius: 50px;
        }

        .log {
            width: 200px;
            height: auto;
            filter: brightness(0) invert(1);
            transition: transform 0.3s ease;
        }

        .log:hover {
            transform: scale(1.1);
        }

        #esp {
            background: rgb(7, 41, 77);
            border: rgb(7, 41, 77);
        }

        #espb {
            background: rgb(254, 202, 0);
            border: rgb(254, 202, 0);
            color: rgb(7, 41, 77);
        }

        #espb:hover {
            color: #0166d1;
        }

        .container h1 {
            color: rgb(7, 41, 77);
        }

        .lead {
            color: rgb(7, 41, 77);
            font-weight: 500;
        }

        #esp:hover {
            color: #0166d1;
        }

        footer {
            background-color: #f8f9fa;
            padding: 20px 0;
            text-align: center;
        }

        .options {
            display: none;
            /* Masquer les options par défaut */
        }

        .modal {
            display: none;
            /* Masquer la popup par défaut */
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.5);
            /* Fond semi-transparent */
        }

        .modal-content {
            background-color: rgb(7, 41, 77);
            margin: 15% auto;
            /* Centrer la popup verticalement */
            padding: 20px;
            border: 1px solid rgb(254, 202, 0);
            width: 80%;
            max-width: 600px;
            text-align: center;
            border-radius: 10px;
        }

        .modal-content button {
            margin: 10px;
            padding: 10px 20px;
            font-size: 16px;
            border-radius: 20px;
            background-color: rgb(254, 202, 0);
            color: rgb(7, 41, 77);
        }

        @keyframes fade-in {
            0% {
                opacity: 0;
            }

            100% {
                opacity: 1;
            }
        }
        @media (max-width: 1311px){
            ul{
                display: none;
            }
        }
    </style>
</head>

<body>
    <!-- Navigation -->
    <nav class="navbar">
        <a class="logo" id="Acceuil" href="#"><img class="log" src="../logo-pg.png" alt="logo pigier"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <ul>
            <li>
                <a class="nav-link" href="#Acceuil">Accueil</a>
            </li>
            <li>
                <a class="nav-link" href="#Services">Services</a>
            </li>
            <li>
                <a class="nav-link" href="#nous">À propos</a>
            </li>
            <li>
                <a class="nav-link" href="#Footer">Contact</a>
            </li>
            <li>
            <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            

              

            </li>
        </ul>
    </nav>
   
                    
                   

    

    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <h1 class="display-4">Bienvenue au Cabinet de Placement</h1>
            <p class="lead">Votre partenaire de confiance pour trouver les meilleurs talents. <br> <br>
                Le Cabinet de Placement de Pigier Côte d'Ivoire joue un rôle essentiel dans la carrière des étudiants en
                les connectant avec des opportunités professionnelles alignées sur leurs compétences et aspirations.
                Notre mission est de faciliter la transition des étudiants vers le monde professionnel en leur
                fournissant des opportunités de stage et d'emploi correspondant à leurs compétences et à leurs
                ambitions.
            </p>
            <!-- <p>
                Le Cabinet de Placement de Pigier Côte d'Ivoire joue un rôle essentiel dans la carrière des étudiants en
                les connectant avec des opportunités professionnelles alignées sur leurs compétences et aspirations.
                Notre mission est de faciliter la transition des étudiants vers le monde professionnel en leur
                fournissant des opportunités de stage et d'emploi correspondant à leurs compétences et à leurs
                ambitions.</p>  -->
        </div>
    </section>

    <!-- Features Section -->
    <section id="Services" class="features py-5">
        <div class="container">
            <div class="row text-center">
                <div id="abc" class="col-md-4">
                    <div class="icon">
                        <i class="fas fa-briefcase"></i>
                    </div>
                    <h3>Recrutement et demande de candidature</h3>
                    <p>Nous vous aidons à trouver les meilleurs candidats pour votre entreprise.</p>
                    <button onclick="afficherPopup()" id="espb" class="btn btn-primary btn-lg">En savoir plus</button>
                    <div id="myModal" class="modal">
                        <div class="modal-content">
                            <h2>Choisissez un formulaire :</h2>
                            <button  ><a href="{{ route('demandeentreprise') }}">Formulaire de demande entreprise</a>
                            </button>
                            <button><a href="{{ route('candidature') }}">Formulaire de candidature</a>
                            </button>
                            <button onclick="fermerPopup()">Fermer</button>
                        </div>
                    </div>
                </div>
                <script>
                    // Afficher la popup
                    function afficherPopup() {
                        var modal = document.getElementById('myModal');
                        modal.style.display = 'block';
                    }

                    // Rediriger vers le formulaire choisi
                    function redirigerVersFormulaire(lienFormulaire) {
                        window.location.href = lienFormulaire; // Rediriger vers le lien du formulaire choisi
                    }

                    // Fermer la popup
                    function fermerPopup() {
                        var modal = document.getElementById('myModal');
                        modal.style.display = 'none';
                    }
                </script>
                <div id="abcd" class="col-md-4">
                    <div class="icon">
                        <i class="fas fa-user-tie"></i>
                    </div>
                    <h3>Consultation</h3>
                    <p>Des conseils personnalisés pour optimiser vos processus de recrutement.</p>
                    <a href="#" id="esp" class="btn btn-primary btn-lg">En savoir plus</a>
                </div>
                <div id="abce" class="col-md-4">
                    <div class="icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Formation</h3>
                    <p>Programmes de formation pour améliorer les compétences de votre équipe.</p>
                    <a href="#" id="espb" class="btn btn-primary btn-lg">En savoir plus</a>
                </div>
            </div>
        </div>
    </section>
    <section id="nous">
        <div class="container">
            <div class="row">
                <center>
                    <h3>Cabinet de placement - des partenariats école/entreprises</h3>
                    <p>
                        <br>
                        Nos services sont les suivant: <br>
                        Orientation Professionnelle : Nous aidons les étudiants à mieux comprendre le marché du travail, à identifier leurs forces et à définir des objectifs de carrière réalistes.
                        <br>Mise en Relation : Grâce à notre vaste réseau d'entreprises partenaires, nous facilitons la mise en relation entre les étudiants et les employeurs potentiels.
                        <br>Ateliers de Préparation : Nous organisons des séances de formation pour renforcer les compétences professionnelles des étudiants, y compris la rédaction de CV, les entretiens d'embauche, et la gestion de carrière.
                        <br>Suivi Post-placement : Nous maintenons un suivi avec les étudiants placés pour assurer leur adaptation réussie dans leur environnement professionnel.
                        <br>Partenariats : Nous collaborons avec un large éventail d'entreprises locales et internationales dans divers secteurs pour offrir des opportunités diversifiées à nos étudiants.
                    </p>
                </center>
            </div>
        </div>
    </section>
    <!-- Footer -->
    <footer>
        <div class="container" id="Footer">
            <p> Nos Formations :
                BTS ,
                LICENCE 1 & 2 ,
                LICENCE 3 ,
                MASTERS ,
                FOAD <br>
                Nos Campus :
                ABIDJAN- PLATEAU ,
                ABIDJAN- YOPOUGON ,
                YAMOUSSOUKRO <br>
                Adresses: <br>
                Campus Abidjan :

                (+225) 27 20 30 35 00 ;
                (+225) 07 07 05 78 18 <br>
                Campus Yamoussoukro :

                (+225) 27 30 64 51 71 ;
                (+225) 07 87 72 36 66 <br>
                Pour plus d'info, contactez nous <a href="mailto:massirima23@gmail.com">massirima23@gmail.com</a> <br>

                © 2024 PIGIER Côte d'ivoire</p>
        </div>
    </footer>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</body>

</html>
