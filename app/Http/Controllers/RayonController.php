<?php

namespace App\Http\Controllers;

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rayon;

class RayonController extends Controller
{
     // Méthode pour afficher la liste des articles
     public function liste_rayon()
     {
         // Récupérer tous les articles de la base de données
         $rayons = Rayon::all();
 
         // Retourner la vue 'articles.liste' avec les articles récupérés
         return view('rayons.liste', compact('rayons'));
     }

     // Méthode pour afficher le formulaire d'ajout d'un nouvel rayon
    public function ajouter_rayon()
    {
        // Retourner la vue 'articles.ajouter'
        return view('rayons.ajouter');
    }

    // Méthode pour traiter la soumission du formulaire d'ajout d'un nouvel article
    public function ajouter_rayon_traitement(Request $request)
    {
        // Créer une nouvelle instance de l'article
        $rayon = new Rayon();

        // Assigner les valeurs du formulaire aux attributs de l'article
        $rayon->libelle = $request->libelle;
        $rayon->partie = $request->partie;
        

        // Sauvegarder l'rayon dans la base de données
        $rayon->save();

        // Rediriger vers la liste des rayons avec un message de succès
        return redirect()->route('liste_rayon')->with('status', 'L\'rayon a bien été ajouté avec succès.');
    }
}
