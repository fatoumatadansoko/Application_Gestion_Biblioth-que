<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rayon;

class RayonController extends Controller
{
    // Méthode pour afficher la page d'accueil
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
        return view('rayons.liste', compact('rayons'));
    }

    // Méthode pour afficher le formulaire d'ajout d'un nouveau rayon
    public function ajouter_rayon()
    {
        // Retourner la vue 'rayons.ajouter'
        return view('rayons.ajouter');
    }

    // Méthode pour traiter la soumission du formulaire d'ajout d'un nouveau rayon
    public function ajouter_rayon_traitement(Request $request)
    {
        $request->validate([
            'partie' => 'required|string|max:255',
            'libelle' => 'required|string|in:Fiction,Policier,Horreur,Biographie',
        ]);

        // Création du nouveau rayon
        Rayon::create([
            'partie' => $request->partie,
            'libelle' => $request->libelle,
        ]);

        return redirect()->back()->with('status', 'Rayon ajouté avec succès!');
    }

    // Méthode pour afficher le formulaire de mise à jour d'un rayon
    public function update_rayon($id)
    {
        // Récupérer le rayon par son identifiant
        $rayon = Rayon::find($id);

        // Retourner la vue 'rayons.update' avec le rayon récupéré
        return view('rayons.update', compact('rayon'));
    }

    // Méthode pour traiter la soumission du formulaire de mise à jour d'un rayon
    public function update_rayon_traitement(Request $request, $id)
    {
        $request->validate([
            'partie' => 'required|string|max:255',
            'libelle' => 'required|string|in:Fiction,Policier,Horreur,Biographie',
        ]);

        // Rechercher le rayon par ID
        $rayon = Rayon::find($id);
        if ($rayon) {
            // Mettre à jour les champs
            $rayon->partie = $request->input('partie');
            $rayon->libelle = $request->input('libelle');
            $rayon->save();

            return redirect()->back()->with('status', 'Rayon modifié avec succès!');
        }

        return redirect()->back()->withErrors(['Rayon introuvable']);
    }

    // Méthode pour supprimer un rayon
    public function delete_rayon($id)
    {
        // Récupérer le rayon par son identifiant
        $rayon = Rayon::find($id);

        // Supprimer le rayon de la base de données
        if ($rayon) {
            $rayon->delete();
            return redirect()->route('liste_rayon')->with('status', 'Rayon supprimé avec succès.');
        }

        return redirect()->back()->withErrors(['Rayon introuvable']);
    }
}
