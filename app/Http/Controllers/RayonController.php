<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Rayon;

class RayonController extends Controller
{
    //Méthode pour afficher la page d'accueil
    public function index()
    {
        return view('rayons.index');
    }
     // Méthode pour afficher la liste des rayons
     public function affiche()
     {
         // Récupérer tous les rayons de la base de données
         $rayons = Rayon::all();
 
         // Retourner la vue 'rayons.liste' avec les rayons récupérés
         return view('rayons.liste',compact('rayons'));
     }

     // Méthode pour afficher le formulaire d'ajout d'un nouvel rayon
    public function ajouter_rayon()
    {
        // Retourner la vue 'rayons.ajouter'
        return view('rayons.ajouter');
    }

    // Méthode pour traiter la soumission du formulaire d'ajout d'un nouvel rayon
    public function ajouter_rayon_traitement(Request $request)
    {
        // Créer une nouvelle instance de l'rayon
        $rayon = new Rayon();

        // Assigner les valeurs du formulaire aux attributs de l'rayon
        $rayon->libelle = $request->libelle;
        $rayon->partie = $request->partie;
        

        // Sauvegarder l'rayon dans la base de données
        $rayon->save();

        // Rediriger vers la liste des rayons avec un message de succès
        return redirect()->route('liste_rayon')->with('status', 'Le rayon a bien été ajouté avec succès.');
    }

     // Méthode pour afficher le formulaire de mise à jour d'un rayon
     public function update_rayon($id)
     {
         // Récupérer l'rayon par son identifiant
         $rayons = Rayon::find($id);
 
         // Retourner la vue 'Rs.update' avec l'rayon récupéré
         return view('rayons.update', compact('rayons'));
     }
 
     // Méthode pour traiter la soumission du formulaire de mise à jour d'un rayon
     public function update_rayon_traitement(Request $request)
     {
         // Récupérer l'article par l'identifiant dans la requête
         $rayon = Rayon::find($request->id);
 
         // Mettre à jour les attributs de l'rayon avec les valeurs du formulaire
         $rayon->libelle = $request->libelle;
         $rayon->partie = $request->partie;
    
 
         // Sauvegarder les modifications dans la base de données
         $rayon->update();
 
         // Rediriger vers la liste des rayons avec un message de succès
         return redirect('rayons')->with('status', 'L\'article a bien été modifié avec succès.');
     }
     // Méthode pour supprimer un article
    public function delete_rayon($id)
    {
        // Récupérer l'article par son identifiant
        $rayon = Rayon::find($id);

        // Supprimer l'rayon de la base de données
        $rayon->delete();

        // Rediriger vers la liste des rayons avec un message de succès
        return redirect()->route('liste_rayon')->with('status', 'L\'rayon a bien été supprimé avec succès.');
    }
}
