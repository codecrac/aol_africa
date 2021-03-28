<!DOCTYPE html>
<html lang="en">
<!-- Basic -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Site Metas -->
    <title>Asg group</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="{{asset('images/favicon.ico" type="image/x-icon')}}">
    <link rel="apple-touch-icon" href="{{asset('images/apple-touch-icon.png')}}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <!-- Site CSS -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{asset('css/responsive.css')}}">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{asset('css/custom.css')}}">

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    <!--///HUMAN///-->
<!--AUTEUR : RICHARD'S RELATION-->
<!--site web = http://richardsrelation.com/-->
<!------------------------------------------------------------>
<!------------------------------------------------------------>
<!--dev : yves ladde-->
<!--cv perso = https://ladde.000webhostapp.com/cv-->

    <style>
        #custom_dropdown{
            z-index:1000;padding:0px 10px;background-color:white ;position:absolute; bottom:2;left:-35;width:350px; height:400px;overflow-y:scroll;overflow-x:hidden;
        }
        #custom_dropdown > .nav-link,
        #custom_dropdown >.row >.col-md-12 > .nav-link,
        #custom_dropdown >.row > .nav-link{
            display:none;
        }
    </style>
    @yield('css_additionnel')
</head>

<body>


<!-- Start Main Top -->
<header class="main-header">
    <!-- Start Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-default bootsnav">
        <div class="container">
            <!-- Start Header Navigation -->
            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-menu" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="{{route('accueil')}}"><img src="assets/logo/logo_asg.jpeg" class="logo" alt="" height="100"></a>
            </div>
            <!-- End Header Navigation -->

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="navbar-menu">
                <ul class="nav navbar-nav ml-auto" data-in="fadeInDown" data-out="fadeOutUp">
                    <li class="nav-item active"><a class="nav-link" href="{{route('accueil')}}">Accueil</a></li>
                    <li class="dropdown megamenu-fw" onmouseover="showCustomSubMenu()" onmouseout="showCustomSubMenu()">
                        <a href="#" onclick="showCustomSubMenu()" class="nav-link dropdown-toggle" style="font-weight:normal;position:relative" data-toggle="dropdown">
                            Produit & services
                             <div id="custom_dropdown" style="display:none">
                                    <div class="row">
                                        <div class="col-menu col-md-12"> 
                                            <ul class="menu-col">
                                                <li><a href="{{route('import_export')}}" class="title"> Import-Export Général <br/> </a> </li>
                                            </ul>
                                        </div>
                                        
                                        <div class="col-menu col-md-12">
                                        <hr style="height:2px;background-color:#ccc"/>
                                            <h6 class="title">Véhicules</h6>
                                            <div class="content">
                                                <ul class="menu-col">
                                                    <li><a href="{{route('boutique')}}?type=voitures_neuves">Voitures Neuves</a></li>
                                                    <li><a href="{{route('boutique')}}?type=voitures_occasions">Voitures d'Occasions</a></li>
                                                    <li><a href="{{route('boutique')}}?type=voitures_locations">Voitures à Louer</a></li>
                                                    <li><a href="{{route('boutique')}}?type=2roues">Moto & Vélos</a></li>
                                                    <li><a href="{{route('boutique')}}?type=voitures_professionnel">Voitures Professionnelles</a></li>
                                                    <li><a href="{{route('boutique')}}?type=Bateaux">Bateaux & Nautisme</a></li>
                                                    <li><a href="{{route('boutique')}}?type=accessoires_voitures">Pièces & Accessoires</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- end col-3 -->
                                        <div class="col-menu col-md-12">
                                        <hr style="height:2px;background-color:#ccc"/>
                                            <h6 class="title">High Tech</h6>
                                            <div class="content">
                                                <ul class="menu-col">
                                                    <li><a href="{{route('boutique')}}">Mobiles & Smartphones</a></li>
                                                    <li><a href="{{route('boutique')}}">Tablettes</a></li>
                                                    <li><a href="{{route('boutique')}}">Accessoires Téléphones</a></li>
                                                    <li><a href="{{route('boutique')}}">Ordinateurs</a></li>
                                                    <li><a href="{{route('boutique')}}">Jeux Vidéos & Consoles</a></li>
                                                    <li><a href="{{route('boutique')}}">TV & Vidéos</a></li>
                                                    <li><a href="{{route('boutique')}}">Son, Casques, Enceintes</a></li>
                                                    <li><a href="{{route('boutique')}}">Accessoires Informatiques</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        
                                        <div class="col-menu col-md-12">
                                        <hr style="height:2px;background-color:#ccc"/>
                                            <h6 class="title">Beauté & Bien-Être</h6>
                                            <div class="content">
                                                <ul class="menu-col">
                                                    <li><a href="{{route('boutique')}}">Cosmétiques & Soins</a></li>
                                                    <li><a href="{{route('boutique')}}">Parfums</a></li>
                                                    <li><a href="{{route('boutique')}}">Accessoires de Beauté</a></li>
                                                </ul>
                                            </div>
                                        </div>
 

                                        <!-- end col-3 -->
                                        <div class="col-menu col-md-12">    
                                            <ul class="menu-col">
                                                <hr style="height:2px;background-color:#ccc"/>
                                                <a href="{{route('boutique')}}?type=food" class="title" > Matériel Médical</a>
                                                <br/>
                                                <hr style="height:2px;background-color:#ccc"/>
                                                <a href="{{route('boutique')}}?type=food" class="title" >Food Service</a>
                                            </ul>
                                        
                                        </div>
                                        
                                        <div class="col-menu col-md-12">
                                        <hr style="height:2px;background-color:#ccc"/>
                                            <h6 class="title">Entreprise & Service</h6>
                                            <div class="content">
                                                <ul class="menu-col">
                                                    <li><a href="{{route('boutique')}}">Services</a></li>
                                                    <li><a href="{{route('boutique')}}">Équipements Professionnels</a></li>
                                                    <li><a href="{{route('boutique')}}">Équipements de Bureau</a></li>
                                                    <li><a href="{{route('boutique')}}">Matériaux de Construction</a></li>
                                                </ul>
                                            </div>
                                        </div>
  
                                        <div class="col-menu col-md-12">
                                        <hr style="height:2px;background-color:#ccc"/>
                                            <h6 class="title">Loisirs</h6>
                                            <div class="content">
                                                <ul class="menu-col">
                                                    <li><a href="{{route('sport_fitness')}}">Sports & Fitness</a></li>
                                                    <li><a href="{{route('voyage_tourisme')}}">Voyages & Tourismes</a></li>
                                                    <li><a href="{{route('boutique')}}">Instruments de Musique</a></li>

                                                </ul>
                                            </div>
                                        </div>
                                        
                                        <!-- end col-3 -->
                                        <div class="col-menu col-md-12">
                                        <hr style="height:2px;background-color:#ccc"/>
                                            <h6 class="title">Pour la maison</h6>
                                            <div class="content">
                                                <ul class="menu-col">
                                                    <li><a href="{{route('boutique')}}">Electroménager</a></li>
                                                    <li><a href="{{route('boutique')}}">Meubles & Luminaires</a></li>
                                                    <li><a href="{{route('boutique')}}">Décoration</a></li>
                                                    <li><a href="{{route('boutique')}}">Arts de table & Vaisselles</a></li>
                                                    <li><a href="{{route('boutique')}}">Literie</a></li>
                                                    <li><a href="{{route('boutique')}}">Bricolage & Jardinage</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                              </div>
                        </a>
                    </ul>
                </li>
                    
                    <li class="nav-item"><a class="nav-link" href="{{route('apropos')}}">A propos</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route('galerie')}}">Galerie</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route('contact')}}">Contacts</a></li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->

            <!-- Start Atribute Navigation -->
            <div class="attr-nav">
                <ul>
                    <li class="search"><a href="#"><i class="fa fa-search"></i></a></li>
                    <li class="side-menu"><a href="#">
                            <i class="fa fa-shopping-bag"></i>
                            <span class="badge">3</span>
                        </a></li>
                </ul>
            </div>
            <!-- End Atribute Navigation -->
        </div>
        <!-- Start Side Menu -->
        <div class="side">
            <a href="#" class="close-side"><i class="fa fa-times"></i></a>
            <li class="cart-box">
                <ul class="cart-list">
                    <li>
                        <a href="#" class="photo"><img src="images/img-pro-01.jpg" class="cart-thumb" alt="" /></a>
                        <h6><a href="#">Delica omtantur </a></h6>
                        <p>1x - <span class="price">8000 FCFA</span></p>
                    </li>
                    <li>
                        <a href="#" class="photo"><img src="images/img-pro-02.jpg" class="cart-thumb" alt="" /></a>
                        <h6><a href="#">Omnes ocurreret</a></h6>
                        <p>1x - <span class="price">6000 FCFA</span></p>
                    </li>
                    <li>
                        <a href="#" class="photo"><img src="images/img-pro-03.jpg" class="cart-thumb" alt="" /></a>
                        <h6><a href="#">Agam facilisis</a></h6>
                        <p>1x - <span class="price">400 FCFA</span></p>
                    </li>
                    <li class="total">
                        <span class="float-right"><strong>Total</strong>: 18000 FCFA</span>
                        <a href="#" class="btn btn-default hvr-hover btn-cart">Voir le panier</a>
                    </li>
                </ul>
            </li>
        </div>
        <!-- End Side Menu -->
    </nav>
    <!-- End Navigation -->
</header>
<!-- End Main Top -->

<!-- Start Top Search -->
<div class="top-search">
    <div class="container">
        <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-search"></i></span>
            <input type="text" class="form-control" placeholder="Rechercher">
            <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
        </div>
    </div>
</div>
<!-- End Top Search -->


@yield('body')


<!-- Start Footer  -->
<footer>
    <div class="footer-main">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-12 col-sm-12">
                    <div class="footer-widget">
                        <h4>Aol Africa Seoul Group </h4>
                        <p>AOL Africa Seoul Group vous permet d’avoir les produits de la Corée du sud, du Japon, d’Asie et d’ailleurs</p>
                        <!-- <p>est une société basée en Corée du sud depuis plus de 10 ans dont l’activité s’étend de la restauration au service d’import-export générale. Elle est née de la volonté de jeunes Ivoiriens désirant apporter leur contribution au développement du continent Africain.                         </p> -->
                        <ul>
                            <li><a href="https://www.facebook.com/CSAVCONSULT"><i class="fab fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fab fa-linkedin" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fab fa-whatsapp" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fab fa-youtube" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12">
                    <div class="footer-link">
                        <h4>Liens utiles</h4>
                        <ul>
                            <li><a href="{{route('apropos')}}">A propos</a></li>
                            <li><a href="{{route('accueil')}}#produits_services">Produits & Services</a></li>
                            <li><a href="{{route('galerie')}}">Galerie</a></li>
                            <li><a href="{{route('contact')}}">Contactez nous</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12">
                    <div class="footer-link-contact">
                        <h4>Contactez 
                        Nous</h4>
                        <ul>
                            <li>
                                <p><i class="fas fa-map-marker-alt"></i>Corée :  Gyeonggido pyeontecksi sinjandong 1ro 17 beongil 17 Corée du Sud
                                </p>
                                <p><span>Tél : +82 31 66 61 336 / +8210-9556-8336<br/>
                                        Fax : +823-1664-1337 <br/></span> </p>
                                
                                
                                <br/><p></p>
                                
                                <div>
                                    <p><i class="fas fa-map-marker-alt"></i>
                                    Côte d'ivoire : GRAND-BASSAM MOCKEY-VILLE EXTENSION ILOT 143 LOT 1485
                                        <br/>
                                        06 BP 6825 ABIDJAN 06
                                    </p>
                                    <p><i class="fas fa-phone-square"></i>+225 07 09 56 97 00</p>
                                    
                                </div>
                            </li>
                            <li>
                            </li>
                             <li>
                                <p><i class="fas fa-envelope"></i>Email: <a href="mailto:support@aolafrica.co.kr">support@aolafrica.co.kr</a></p>
                            </li> -
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- End Footer  -->


<!-- Start copyright  -->
<div class="footer-copyright">
    <p class="footer-company">&copy; <?=date('Y')?> - Aol Africa Seoul Group  - Tous droits reserves <br/>
        Concu par : Africa-ecodev
    </p>
</div>
<!-- End copyright  -->

<a href="#" id="back-to-top" title="Back to top" style="display: none;">&uarr;</a>

<!-- ALL JS FILES -->
<script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
<script src="{{asset('js/popper.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<!-- ALL PLUGINS -->
<script src="{{asset('js/jquery.superslides.min.js')}}"></script>
<script src="{{asset('js/bootstrap-select.js')}}"></script>
<script src="{{asset('js/inewsticker.js')}}"></script>
<script src="{{asset('js/bootsnav.js')}}"></script>
<script src="{{asset('js/images-loded.min.js')}}"></script>
<script src="{{asset('js/isotope.min.js')}}"></script>
<script src="{{asset('js/owl.carousel.min.js')}}"></script>
<script src="{{asset('js/baguetteBox.min.js')}}"></script>
<script src="{{asset('js/form-validator.min.js')}}"></script>
<script src="{{asset('js/contact-form-script.js')}}"></script>
<script src="{{asset('js/custom.js')}}"></script>

<script>
    function showCustomSubMenu(){
        let custom_sub_menu = document.getElementById("custom_dropdown");
        if(custom_sub_menu.style.display != "none"){
            custom_sub_menu.style.display = "none"
        }else{
            custom_sub_menu.style.display = "block"
        }
    }
</script>

@yield('js_additionnel')