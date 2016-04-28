<!DOCTYPE html>
<html lang="fr">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
    <title>LAMBILLIONEA</title>

    <!-- CSS  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="{{ asset('css/materialize.css') }}" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="{{ asset('css/style.css') }}" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
    
    <!-- JS -->
    <script type="text/javascript" src="{{ asset('js/jquery-2.1.4.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/materialize.js') }}"></script>
    <script>
        
        $(document).ready(function(){
            // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
            $('.modal-trigger').leanModal();

            $('#header').load('modals.html');
        });

    </script>
    <div class="bg-grass">
<header class="navbar-fixed z-depth-2">    
    
    <!-- NAVIGATION -->
    <nav class="light-green darken-4" role="navigation">
        <div class="nav-wrapper container">
            <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
            <ul class="left hide-on-med-and-down">
                <li><a href="/" class="white-text">ACCUEIL</a></li>
                <li><a href="revue" class="white-text">LA REVUE</a></li>
                <li><a href="articles.html" class="white-text">PUBLIER UN ARTICLE</a></li>
                <li><a href="evenements.html" class="white-text">événements</a></li>
            </ul>
            
            <ul class="right hide-on-med-and-down">
                <li class="light-green darken-3"><a href="#modal0" class="modal-trigger white-text"><img src="{{ asset('media/icons/fa-power.png') }}" style="margin-right: 10px">CONNEXION</a></li>
                <li class="light-green darken-3" style="margin-left: 5px"><a href="mon-panier.html" class="white-text"><img src="{{ asset('media/icons/fa-shopping-cart.png') }}" style="margin-right: 10px">MON PANIER</a></li>
            </ul>

            <ul class="side-nav" id="mobile-demo">
                <li><a href="index.html">ACCUEIL</a></li>
                <li><a href="revue.html">LA REVUE</a></li>
                <li><a href="articles.html">PUBLIER UN ARTICLE</a></li>
                <li><a href="evenements.html">événements</a></li>
                <li class="light-green darken-3"><a href="#modal0" class="modal-trigger white-text"><img src="{{ asset('media/icons/fa-power.png') }}" style="margin-right: 10px">CONNEXION</a></li>
                <li class="light-green darken-3"><a href="mon-panier.html" class="white-text"><img src="{{ asset('media/icons/fa-shopping-cart.png') }}" style="margin-right: 10px">MON PANIER</a></li>
            </ul>

        </div>
    </nav>
    <!-- FIN -->
    
</header>
	  @section('main')
           
	<div id="header"></div>

  <div id="index-banner-1" class="parallax-container parallax-index">
    <div class="section no-pad-bot">
      <div class="container">
        <div class="parallax-logo"><img src="{{ asset('media/logo.png') }}" alt="logo"></div>
        <h5 class="brown-text text-darken-1">L'Union des Entomologistes belges asbl</h5>
        <div class="row">
            <p class="header col s12 m10 l6 light">Envie de participer à la grande aventure du monde des insectes ? N'attendez plus, rejoignez notre asbl et bénéficiez de la revue Lambillionea.</p>
        </div>
        <div class="row">
            <div class="col s12 m10 l6 btn-white">
                <a href="#modal1" id="download-button" class="modal-trigger btn waves-effect waves-light">En savoir +</a>
            </div>
        </div>
        <div class='col s12 center margin-top-30'><a href="#1"><img src='media/icons/fa-arrow-circle-down.png' alt='arrow'></a></div>
      </div>
    </div>
    <div class="parallax"><img src="{{ asset('media/bg-1.jpg') }}" alt="Unsplashed background img 1"></div>
  </div>

<div id="1">
    <div class="container">
        <div class="section">

        <!--   Icon Section   -->
        <div class="row margin-top-30">
            <div class="col s12 m4">
                <div class="icon-block center">
                    <img src="{{ asset('media/icons/fa-users.png') }}">
                    <h5 class="center josefin-regular">Rejoignez notre asbl</h5>
                    <p class="light">We did most of the heavy lifting for you to provide a default stylings that incorporate our custom components. Additionally, we refined animations and transitions to provide a smoother experience for developers.</p>
                    <a href="#modal1" id="download-button" class="btn btn-bleu waves-effect waves-light">En savoir +</a>
                </div>
            </div>

            <div class="col s12 m4">
                <div class="icon-block center">
                    <img src="{{ asset('media/icons/fa-book.png') }}">
                    <h5 class="center josefin-regular">Découvrez notre revue</h5>
                    <p class="light">By utilizing elements and principles of Material Design, we were able to create a framework that incorporates components and animations that provide more feedback to users. Additionally, a single underlying responsive system across all platforms allow for a more unified user experience.</p>
                    <a href="revue.html" id="download-button" class="btn btn-bleu waves-effect waves-light">En savoir +</a>
                </div>
            </div>

            <div class="col s12 m4">
                <div class="icon-block center">
                    <img src="{{ asset('media/icons/icomoon-pencil.png') }}">
                    <h5 class="center josefin-regular">Publiez vos articles</h5>
                    <p class="light">We have provided detailed documentation as well as specific code examples to help new users get started. We are also always open to feedback and can answer any questions a user may have about Materialize.</p>
                    <a href="#modal2" id="download-button" class="modal-trigger btn btn-bleu waves-effect waves-light">En savoir +</a>
                </div>
            </div>
        </div>

        </div>
    </div>
</div>


  

  <div class="container">
    <div class="section">
      <div class="row"> 
        <div class="section">
            <div class="row center">
                <h2 class="josefin-bold">Qui sommes-nous ?</h2>
                <p>L'Union des Entomologistes Belges a pour but l'étude désintéressée de l'entomologie générale, de la systématique, de l'éthologie, de l'anatomie, de l'écologie et de la biogéographie en particulier, et des questions liées à ces disciplines. L'association s'intéresse également à la protection des populations d'insectes et à la sauvegarde des biotopes favorables à ces populations.</p>
                <br>
                <h5 class="josefin-bold">Généralités</h5>
                <p>Toute demande d'adhésion à l'Union des Entomologistes Belges doit être transmise par courrier au secrétariat. La qualité de membre adhérent et sa cotisation annuelle donnent droit à toutes les publications normales de la revue Lambillionea et aux feuillets d'information de la société tel que le " Monitor entomologicus ". Les autres publications sont accessibles séparément. Toute personne non membre peut acquérir une publication de la société au prix indiqué dans on catalogue.</p>
            </div>
        </div>
            
      
      </div>

    </div>
  </div>

     @show	
    
  <footer class="page-footer grey darken-3">
    <div class="container">
        <div class="row">
            <div class="col l6 s12">
                <h5 class="josefin-bold white-text">Lambillionea asbl</h5>
                <p class="grey-text text-lighten-4">Fondée en 2010 par Thierry BOUYER, Jacques HECQ et Auguste FRANCOTTE.
                <br>(anciennement "Société entomologique namuroise" créée à Namur en 1896)
                <br>Siège : 57, rue GENOT, B - 4032 Chênée, Belgique .
                <br><br>E-mail : <a href="#">lambillionea@hotmail.com</a></p>
            </div>
            <div class="col l3 s12">
                <h5 class="white-text">Settings</h5>
                <ul>
                    <li><a class="white-text" href="#!">Link 1</a></li>
                    <li><a class="white-text" href="#!">Link 2</a></li>
                    <li><a class="white-text" href="#!">Link 3</a></li>
                    <li><a class="white-text" href="#!">Link 4</a></li>
                </ul>
            </div>
            <div class="col l3 s12">
                <h5 class="white-text">Connect</h5>
                <ul>
                    <li><a class="white-text" href="#!">Link 1</a></li>
                    <li><a class="white-text" href="#!">Link 2</a></li>
                    <li><a class="white-text" href="#!">Link 3</a></li>
                    <li><a class="white-text" href="#!">Link 4</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-copyright grey darken-4">
      <div class="container">
      Made by <a class="brown-text text-lighten-3" href="http://materializecss.com">Olivier Laval</a>
      </div>
    </div>
  </footer>
    </div>

  <!--  Scripts-->
  <script src="{{ asset('https://code.jquery.com/jquery-2.1.1.min.js') }}"></script>
  <script src="{{ asset('js/materialize.js') }}"></script>
  <script src="{{ asset('js/init.js') }}"></script>

  </body>
</html>
