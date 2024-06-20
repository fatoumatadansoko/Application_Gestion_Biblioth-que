<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{

     // Méthode pour afficher la liste des categories
     public function affichecategory()
     {
         // Récupérer tous les categories de la base de données
         $categories = Category::all();
 
         // Retourner la vue 'categories.liste' avec les categories récupérés
         return view('categories.listecategory',compact('categories'));
     }
     // Méthode pour afficher le formulaire d'ajout d'une nouvelle category
    public function ajouter_category()
    {
        // Retourner la vue 'rayons.ajouter'
        return view('categories.ajoutercategory');
    }
     // Méthode pour traiter la soumission du formulaire d'ajout d'un nouvel category
    public function ajouter_category_traitement(Request $request)
    {
        $request->validate([
            'libelle' => 'required|string|max:255',
            'description' => 'required|string|max:255',
        ]);

        // Création d'une nouvelle catégorie
        $category = new Category();
        $category->libelle = $request->input('libelle');
        $category->description = $request->input('description');
        $category->save();

        return redirect()->back()->with('status', 'Catégorie ajoutée avec succès!');
    }

     // Méthode pour afficher le formulaire de mise à jour d'une catégories
     public function update_category($id)
     {
         // Récupérer l'categorie par son identifiant
         $categories = Category::find($id);
 
         // Retourner la vue 'Rs.update' avec l'categorie récupéré
         return view('categories.updatecategory', compact('categories'));
     }
 
     // Méthode pour traiter la soumission du formulaire de mise à jour d'un categorie
     public function update_category_traitement(Request $request)
     {
         // Récupérer l'article par l'identifiant dans la requête
         $category = Category::find($request->id);
 
         // Mettre à jour les attributs de l'category avec les valeurs du formulaire
         $category->libelle = $request->libelle;
         $category->description = $request->description;
    
 
         // Sauvegarder les modifications dans la base de données
         $category->update();
 
         // Rediriger vers la liste des categorys avec un message de succès
         return redirect('category')->with('status', 'La categorie a bien été modifié avec succès.');
     }
     // Méthode pour supprimer un article
    public function delete_category($id)
    {
        // Récupérer l'article par son identifiant
        $category = Category::find($id);

        // Supprimer l'category de la base de données
        $category->delete();

        // Rediriger vers la liste des rayons avec un message de succès
        return redirect()->route('liste_category')->with('status', 'La categorie a bien été supprimé avec succès.');
    }
    }