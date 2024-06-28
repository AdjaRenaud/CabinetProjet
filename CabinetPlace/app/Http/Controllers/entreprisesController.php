<?php

namespace App\Http\Controllers;

use App\Models\Demande;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log; // Assurez-vous que cette ligne est bien présente pour utiliser le logging

class entreprisesController extends Controller
{
    public function adddemandeentrepise_traitement(Request $request)
    {
        // Validation des données du formulaire
        $validatedData = $request->validate([
            'Email' => 'required|email',
            'fichier' => 'required|file', // Assurez-vous qu'il n'y a pas d'espace après 'file'
        ]);

        // Gestion de l'upload du fichier
        if ($request->hasFile('fichier')) {
            $file = $request->file('fichier');
            Log::info('Nom du fichier : ' . $file->getClientOriginalName());
            Log::info('Extension du fichier : ' . $file->getClientOriginalExtension());
            Log::info('Taille du fichier : ' . $file->getSize());

            $path = $file->store('public/files');
            Log::info('Chemin du fichier sauvegardé : ' . $path);
        } else {
            Log::error('Aucun fichier n\'a été téléchargé');
            return redirect('/adddemandeentreprise')->with('error', 'Le téléchargement du fichier a échoué.');
        }

        // Créer une nouvelle demande d'entreprise
        $demande = new Demande();
        $demande->email = $validatedData['Email'];
        // Ajoutez ici d'autres champs de formulaire à enregistrer dans votre modèle Demande
        $demande->fichier = str_replace('public/', '', $path); 
        // Sauvegarde de la demande en base de données
        $demande->save();

        // Redirection avec un message de succès
        return redirect()->route('demandeentreprise')->with('status', 'Votre demande a été soumise avec succès!');
    }
}
