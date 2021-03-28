@extends('partials.menu_backend')

@section('css_additionnel')
    <style>

    </style>
@endsection

@section('contenu')

    <div class="container">
        <br><br>
         <div class="row">

             {{--         CATEGORIE--}}
             <div class="col-md-5 border">
                 <h2 class="text-center"> Ajouter une categorie </h2>
                 <div class="container-fluid">
                     <form class="row">
                         <label><br/><br/></label>
                         <label> Nom de categorie </label>
                         <input class="form-control" placeholder="Entrez le nom de la categorie" />
                         <label><br/><br/></label>
                         <input class="btn btn-dark" value="Enregistrer la categorie" />
                     </form>
                 </div>
             </div>

            {{--         SOUS-CATEGORIE--}}
             <div class="offset-md-1 col-md-5 border">
                 <h2 class="text-center"> Ajouter une sous-categorie </h2>
                 <div class="container-fluid">
                     <form class="row">
                         <label> Selectionnez la categorie parente </label>
                         <select class="form-control">
                             <option value="cat 1"> cat1 </option>
                         </select>
                         <label><br/><br/></label>
                         <label> Nom de categorie </label>
                         <input class="form-control" placeholder="Entrez le nom de la sous-categorie" />
                         <label><br/><br/></label>
                         <input class="btn btn-dark" value="Enregistrer la categorie" />
                     </form>
                 </div>
             </div>

         </div>
     </div>
@endsection


