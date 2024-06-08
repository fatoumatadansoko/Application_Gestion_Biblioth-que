<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Livre;
use App\Models\Rayon;
use App\Models\Category;

class LivreController extends Controller
{
     // Méthode pour afficher la liste des livres
     public function affichelivre()
     {
        // Récupérer tous les livres de la base de données
        $livres = Livre::with(['rayon', 'category'])->get();

        // Passer les données des livres à la vue
        return view('livres.listelivre', compact('livres'));
    }


     // Méthode pour afficher le formulaire d'ajout d'un nouvel livre
    public function ajouter_livre()
{
    // Récupérer les données des rayons depuis la base de données
    $rayons = Rayon::all();
    $categories = Category::all();

    // Passer les données des rayons à la vue 'ajouterlivre'
    return view('livres.ajouterlivre', ['rayons' => $rayons], ['categories' => $categories]) ;
}

    // Méthode pour traiter la soumission du formulaire d'ajout d'un nouvel livre
    public function ajouter_livre_traitement(Request $request)
    {
        // Créer une nouvelle instance de l'livre
        $livre = new Livre();

        // Assigner les valeurs du formulaire aux attributs de l'livre
        $livre->titre = $request->titre;
        $livre->date_publication = $request->date_publication;
        $livre->nombre_page = $request->nombre_page;
        $livre->auteur = $request->auteur;
        $livre->isbn = $request->isbn;
        $livre->editeur = $request->editeur;
        $livre->rayon_id = $request->rayon_id;
        $livre->category_id = $request->category_id;
        

        // Sauvegarder l'livre dans la base de données
        $livre->save();

        // Rediriger vers la liste des livres avec un message de succès
        return redirect()->route('liste_livre')->with('status', 'Le livre a bien été ajouté avec succès.');
    }

    
     // Méthode pour afficher le formulaire de mise à jour d'un livre
public function update_livre($id)
{
    // Récupérer le livre à mettre à jour depuis la base de données
    $livre = Livre::find($id);

    // Récupérer les rayons et les catégories depuis la base de données
    $rayons = Rayon::all();
    $categories = Category::all();

    // Passer les données du livre, des rayons et des catégories à la vue 'updatelivre'
    return view('livres.updatelivre', compact('livre', 'rayons', 'categories'));
}

 
    // Méthode pour traiter la soumission du formulaire de mise à jour d'un livre
public function update_livre_traitement(Request $request)
{
    // Récupérer le livre par l'identifiant dans la requête
    $livre = Livre::find($request->id);

    // Mettre à jour les attributs du livre avec les valeurs du formulaire
    $livre->titre = $request->titre;
    $livre->date_publication = $request->date_publication;
    $livre->nombre_page = $request->nombre_page;
    $livre->auteur = $request->auteur;
    $livre->isbn = $request->isbn;
    $livre->editeur = $request->editeur;
    $livre->rayon_id = $request->rayon_id;
    $livre->category_id = $request->category_id;

    // Sauvegarder les modifications dans la base de données
    $livre->save();

    // Rediriger vers la liste des livres avec un message de succès
    return redirect('livre')->with('status', 'Le livre a bien été modifié avec succès.');
}
}