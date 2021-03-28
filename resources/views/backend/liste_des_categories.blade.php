@extends('partials.menu_backend')

@section('css_additionnel')
    <style>

    </style>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
@endsection

@section('contenu')

    <div class="container">
        <br><br>
        <div class="row">

            {{--         CATEGORIE--}}
            <div class="col-md-5 border">
                <h2 class="text-center">Categories </h2>
                <div class="container-fluid">

                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>Nom de categories</th>
                                <th>Nombre de sous categories liees</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Cat 1</td>
                                <td>4</td>
                                <td>
                                    <a href="#"><i class="fa fa-edit"></i></a>
                                    <a style="color: red" href="#"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            {{--         SOUS-CATEGORIE--}}
            <div class="offset-md-1 col-md-5 border">
                <h2 class="text-center"> Sous-categories </h2>
                <div class="container-fluid">

                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>Nom de categories</th>
                                <th>Categorie parentes</th>
                                <th>Nombre d'articles</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Sous-Cat 2</td>
                                <td>Cat 1</td>
                                <td>4</td>
                                <td>
                                    <a href="#"><i class="fa fa-edit"></i></a>
                                    <a style="color: red" href="#"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
@endsection


