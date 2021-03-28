@extends('partials.includes')

@section('body')

<style>
    .text-capitalize{
        text-transform : capitalize;
    }
</style>

<?php
    if(isset($_GET['type'])){
        $type_choisie = $_GET['type'];
    }else{
        $type_choisie ="";
    }
?>

<!-- Start Shop Page  -->
<div class="shop-box-inner">
    <div class="container">
        <div class="row">
            <div class="col-xl-3 col-lg-3 col-sm-12 col-xs-12 sidebar-shop-left">
                <div class="product-categori">
                   
                    <div class="filter-sidebar-left">
                        <div class="title-left">
                            <h3>Categories</h3>
                        </div>
                        <div class="list-group list-group-collapse list-group-sm list-group-tree" id="list-group-men" data-children=".sub-men">
                            
                            
                           <div class="list-group-collapse sub-men">
                                <a href="?type=import_export " class="list-group-item text-capitalize list-group-item text-action  <?php if($type_choisie=='import_export'){ echo 'active';} ?> ">Import-export général</a>
                            </div>
                            <!-------------------------------------------->
                              
                           <div class="list-group-collapse sub-men">
                                <a class="list-group-item text-capitalize list-group-item text-action " href="#sub-men2" data-toggle="collapse" aria-expanded="true" aria-controls="sub-men2">Véhicules</a>
                                <div class="collapse " id="sub-men2" data-parent="#list-group-men">
                                    <div class="list-group">
                                        
                                        <a href="?type=voitures_neuves" class="list-group-item text-capitalize list-group-item text-action  <?php if($type_choisie=='voitures_neuves'){ echo 'active';} ?> ">voitures neuves</a>

                                        <a href="?type=voitures_occasions " class="list-group-item list-group-item text-action  <?php if($type_choisie=='voitures_occasions'){ echo 'active';} ?> ">Voitures  d'Occasions </a>                                        
                                        
                                        <a href="?type=voitures_locations" class="list-group-item list-group-item text-action  <?php if($type_choisie=='voitures_locations'){ echo 'active';} ?>">Voitures à Louer</a>
                                        
                                        <a href="?type=2roues" class="list-group-item text-capitalize list-group-item text-action  <?php if($type_choisie=='2roues'){ echo 'active';} ?>">Moto & Vélos</a>
                                        
                                        <a href="?type=voitures_professionnel" class="list-group-item text-capitalize list-group-item text-action  <?php if($type_choisie=='voitures_professionnel'){ echo 'active';} ?>">voitures professionnelles</a>
                                        
                                        <a href="?type=Bateaux" class="list-group-item text-capitalize list-group-item text-action  <?php if($type_choisie=='Bateaux'){ echo 'active';} ?>">Bateaux & Nautisme</a>
                                        
                                        <a href="?type=accessoires_voitures" class="list-group-item text-capitalize list-group-item text-action  <?php if($type_choisie=='accessoires_voitures'){ echo 'active';} ?>">Pieces & accessoires</a>
                                    </div>
                                </div>
                                
                            </div>
                            
                            
                            <!-- --------------------- -->
                            <div class="list-group-collapse sub-men">
                                <a class="list-group-item text-capitalize list-group-item text-action " href="#sub-men6" data-toggle="collapse" aria-expanded="true" aria-controls="sub-men6">High Tech</a>
                                <div class="collapse " id="sub-men6" data-parent="#list-group-men">
                                    <div class="list-group">
                                        
                                        <a href="?type=Produits informatique" class="list-group-item text-capitalize list-group-item text-action  <?php if($type_choisie=='Produits informatique'){ echo 'active';} ?> ">Mobiles & Smartphones </a>
                                        
                                        <a href="?type=Tablettes" class="list-group-item text-capitalize list-group-item text-action  <?php if($type_choisie=='Tablettes'){ echo 'active';} ?> ">Tablettes</a>
                                        
                                        <a href="?type=téléphone portable" class="list-group-item text-capitalize list-group-item text-action  <?php if($type_choisie=='Chaussures Femmes'){ echo 'active';} ?>">Accessoires Téléphones</a>
                                        
                                        <a href="?type=ordinateurs" class="list-group-item text-capitalize list-group-item text-action  <?php if($type_choisie=='ordinateur'){ echo 'active';} ?>">Ordinateurs</a>
                                        
                                        <a href="?type=Jeux" class="list-group-item text-capitalize list-group-item text-action  <?php if($type_choisie=='Jeux'){ echo 'active';} ?>">Jeux Vidéos & Consoles</a>
                                        <a href="?type=TV" class="list-group-item text-capitalize list-group-item text-action  <?php if($type_choisie=='TV'){ echo 'active';} ?>">TV & Vidéos</a>
                                        <a href="?type=Son" class="list-group-item text-capitalize list-group-item text-action  <?php if($type_choisie=='Son'){ echo 'active';} ?>">Son, Casques, Enceintes</a>
                                        <a href="?type=Accessoires" class="list-group-item text-capitalize list-group-item text-action  <?php if($type_choisie=='Accessoires'){ echo 'active';} ?>">Accessoires Informatiques</a>
                                                                                                                                                                                
                                                                                                                                        
                                                                                                                                        
                                                                                                                                        
                                                                                                                                        
                                                                                                                                        
                                                                                                                                        
                                                                                                                                        
                                        
                                    </div>
                                </div>
                            </div>
                                
                            
                            <!-- --------------------- -->
                            <div class="list-group-collapse sub-men">
                                <a class="list-group-item text-capitalize list-group-item text-action " href="#sub-men7" data-toggle="collapse" aria-expanded="true" aria-controls="sub-men7">Beauté & Bien être </a>
                                <div class="collapse " id="sub-men7" data-parent="#list-group-men">
                                    <div class="list-group">
                                        
                                        <a href="?type=Cosmétiques & Soins" class="list-group-item text-capitalize list-group-item text-action  <?php if($type_choisie=='Cosmétiques & Soins'){ echo 'active';} ?> ">Cosmétiques & Soins</a>
                                        
                                        <a href="?type=Parfum" class="list-group-item text-capitalize list-group-item text-action  <?php if($type_choisie=='Parfum'){ echo 'active';} ?> ">Parfum</a>
                                        
                                        <a href="?type=Accessoires de beauté" class="list-group-item text-capitalize list-group-item text-action  <?php if($type_choisie=='Accessoires de beauté'){ echo 'active';} ?>">Accessoires de beauté</a>
                                    </div>
                                </div>
                            </div>
                            <!-- --------------------- -->
                              
                           <div class="list-group-collapse sub-men">
                                <a href="?type=materiel_medical" class="list-group-item text-capitalize list-group-item text-action <?php if($type_choisie=='food'){ echo 'active';} ?>">Matériel Médical</a>
                            </div>
                            <!-- --------------------- -->
                              
                           <div class="list-group-collapse sub-men">
                                <a href="?type=food" class="list-group-item text-capitalize list-group-item text-action <?php if($type_choisie=='food'){ echo 'active';} ?>">Food service</a>
                            </div>
                            <!-- --------------------- -->
                            <div class="list-group-collapse sub-men">
                                <a class="list-group-item text-capitalize list-group-item text-action " href="#sub-men10" data-toggle="collapse" aria-expanded="true" aria-controls="sub-men10">Entreprises & Services</a>
                                <div class="collapse " id="sub-men10" data-parent="#list-group-men">
                                    <div class="list-group">
                                        <a href="?type=Services" class="list-group-item text-capitalize list-group-item text-action  <?php if($type_choisie=='Services'){ echo 'active';} ?> ">Services</a>    
                                        <a href="?type=Equipement professionnels" class="list-group-item text-capitalize list-group-item text-action  <?php if($type_choisie=='Equipement professionnels'){ echo 'active';} ?> ">Equipement professionnels</a>
                                        <a href="?type=Equipement de Bureau" class="list-group-item text-capitalize list-group-item text-action  <?php if($type_choisie=='Equipement de Bureau'){ echo 'active';} ?>">Equipement de Bureau</a>
                                        <a href="?type=Matériaux de construction" class="list-group-item text-capitalize list-group-item text-action  <?php if($type_choisie=='Matériaux de construction'){ echo 'active';} ?>">Matériaux de construction</a>
                                    </div>
                                </div>
                            </div>
                            

                            <!-- --------------------- -->
                            <div class="list-group-collapse sub-men">
                                <a class="list-group-item text-capitalize list-group-item text-action " href="#sub-men13" data-toggle="collapse" aria-expanded="true" aria-controls="sub-men13">Loisirs</a>
                                <div class="collapse " id="sub-men13" data-parent="#list-group-men">
                                    <div class="list-group">
                                        <a href="{{route('sport_fitness')}}" class="list-group-item text-capitalize list-group-item text-action  <?php if($type_choisie=='Sport & Fitness'){ echo 'active';} ?> ">Sport & Fitness</a>  
                                        <a href="?type=Instruments de musique" class="list-group-item text-capitalize list-group-item text-action  <?php if($type_choisie=='Instruments de musique'){ echo 'active';} ?> ">Instruments de musique</a>
                                        <a href="{{route('voyage_tourisme')}}" class="list-group-item text-capitalize list-group-item text-action  <?php if($type_choisie=='Voyage et Tourisme'){ echo 'active';} ?> ">Voyage et Tourisme</a>  
                                    
                                    </div>
                                </div>
                            </div>
                            
                                 <!-- --------------------- -->
                            <div class="list-group-collapse sub-men">
                                <a class="list-group-item text-capitalize list-group-item text-action " href="#sub-men8" data-toggle="collapse" aria-expanded="true" aria-controls="sub-men8">Pour la Maison</a>
                                <div class="collapse " id="sub-men8" data-parent="#list-group-men">
                                    <div class="list-group">
                                        
                                        <a href="?type=Electroménager" class="list-group-item text-capitalize list-group-item text-action  <?php if($type_choisie=='Electroménager'){ echo 'active';} ?> ">Electroménager</a>
                                        
                                        <a href="?type=Meubles & Luminaires" class="list-group-item text-capitalize list-group-item text-action  <?php if($type_choisie=='Meubles & Luminaires'){ echo 'active';} ?> ">Meubles & Luminaires</a>
                                        
                                        <a href="?type=Décoration" class="list-group-item text-capitalize list-group-item text-action  <?php if($type_choisie=='Décoration'){ echo 'active';} ?>">Décoration</a>
                                        <a href="?type=Arts de table & Vaisselles" class="list-group-item text-capitalize list-group-item text-action  <?php if($type_choisie=='Arts de table & Vaisselles'){ echo 'active';} ?>">Arts de table & Vaisselles</a>
                                        <a href="?type=Literie" class="list-group-item text-capitalize list-group-item text-action  <?php if($type_choisie=='Literie'){ echo 'active';} ?>">Literie</a>
                                        <a href="?type=Bricolage & Jardinage" class="list-group-item text-capitalize list-group-item text-action  <?php if($type_choisie=='Literie'){ echo 'Bricolage & Jardinage';} ?>">Bricolage & Jardinage</a>
                                        <a href="?type=Enfants & Bébés" class="list-group-item text-capitalize list-group-item text-action  <?php if($type_choisie=='Enfants & Bébés'){ echo 'active';} ?>">Enfants & Bébés</a>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        <!-- 33 -->
                    </div>

                </div>
            </div>
            <div class="col-xl-9 col-lg-9 col-sm-12 col-xs-12 shop-content-right">
                <div class="right-product-box">

                    <div class="row product-categorie-box">
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade show active" id="grid-view">
                                <div class="row">


                                    <?php
                                        if(isset($_GET['type'])){
                                            $type = $_GET['type'];
                                            
                                            try{
                                                $nb_article =0;

                                                if ($handle = opendir("articles/$type")) {

                                                while (false !== ($entry = readdir($handle))) {

                                                    if ($entry != "." && $entry != "..") {
                                                        $nb_article++;
                                                        $nom__prix_eclater = explode('.',$entry);
                                    ?>
                                                    <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4">
                                                        <div class="products-single fix">
                                                            <div class="box-img-hover">
                                                                <img src="articles/<?=$type.'/'.$entry?>" class="img-fluid" alt="Image">
                                                                <div class="mask-icon">
                                                                    <a class="cart" href="#">Ajouter au panier</a>
                                                                </div>
                                                            </div>
                                                            <div class="why-text">
                                                                <h4><?= $nom__prix_eclater[0] ?></h4>
                                                                <!-- <h4> <a href="{{route('details')}}"> <?= $nom__prix_eclater[0] ?> </a> </h4> -->
                                    
                                                               <!-- <h5> <?= $nom__prix_eclater[1] ?> FCFA</h5> -->
                                                               <?php 
                                                                    $text = 'voiture';
                                                                    $contains_voiture = strpos( $type, $text ) ;
                                                                    if($contains_voiture===false){  
                                                                       echo " <h6>Commande minimale : <b> $nom__prix_eclater[2] </b><h6> ";
                                                                    }
                                                                ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                    <?php

                                                    }
                                                }

                                                if($nb_article <1){
                                                    echo " 
                                                        <div class='container'>
                                                            <h3 class='text-center'> Aucun articles a afficher </h3> 
                                                        </div>
                                                    ";
                                                }

                                                closedir($handle);
                                            }
                                        }catch(Exception $e){
                                            echo " 
                                                <div class='container'>
                                                     <h3 class='text-center'> Aucun articles a afficher </h3> 
                                                </div>
                                            ";
                                        }
                                    }else{
                                        echo " 
                                        <div class='container'>
                                             <h3 class='text-center'> Aucun articles a afficher </h3> 
                                        </div>
                                    ";
                                    }
                                            
                                    ?>

                                   
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="list-view">
                                <div class="list-view-box">
                                    <div class="row">
                                        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4">
                                            <div class="products-single fix">
                                                <div class="box-img-hover">
                                                    <div class="type-lb">
                                                        <p class="new">New</p>
                                                    </div>
                                                    <img src="images/img-pro-01.jpg" class="img-fluid" alt="Image">
                                                    <div class="mask-icon">
                                                        <ul>
                                                            <li><a href="#" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                                            <li><a href="#" data-toggle="tooltip" data-placement="right" title="Compare"><i class="fas fa-sync-alt"></i></a></li>
                                                            <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                                                        </ul>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-6 col-lg-8 col-xl-8">
                                            <div class="why-text full-width">
                                                <h4>Lorem ipsum dolor sit amet</h4>
                                                <h5> <del>$ 60.00</del> $40.79</h5>
                                                <p>Integer tincidunt aliquet nibh vitae dictum. In turpis sapien, imperdiet quis magna nec, iaculis ultrices ante. Integer vitae suscipit nisi. Morbi dignissim risus sit amet orci porta, eget aliquam purus
                                                    sollicitudin. Cras eu metus felis. Sed arcu arcu, sagittis in blandit eu, imperdiet sit amet eros. Donec accumsan nisi purus, quis euismod ex volutpat in. Vestibulum eleifend eros ac lobortis aliquet.
                                                    Suspendisse at ipsum vel lacus vehicula blandit et sollicitudin quam. Praesent vulputate semper libero pulvinar consequat. Etiam ut placerat lectus.</p>
                                                <a class="btn hvr-hover" href="#">Add to Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="list-view-box">
                                    <div class="row">
                                        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4">
                                            <div class="products-single fix">
                                                <div class="box-img-hover">
                                                    <div class="type-lb">
                                                        <p class="sale">Sale</p>
                                                    </div>
                                                    <img src="images/img-pro-02.jpg" class="img-fluid" alt="Image">
                                                    <div class="mask-icon">
                                                        <ul>
                                                            <li><a href="#" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                                            <li><a href="#" data-toggle="tooltip" data-placement="right" title="Compare"><i class="fas fa-sync-alt"></i></a></li>
                                                            <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                                                        </ul>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-6 col-lg-8 col-xl-8">
                                            <div class="why-text full-width">
                                                <h4>Lorem ipsum dolor sit amet</h4>
                                                <h5> <del>$ 60.00</del> $40.79</h5>
                                                <p>Integer tincidunt aliquet nibh vitae dictum. In turpis sapien, imperdiet quis magna nec, iaculis ultrices ante. Integer vitae suscipit nisi. Morbi dignissim risus sit amet orci porta, eget aliquam purus
                                                    sollicitudin. Cras eu metus felis. Sed arcu arcu, sagittis in blandit eu, imperdiet sit amet eros. Donec accumsan nisi purus, quis euismod ex volutpat in. Vestibulum eleifend eros ac lobortis aliquet.
                                                    Suspendisse at ipsum vel lacus vehicula blandit et sollicitudin quam. Praesent vulputate semper libero pulvinar consequat. Etiam ut placerat lectus.</p>
                                                <a class="btn hvr-hover" href="#">Add to Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="list-view-box">
                                    <div class="row">
                                        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4">
                                            <div class="products-single fix">
                                                <div class="box-img-hover">
                                                    <div class="type-lb">
                                                        <p class="sale">Sale</p>
                                                    </div>
                                                    <img src="images/img-pro-03.jpg" class="img-fluid" alt="Image">
                                                    <div class="mask-icon">
                                                        <ul>
                                                            <li><a href="#" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                                            <li><a href="#" data-toggle="tooltip" data-placement="right" title="Compare"><i class="fas fa-sync-alt"></i></a></li>
                                                            <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                                                        </ul>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-6 col-lg-8 col-xl-8">
                                            <div class="why-text full-width">
                                                <h4>Lorem ipsum dolor sit amet</h4>
                                                <h5> <del>$ 60.00</del> $40.79</h5>
                                                <p>Integer tincidunt aliquet nibh vitae dictum. In turpis sapien, imperdiet quis magna nec, iaculis ultrices ante. Integer vitae suscipit nisi. Morbi dignissim risus sit amet orci porta, eget aliquam purus
                                                    sollicitudin. Cras eu metus felis. Sed arcu arcu, sagittis in blandit eu, imperdiet sit amet eros. Donec accumsan nisi purus, quis euismod ex volutpat in. Vestibulum eleifend eros ac lobortis aliquet.
                                                    Suspendisse at ipsum vel lacus vehicula blandit et sollicitudin quam. Praesent vulputate semper libero pulvinar consequat. Etiam ut placerat lectus.</p>
                                                <a class="btn hvr-hover" href="#">Add to Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Shop Page -->

@endsection