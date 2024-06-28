<?php 
namespace App\Http\Controllers;

  
use Illuminate\Http\Request;
use App\Models\Demande;
 
class espacedemandeentreprisesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $demandeentreprise = Demande::orderBy('created_at', 'DESC')->get();
  
        return view('demandeentreprise.index', compact('demandeentreprise'));
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
    }
  */
   
     
    public function editcandidature(string $id)
    {
        $demandeentreprise = Demande::findOrFail($id);
  
        return view('products.edit', compact('product'));
    } 


   /*
    /**
     * Update the specified resource in storage.
      
    public function update(Request $request, string $id)
    {
        $product = Etudiant::findOrFail($id);
  
        $product->update($request->all());
  
        return redirect()->route('products')->with('success', 'product updated successfully');
    }
  
    /**
     * Remove the specified resource from storage.
      
    public function destroy(string $id)
    {
        $product = Etudiant::findOrFail($id);
  
        $product->delete();
  
        return redirect()->route('products')->with('success', 'product deleted successfully');
    } */
}