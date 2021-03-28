@extends('partials.includes')
@section('css_additionnel')
    <link href="{{asset('js/galerie/lightbox.min.css')}}" rel="stylesheet" />
    <style>
        .shop-cat-box img{
            height: 230px;
        }
    </style>
@endsection

@section('body')
    <!-- Start Slider -->
    <div id="slides-shop" class="cover-slides">
        <ul class="slides-container">
            <li class="text-left">
                <img src="{{asset('assets/bannieres/num11.jpeg')}}" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8" style="background-color:rgba(0,0,0,0.3)">
                            <h2 class="text-white"><strong>Bienvenue chez </strong></h1>
                            <h1 class="m-b-20 text-white"><strong>Aol Africa Seoul Group</strong></h1>
                            <!-- <p><a class="btn hvr-hover" href="{{route('boutique')}}?type=Alcool">Visiter la boutique</a></p> -->
                        </div>
                    </div>
                </div>
            </li>
            <li class="text-center">
                <!--<img src="{{asset('assets/bannieres/n2.jpeg')}}" alt="">-->
                <img src="{{asset('assets/bannieres/pickup3.jpeg')}}" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <!-- <h1 class="m-b-20 text-white"><strong>Consultez notre galerie de produits et faites vous plaisir!</strong></h1> -->
                            <!-- <p><a class="btn hvr-hover" href="{{route('boutique')}}?type=Alcool">Visiter la boutique</a></p> -->
                        </div>
                    </div>
                </div>
            </li>
            <li class="text-right">
                <img src="{{asset('assets/bannieres/banner3.jpeg')}}" alt="">
                <div class="container">
                    <div class="row">
                        <div class="offset-md-3 col-md-9" style="background-color:rgba(0,0,0,0.3)">
                            <h2 class="m-b-20 "style="color:yellow"><strong>Aol Africa Seoul Group,</strong></h2>
                            <h1 class="m-b-20"  style="color:yellow">Tous pour vous satisfaire</strong></h1>
                            <!-- <p><a class="btn hvr-hover" href="{{route('boutique')}}?type=Alcool">Visiter la boutique</a></p> -->
                        </div>
                    </div>
                </div>
            </li>
            <li class="text-right">
                <img src="{{asset('assets/bannieres/boire.jpeg')}}" alt="">
                <div class="container">
                    <!-- <div class="row">
                        <div class="col-md-12">
                            <h2 class="m-b-20 text-white"><strong>Aol Africa Seoul Group,</strong></h2>
                            <h1 class="m-b-20 text-white">Tous pour vous satisfaire</strong></h1>
                            <p><a class="btn hvr-hover" href="#">Visiter la boutique</a></p>
                        </div>
                    </div> -->
                </div>
            </li>
        </ul>
        <div class="slides-navigation">
            <a href="#" class="next" id="btn_droit_defilement_slide"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
            <a href="#" class="prev"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
        </div>
    </div>
    <!-- End Slider -->
    
    
    
    

    <!-- Start Categories  -->
    <div class="categories-shop" id="produits_services">
        <div class="container">

            <div class="row">
                <div class="title-all text-center">
                    <h1>Vous êtes intéressé par</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    
                    <div class="shop-cat-box">
                        <img class="img-fluid" src="https://mia-business.com/wp-content/uploads/2018/12/export_import-768x576.jpg" alt="" />
                        <a class="btn hvr-hover" href="{{route('import_export')}}">Import-Export Général </a>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    
                    <div class="shop-cat-box">
                        <img class="img-fluid" src="articles/voitures_neuves/chevrolet.400000.5.jpeg" alt="" />
                        <a class="btn hvr-hover" href="{{route('boutique')}}?type=voitures_neuves">Véhicules</a>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    
                    <div class="shop-cat-box">
                    <img class="img-fluid" src="https://www.digischool.fr/images/article/le-master-informatique-lg-36795.jpg" alt="" />
                        <a class="btn hvr-hover" href="{{route('boutique')}}?type=ordinateur">High Tech </a>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    
                    <div class="shop-cat-box">
                        <img class="img-fluid" src="https://radiopons.files.wordpress.com/2015/06/image-beaute.jpg?w=300&h=200" alt="" />
                        <a class="btn hvr-hover" href="{{route('boutique')}}?type=Beauté & Bien être">Beauté & Bien être</a>
                    </div>
                </div>
                
                
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    
                    <div class="shop-cat-box">
                        <img class="img-fluid" src="https://www.toomed.com/blog/wp-content/uploads/2013/08/materiel.png" alt="" />
                        <a class="btn hvr-hover" href="{{route('boutique')}}?type=Médical">Matériel Médical  </a>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    
                    <div class="shop-cat-box">
                        <img class="img-fluid" src="http://www.arts-et-gastronomie.com/wp-content/uploads/2011/01/fotolia_1446422-990x714.jpg" alt="" />
                        <a class="btn hvr-hover" href="{{route('boutique')}}?type=food">Food Service</a>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    
                    <div class="shop-cat-box">
                        <img class="img-fluid" src="https://organismes.org/wp-content/uploads/2020/02/Cre%CC%81er-entreprise.jpg" alt="" />
                        <a class="btn hvr-hover" href="{{route('contact')}}?type=Services">Entreprises & Services </a>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    
                    <div class="shop-cat-box">
                        <img class="img-fluid" src="https://cdn.pixabay.com/photo/2017/11/24/21/49/bali-2975787_960_720.jpg" alt="" />
                        <a class="btn hvr-hover" href="{{route('boutique')}}?type=Loisirs">Loisirs</a>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    
                    <div class="shop-cat-box">
                        <img class="img-fluid" src="https://actualite.seloger-construire.com/sites/default/files/article/image/maison-en-l-seloger-construire.jpg" alt="" />
                        <a class="btn hvr-hover" href="{{route('boutique')}}?type=maison"> Pour la maison </a>
                    </div>
                </div>
                {{--
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    
                    <div class="shop-cat-box">
                        <img class="img-fluid" src="https://gomirang.fr/wp-content/uploads/elementor/thumbs/boissons-coreennes-soju-orj7k83p9w8gazwg0i7zfzm181r5je3n2hu70tf7cw.jpg" alt="" />
                        <a class="btn hvr-hover" href="{{route('boutique')}}?type=Alcool"> ligne d’alcool Sud-Coréen </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    
                    <div class="shop-cat-box">
                        <img class="img-fluid" src="https://previews.123rf.com/images/yurazaga/yurazaga1710/yurazaga171000005/89605295-cr%C3%A9ation-de-logo-de-mode-cr%C3%A9ative-inscription-de-signe-de-vecteur-calligraphie-du-logo.jpg" alt="" />
                        <a class="btn hvr-hover" href="{{route('boutique')}}?type=Mode">Mode et vêtement </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    
                    <div class="shop-cat-box">
                        <img class="img-fluid" src="https://cdn.generationvoyage.fr/2017/05/meilleurs-comparateurs-voyage-1.jpg" alt="" />
                        <a class="btn hvr-hover" href="{{route('boutique')}}?type=Voyage & tourisme"> Voyage & tourisme </a>
                    </div>
                </div>
                --}}

            </div> 
        </div>
    </div>
    <!-- End Categories -->

    <!-- Start Products  -->
    <div class="products-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-all text-center">
                        <h1>Recommandés pour vous</h1>
                    </div>
                </div>
            </div>

            <div class="row special-list">
                
                <div class="col-lg-4 col-md-6 special-grid top-featured">
                    <div class="products-single fix">
                        <div class="box-img-hover">
                            <img src="articles/voitures_neuves/chevrolet.400000.5.jpeg" class="img-fluid" alt="Image">
                            <div class="mask-icon">
                                <a class="cart" href="#">Ajouter au panier</a>
                            </div>
                        </div>
                        <div class="why-text">
                            <h4>chevrolet</h4>
                            <!-- <h5> 9070 FCFA</h5> -->
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6 special-grid top-featured">
                    <div class="products-single fix">
                        <div class="box-img-hover">
                            <img src="articles/voitures_neuves/huanday santafe.0.3.jpeg" class="img-fluid" alt="Image">
                            <div class="mask-icon">
                                <a class="cart" href="#">Ajouter au panier</a>
                            </div>
                        </div>
                        <div class="why-text">
                            <h4>huanday santafe</h4>
                            <!-- <h5> 9070 FCFA</h5> -->
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6 special-grid top-featured">
                    <div class="products-single fix">
                        <div class="box-img-hover">
                            <img src="articles/voitures_neuves/kia palisade.0.4.jpeg" class="img-fluid" alt="Image">
                            <div class="mask-icon">
                                <a class="cart" href="#">Ajouter au panier</a>
                            </div>
                        </div>
                        <div class="why-text">
                            <h4>kia palisade</h4>
                            <!-- <h5> 9070 FCFA</h5> -->
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- End Products  -->

@endsection

@section('js_additionnel')
 <script>
    function defilement_slide(){
        console.log('call function');
        let btn_droit = document.getElementById('btn_droit_defilement_slide');
        btn_droit.click();
    }
    // window.addEventListener('load', function () {
    //     setInterval(defilement_slide, 4500);
    // });
 </script>
@endsection 
