<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Etudiant;
use Illuminate\Support\Facades\Storage;

class EtudiantController extends Controller
{


  public function index()
    {
        // Récupérer tous les enregistrements de la table 'etudiants'
        $etudiants = Etudiant::all();

        // Passer les données à la vue 'etudiants.index'
        return view('candidature.index', compact('etudiants'));
    }



    public function liste_etudiant()
    {
      return view('etudiant.liste');
    }


    public function ajouter_etudiant()
    {
      return view('etudiant.ajouter');
    }




    public function addcandidature_traitement(Request $request)
    {
        $request->validate([
'NometPrenoms'=> 'required',

'Email'=> 'required',
'NumeroDeTelephone'=> 'required',
'filiere'=> 'required',

'fichier'=>  'required|file',

        ]);

        if ($request->hasFile('fichier')) {
          $path = $request->file('fichier')->store('public/files');
      } else {
          return redirect('/candidature')->with('error', 'File upload failed.');
      }






        $etudiant = new Etudiant();
        $etudiant->NometPrenoms = $request->NometPrenoms;
        $etudiant->Email = $request->Email;
        $etudiant->NumeroDeTelephone = $request->NumeroDeTelephone;
        $etudiant->filiere = $request->filiere;
        $etudiant->fichier =  $path;
        $path = $request->file('fichier')->store('public/files');
$etudiant->fichier = basename($path); //
        $etudiant->save();


        return redirect('/candidature')->with('status','ajout avec succes');
      
    }

    public function edit($id)
{
    // Récupérer l'étudiant à éditer depuis la base de données
    $etudiants = Etudiant::findOrFail($id);

    // Passer les données à la vue d'édition
    return view('candidature.edit', compact('etudiants'));
}


public function update(Request $request, string $id)
{
    $etudiants = Etudiant::findOrFail($id);

    // Valider les champs du formulaire
    $request->validate([
        'NometPrenoms' => 'required',
        'Email' => 'required|email',
        'NumeroDeTelephone' => 'required',
        'filiere' => 'required',
        'fichier' => 'nullable|file|mimes:pdf,doc,docx|max:2048'
    ]);

    // Mettre à jour les champs de l'étudiant
    $etudiants->NometPrenoms = $request->NometPrenoms;
    $etudiants->Email = $request->Email;
    $etudiants->NumeroDeTelephone = $request->NumeroDeTelephone;
    $etudiants->filiere = $request->filiere;
     
    // Vérifier si un fichier a été téléchargé
    if ($request->hasFile('fichier')) {
        // Supprimer l'ancien fichier si nécessaire
        if ($etudiants->fichier) {
            Storage::delete($etudiants->fichier);
            
        }

        
   
        $path = $request->file('fichier')->store('public/files');
        $etudiants->fichier = str_replace('public/files/', '', $path); // Enlever 'public/files/' du chemin
     }

    // Sauvegarder les modifications
    $etudiants->save();

    // Rediriger avec un message de succès
    return view('candidature.edit', compact('etudiants'))->with('success', 'Etudiant mis à jour avec succès');
}




public function delete(string $id)
{
    // Récupérer l'étudiant à supprimer
    $etudiants = Etudiant::findOrFail($id);

    // Supprimer le fichier associé s'il existe
    if ($etudiants->fichier) {
        Storage::delete('public/files/' . $etudiants->fichier);
    }

    // Supprimer l'enregistrement de l'étudiant
    $etudiants->delete();

    return redirect('/espacecandidature')->with('error', 'File upload failed.');
    }

}
