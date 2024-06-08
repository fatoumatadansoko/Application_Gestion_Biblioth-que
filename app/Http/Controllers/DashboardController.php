<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Livre; // Importer le modèle Livre
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $category1Count = Livre::where('category_id', 1)->count();
        $category2Count = Livre::where('category_id', 2)->count();
        $category3Count = Livre::where('category_id', 3)->count();

        // Passer les données à la vue
        return view('dashboard', [
            'category1Count' => $category1Count,
            'category2Count' => $category2Count,
            'category3Count' => $category3Count,
            'user' => Auth::user()
        ]);
    }
}
