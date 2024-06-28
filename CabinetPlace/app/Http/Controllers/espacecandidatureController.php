<?php 
namespace App\Http\Controllers;

  
use Illuminate\Http\Request;
use App\Models\Etudiant;
 
class espacecandidatureController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $etudiants = Etudiant::orderBy('created_at', 'DESC')->get();
  
        return view('candidature.index', compact('etudiants'));
    }
  
    /**
     * Show the form for creating a new resource.
     */

     /*
    public function create()
    {
        return view('etudiants.create');
    }
  
    /**
     * Store a newly created resource in storage.
      
    public function store(Request $request)
    {
        Etudiant::create($request->all());
 
        return redirect()->route('products')->with('success', 'Product added successfully');
    }
  
    /**
     * Display the specified resource.
      
    public function show(string $id)
    {
        $etudiant = Etudiant::findOrFail($id);
  
        return view('espacecandidature.show', compact('etudiant'));
    }*/
  
     
    public function edit(string $id)
    {
        $etudiants = Etudiant::findOrFail($id);
  
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

    if ($request->hasFile('fichier')) {
      $path = $request->file('fichier')->store('public/files');
  } else {
      return redirect('/candidature')->with('error', 'File upload failed.');
  }


    // Mettre à jour les champs de l'étudiant
    $etudiants->NometPrenoms = $request->NometPrenoms;
    $etudiants->Email = $request->Email;
    $etudiants->NumeroDeTelephone = $request->NumeroDeTelephone;
    $etudiants->filiere = $request->filiere;
    $etudiants->fichier = $request->$path;
    
    // Vérifier si un fichier a été téléchargé
    if ($request->hasFile('fichier')) {
        // Supprimer l'ancien fichier si nécessaire
       
        // Stocker le nouveau fichier et mettre à jour le champ 'fichier'
        $etudiants->fichier = $request->file('fichier')->store('public/files');
    }

    // Sauvegarder les modifications
    $etudiants->save();

    // Rediriger avec un message de succès
    return view('candidature.edit', compact('etudiants'));
}



  /*
    /**
     * Remove the specified resource from storage.
      
    public function destroy(string $id)
    {
        $product = Etudiant::findOrFail($id);
  
        $product->delete();
  
        return redirect()->route('products')->with('success', 'product deleted successfully');
    } */
}