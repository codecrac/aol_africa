@extends('partials.includes')

@section('css_additionnel')
    <link href="{{asset('js/galerie/lightbox.min.css')}}" rel="stylesheet" />
    <style>
        .galerie{
            margin: 10px 5px;
        }
    
        .galerie img{
            width: 300px;
            padding: 5px;
            margin: 5px;
            /* filter: grayscale(100%); */
            transition: 1s;
        }
    
        .galerie img:hover{
            /* filter: grayscale(0); */
            transform: scale(1.1);
        }
    </style>
@endsection

@section('body')


                    <div class="galerie">
                        <?php
                               
                                try{
                                    $nb_article =0;

                                    if ($handle = opendir("assets/galerie")) {

                                    while (false !== ($entry = readdir($handle))) {

                                        if ($entry != "." && $entry != ".." && $entry!=".DS_Store") {
                        ?>
                                        
                                                    <a href="assets/galerie/<?=$entry?>" data-lightbox="mygallery" data-title=''>
                                                      <img src="assets/galerie/<?=$entry?>" class="img-fluid" alt="Image">
                                                    </a>
                                            
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
                            }catch(Exception $e){echo "";}
                        
                                
                        ?>
                    </div>

    
@endsection

@section('js_additionnel')
<script src="{{asset('js/galerie//lightbox.min.js')}}"></script>
@endsection